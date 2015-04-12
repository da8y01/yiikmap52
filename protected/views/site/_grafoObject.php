<div class="view">
    <script>
        var graph = new Graph();
        
<?php
if (count($aRowsObject) >= 1) {

    //echo "var object = graph.newNode({label: '" . $aRowsObject[0]['object'] . "'});";
    $subObject = strrchr($aRowsObject[0]['object'], '#');
    if (empty($subObject)) {
        $subObject = $aRowsObject[0]['object'];
    }
    echo "var object = graph.newNode({label: '" . $subObject . "'});";
    
    $c = 0;
    foreach ($aRowsObject as $row) {

        $sSubject = 'subject_' . ++$c;
        
        //echo "var " . $sSubject . " = graph.newNode({label: '" . $row['subject'] . "'});";
        $subSubject = strrchr($row['subject'], '#');
        if (empty($subSubject)) {
            $subSubject = $row['subject'];
        }
        echo "var " . $sSubject . " = graph.newNode({label: '" . $subSubject . "'});";

        //echo "graph.newEdge(root, " . $sNode . ", {color: '#000000', label: '" . $row['predicate'] . "'});";
        //echo "graph.newEdge(" . $sSubject . ", object, {label: '" . $row['predicate'] . "'});";
        $subPredicate = strrchr($row['predicate'], '#');
        if (empty($subPredicate)) {
            $subPredicate = $row['predicate'];
        }
        echo "graph.newEdge(" . $sSubject . ", object, {label: '" . $subPredicate . "'});";

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
