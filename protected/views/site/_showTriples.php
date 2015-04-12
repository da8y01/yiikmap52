<div style="width:1000px;height:600px;">

    <table>
        <thead>
            <tr>
                <th colspan="2" style="text-align:center;">SUJETO:
                    <?php
                    $substrShowTriplesSubject = '';
                    if (count($rows_Subject) >= 1) {
                        //echo $rows_Subject[0]['subject'];
                        $sShowTriplesSubject = $rows_Subject[0]['subject'];
                        $substrShowTriplesSubject = substr($sShowTriplesSubject, strripos($sShowTriplesSubject,'#')+1, strripos(strrchr($sShowTriplesSubject,'#'),'-')-1);
                        echo CHtml::link(CHtml::encode($sShowTriplesSubject), array($substrShowTriplesSubject.'/view', 'id'=>substr($sShowTriplesSubject, strripos($sShowTriplesSubject, '-')+1)));
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th>PREDICADO</th>
                <th>OBJETO</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $iEntidadId = 0;
            $iEntidadTipo = 0;
            $iCapEstUnCapital = 0;
            foreach ($rows_Subject as $row) {
                echo '<tr>';
                if ($row['predicate'] === 'http://universidad.edu/ontologias/ClassDefinitions#id') {
                    $iEntidadId = (int)$row['object'];
                    echo '<td>' . $row['predicate'] . '</td>';
                    //echo '<td>' . $row['object'] . '</td>';
                    //echo '<td>' . CHtml::link(CHtml::encode($iCapEstId), array('CapitalEstructural/view', 'id'=>$iCapEstId)) . '</td>';
                    echo '<td>' . CHtml::link(CHtml::encode($iEntidadId), array($substrShowTriplesSubject.'/view', 'id'=>$iEntidadId)) . '</td>';
                }
                else if ($row['predicate'] === 'http://universidad.edu/ontologias/ClassDefinitions#tipo') {
                    //$oCapEstShowTriples = CapitalEstructural::model()->findByPk($iCapEstId);
                    echo '<td>' . $row['predicate'] . '</td>';
                    //echo '<td>' . $row['object'] . '</td>';
                    $iEntidadTipo = (int)$row['object'];
                    //echo '<td>' . CHtml::encode(Lookup::item('TipoCapitalEstructural',$iCapEstTipo).' ('.$iCapEstTipo.')') . '</td>';
                    echo '<td>' . CHtml::encode(Lookup::item('Tipo'.$substrShowTriplesSubject,$iEntidadTipo).' ('.$iEntidadTipo.')') . '</td>';
                }
                else if ($row['predicate'] === 'http://universidad.edu/ontologias/ClassDefinitions#un_capital') {
                    echo '<td>' . $row['predicate'] . '</td>';
                    //echo '<td>' . $row['object'] . '</td>';
                    $iCapEstUnCapital = (int)$row['object'];
                    $recurso = null;
                    switch ($iEntidadTipo) {
                        case 1:
                            $recurso = Intangible::model()->findByPk($iCapEstUnCapital);
                            echo '<td>'.CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Intangible/view', 'id'=>$recurso->id)).'</td>';
                            break;

                        case 2:
                            $recurso = Tangible::model()->findByPk($iCapEstUnCapital);
                            echo '<td>'.CHtml::link(CHtml::encode($recurso->nombre.' ('.$recurso->id.')'), array('Tangible/view', 'id'=>$recurso->id)).'</td>';
                            break;

                        default:
                            break;
                    }
                }
                else if ($row['predicate'] === 'http://universidad.edu/ontologias/ClassDefinitions#organizacion') {
                    echo '<td>' . $row['predicate'] . '</td>';
                    //$iCapRelOrg = (int)$row['object'];
                    $oCapRelShowTriples = CapitalRelacional::model()->findByPk($iEntidadId);
                    echo '<td>'.CHtml::link(CHtml::encode($oCapRelShowTriples->orgnombre . ' ('.$oCapRelShowTriples->organizacion_id.')'), array('Organizacion/view', 'id'=>$oCapRelShowTriples->organizacion_id)).'</td>';
                }
                else {
                    echo '<td>' . $row['predicate'] . '</td>';
                    echo '<td>' . $row['object'] . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>


    <table>
        <thead>
            <tr>
                <th colspan="2" style="text-align:center;">OBJETO:
                    <?php
                    if (count($rows_Object) >= 1) {
                        //echo $rows_Object[0]['object'];
                        $sShowTriplesObject = $rows_Object[0]['object'];
                        $substrShowTriplesObject = substr($sShowTriplesObject, strripos($sShowTriplesObject,'#')+1, strripos(strrchr($sShowTriplesObject,'#'),'-')-1);
                        echo CHtml::link(CHtml::encode($sShowTriplesObject), array($substrShowTriplesObject.'/view', 'id'=>substr($sShowTriplesObject, strripos($sShowTriplesObject, '-')+1)));
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th>SUJETO</th>
                <th>PREDICADO</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($rows_Object as $row) {
                echo '<tr>';
                echo '<td>' . $row['subject'] . '</td>';
                echo '<td>' . $row['predicate'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>


    <table>
        <thead>
            <tr>
                <th colspan="2" style="text-align:center;">PREDICADO:
                    <?php
                    if (count($rows_Predicate) >= 1) {
                        //echo $rows_Predicate[0]['predicate'];
                        $sShowTriplesPredicate = $rows_Object[0]['predicate'];
                        echo CHtml::link(CHtml::encode($sShowTriplesPredicate), array('CapitalEstructural/view', 'id'=>substr($sShowTriplesPredicate, strripos($sShowTriplesPredicate, '-')+1)));
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th>SUJETO</th>
                <th>OBJETO</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($rows_Predicate as $row) {
                echo '<tr>';
                echo '<td>' . $row['subject'] . '</td>';
                echo '<td>' . $row['object'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</div>
