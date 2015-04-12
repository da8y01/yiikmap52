<div class="view">
    <script>
        var graph = new Graph();
        
<?php
if (count($aRowsSubject) >= 1) {

    //echo "var subject = graph.newNode({label: '" . $aRowsSubject[0]['subject'] . "'});";
    $subSubject = strrchr($aRowsSubject[0]['subject'], '#');
    if (empty($subSubject)) {
        $subSubject = $aRowsSubject[0]['subject'];
    }
    echo "var subject = graph.newNode({label: '" .$subSubject. "'});";

    $iGrafoSubjectEntidadTipo = 0;
    $c = 0;
    foreach ($aRowsSubject as $row) {
        $sObject = 'object_' . ++$c;
        
        //echo "var " . $sObject . " = graph.newNode({label: '" . $row['object'] . "'});";
        $subObject = '';
        if (strpos($row['object'], 'http') === FALSE) {
            $subObject = $row['object'];
        }
        else {
            $subObject = strrchr($row['object'], '#');
        }
        
        if (empty($subObject)) {
            $subObject = $row['object'];
        }
        
        $subPredicate = strrchr($row['predicate'], '#');
        $sGrafoSubjectEntidadTipo = '';
        $iGrafoSubjectCapEstUnCapital = 0;
        if ($subPredicate === '#tipo') {
            $iGrafoSubjectEntidadTipo = (int)$subObject;
            $subObject = Lookup::item('Tipo'.substr($subSubject, 1, strripos($subSubject, '-')-1), (int)$subObject).' ('.$subObject.')';
        }
        $substrSubject = substr($subSubject, 0, strripos($subSubject, '-'));
        if ($substrSubject === '#CapitalEstructural' && $subPredicate === '#un_capital') {
            $iGrafoSubjectCapEstUnCapital = (int)$row['object'];
            $recurso = null;
            switch ($iGrafoSubjectEntidadTipo) {
                case 1:
                    $recurso = Intangible::model()->findByPk($iGrafoSubjectCapEstUnCapital);
                    $subObject = $recurso->nombre.' ('.$recurso->id.')';
                    break;

                case 2:
                    $recurso = Tangible::model()->findByPk($iGrafoSubjectCapEstUnCapital);
                    $subObject = $recurso->nombre.' ('.$recurso->id.')';
                    break;

                default:
                    break;
            }
        }
        if ($substrSubject === '#CapitalRelacional' && $subPredicate === '#organizacion') {
            $subObject = Organizacion::model()->findByPk((int)$subObject)->nombre.' ('.$subObject.')';
        }
        echo "var " . $sObject . " = graph.newNode({label: '" . $subObject . "'});";

        //echo "graph.newEdge(root, " . $sNode . ", {color: '#000000', label: '" . $row['predicate'] . "'});";
        //echo "graph.newEdge(subject, " . $sObject . ", {label: '" . $row['predicate'] . "'});";
        if (empty($subPredicate)) {
            $subPredicate = $row['predicate'];
        }
        echo "graph.newEdge(subject, " . $sObject . ", {label: '" . $subPredicate . "'});";

        //echo "graph.newEdge(graph.newNode({label: '" . $row['subject'] . "'}), graph.newNode({label: '" . $row['object'] . "'}), {label: '" . $row['predicate'] . "'});";
    }
}
?>

    jQuery(function(){
        var springy = jQuery('#springydemo').springy({
            graph: graph
        });
    });
    </script>

    <canvas id="springydemo" width="800" height="600" />
</div>
