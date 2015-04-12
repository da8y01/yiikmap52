<div class="view">
    <script>
        var graph = new Graph();
        
<?php
if (count($aRowsPredicate) >= 1) {
    foreach ($aRowsPredicate as $row) {

        $subSubject = strrchr($row['subject'], '#');
        if (empty($subSubject)) {
            $subSubject = $row['subject'];
        }

        $subObject = strrchr($row['object'], '#');
        if (empty($subObject)) {
            $subObject = $row['object'];
        }

        $subPredicate = strrchr($row['predicate'], '#');
        if (empty($subPredicate)) {
            $subPredicate = $row['predicate'];
        }

        echo "graph.newEdge(graph.newNode({label: '" . $subSubject . "'}), graph.newNode({label: '" . $subObject . "'}), {label: '" . $subPredicate . "'});";
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
