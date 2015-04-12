<?php
$this->pageTitle=Yii::app()->name . ' - Alimentación Triple-Store';
$this->breadcrumbs=array(
	'Alimentación Triple-Store',
);
?>
<h1>ALIMENTACIÓN DE TRIPLE-STORE</h1>

<?php

$MCOQuery = '
    INSERT INTO <http://universidad.edu/ontologias/ModeloConocimientoOrganizacional> {
        uc_mco:Organizacion a rdfs:Class .
        uc_mco:Proceso a rdfs:Class .
        uc_mco:Competencia a rdfs:Class .
        uc_mco:Capital a rdfs:Class .

        uc_mco:CompetenciaArea a rdfs:Class .
        uc_mco:CompetenciaTipo a rdfs:Class .
        uc_mco:CompetenciaModelo a rdfs:Class .
        uc_mco:CompetenciaPerfil a rdfs:Class .

        uc_mco:CapitalEstructural rdfs:subClassOf uc_mco:Capital .
        uc_mco:CapitalHumano rdfs:subClassOf uc_mco:Capital .
        uc_mco:CapitalRelacional rdfs:subClassOf uc_mco:Capital .

        uc_mco:Intangible rdfs:subClassOf uc_mco:CapitalEstructural .
        uc_mco:Tangible rdfs:subClassOf uc_mco:CapitalEstructural .

        uc_mco:Accionista rdfs:subClassOf uc_mco:CapitalHumano .
        uc_mco:Empleado rdfs:subClassOf uc_mco:CapitalHumano .
        uc_mco:Cliente rdfs:subClassOf uc_mco:CapitalHumano .
        uc_mco:Proveedor rdfs:subClassOf uc_mco:CapitalHumano .


        uc_mco:ejecuta 
                a rdf:Property ;
                rdfs:domain uc_mco:Organizacion ;
                rdfs:range uc_mco:Proceso .

        uc_mco:concierne 
                a rdf:Property ;
                rdfs:domain uc_mco:Organizacion ;
                rdfs:range uc_mco:Competencia .

        uc_mco:utiliza 
                a rdf:Property ;
                rdfs:domain uc_mco:Organizacion ;
                rdfs:range uc_mco:Capital .


        uc_mco:especializa 
                a rdf:Property ;
                rdfs:domain uc_mco:Competencia ;
                rdfs:range uc_mco:CompetenciaArea .

        uc_mco:clasifica 
                a rdf:Property ;
                rdfs:domain uc_mco:Competencia ;
                rdfs:range uc_mco:CompetenciaTipo .

        uc_mco:categoria 
                a rdf:Property ;
                rdfs:domain uc_mco:Competencia ;
                rdfs:range uc_mco:CompetenciaModelo .

        uc_mco:extraida 
                a rdf:Property ;
                rdfs:domain uc_mco:Competencia ;
                rdfs:range uc_mco:CompetenciaPerfil .
    }
';


$ClassDefinitionsQuery = '
    INSERT INTO <http://universidad.edu/ontologias/ClassDefinitions> {
        uc_classdefs:ClassOrganizacion a uc_mco:Organizacion .
        uc_classdefs:ClassProceso a uc_mco:Proceso .

        uc_classdefs:ClassCompetencia a uc_mco:Competencia .

        uc_classdefs:ClassCapital a uc_mco:Capital .
        uc_classdefs:ClassCapitalEstructural a uc_mco:CapitalEstructural .
        uc_classdefs:ClassCapitalHumano a uc_mco:CapitalHumano .
        uc_classdefs:ClassCapitalRelacional a uc_mco:CapitalRelacional .

        uc_classdefs:ClassIntangible a uc_mco:Intangible .
        uc_classdefs:ClassTangible a uc_mco:Tangible .


        uc_classdefs:id 
                a rdf:Property ;
                rdfs:range xsd:int .

        uc_classdefs:nombre 
                a rdf:Property ;
                rdfs:range xsd:string .

        uc_classdefs:descripcion 
                a rdf:Property ;
                rdfs:range xsd:string .

        uc_classdefs:created_at 
                a rdf:Property ;
                rdfs:range xsd:dateTime .

        uc_classdefs:updated_at 
                a rdf:Property ;
                rdfs:range xsd:dateTime .

        uc_classdefs:tipo 
                a rdf:Property ;
                rdfs:range xsd:int .

        uc_classdefs:contacto 
                a rdf:Property ;
                rdfs:range xsd:string .

        uc_classdefs:organizacion 
                a rdf:Property ;
                rdfs:range uc_classdefs:ClassOrganizacion .


        uc_classdefs:url 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassOrganizacion ;
                rdfs:range xsd:string .

        uc_classdefs:sector 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassOrganizacion ;
                rdfs:range uc_classdefs:ClassSector .


        uc_classdefs:version 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassProceso ;
                rdfs:range xsd:string .

        uc_classdefs:objetivo 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassProceso ;
                rdfs:range xsd:string .

        uc_classdefs:capital_humano 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassProceso ;
                rdfs:range uc_classdefs:ClassCapitalHumano .


        uc_classdefs:modelo 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCompetencia ;
                rdfs:range xsd:string .

        uc_classdefs:perfil 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCompetencia ;
                rdfs:range xsd:string .

        uc_classdefs:area 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCompetencia ;
                rdfs:range uc_classdefs:ClassArea .


        uc_classdefs:capital 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCapital ;
                rdfs:range xsd:int .


        uc_classdefs:un_capital 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCapitalEstructural ;
                rdfs:range xsd:int .


        uc_classdefs:secundaria 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCapitalHumano ;
                rdfs:range xsd:string .


        uc_classdefs:afines 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassCapitalHumano ;
                rdfs:range xsd:string .


        uc_classdefs:locacion 
                a rdf:Property ;
                rdfs:domain uc_classdefs:ClassTangible ;
                rdfs:range xsd:string .



        uc_classdefs:ClassArea 
                a rdfs:Class .


        uc_classdefs:ClassSector 
                a rdfs:Class .
    }
';

echo '[+] Almacenando tripletas concernientes a la estructura de MCO (Modelo de Conocimiento Organizacional) ...<br/>';
ModelBase::StoreMCOTriples($MCOQuery);
echo '[+] Almacenando tripletas concernientes a las definiciones de clases del MCO ...<br/>';
ModelBase::StoreMCOTriples($ClassDefinitionsQuery);



foreach (Proceso::model()->findAll() as $proceso) {
    $sQuery = '
        uc_procs:Proceso-'.$proceso->id.' 
            a uc_classdefs:ClassProceso ; 
            uc_classdefs:id '.$proceso->id.' ; 
            uc_classdefs:version "'.$proceso->version.'" ; 
            uc_classdefs:nombre "'.$proceso->nombre.'" ; 
            uc_classdefs:tipo '.$proceso->tipo.' ; 
            uc_classdefs:objetivo "'.$proceso->objetivo.'" ; 
            uc_classdefs:organizacion_id uc_orgs:Organizacion-'.$proceso->organizacion->id.' ; 
            uc_classdefs:capital_humano uc_capshums:CapitalHumano-'.$proceso->capitalHumano->id.' ; 
            uc_classdefs:created_at "'.$proceso->created_at.'" ; 
            uc_classdefs:updated_at "'.$proceso->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a Proceso-'.$proceso->id.' ...<br/>';
    $proceso->StoreNewModelTriples($sQuery);
}


foreach (Organizacion::model()->findAll() as $organizacion) {
    $sQuery = '
        uc_orgs:Organizacion-'.$organizacion->id.' 
            a uc_classdefs:ClassOrganizacion ; 
            uc_classdefs:id '.$organizacion->id.' ; 
            uc_classdefs:nombre "'.$organizacion->nombre.'" ; 
            uc_classdefs:contacto "'.$organizacion->contacto.'" ; 
            uc_classdefs:url "'.$organizacion->url.'" ; 
            uc_classdefs:sector uc_secs:Sector-'.$organizacion->sector->id.' ; 
            uc_classdefs:descripcion "'.$organizacion->descripcion.'" ; 
            uc_classdefs:created_at "'.$organizacion->created_at.'" ; 
            uc_classdefs:updated_at "'.$organizacion->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a Organizacion-'.$organizacion->id.' ...<br/>';
    $organizacion->StoreNewModelTriples($sQuery);
}


foreach (Competencia::model()->findAll() as $competencia) {
    $sQuery = '
        uc_comps:Competencia-'.$competencia->id.' 
            a uc_classdefs:ClassCompetencia ; 
            uc_classdefs:id '.$competencia->id.' ; 
            uc_classdefs:nombre "'.$competencia->nombre.'" ; 
            uc_classdefs:tipo '.$competencia->tipo.' ; 
            uc_classdefs:modelo "'.$competencia->modelo.'" ; 
            uc_classdefs:perfil "'.$competencia->perfil.'" ; 
            uc_classdefs:area uc_areas:Area-'.$competencia->area->id.' ; 
            uc_classdefs:descripcion "'.$competencia->descripcion.'" ; 
            uc_classdefs:created_at "'.$competencia->created_at.'" ; 
            uc_classdefs:updated_at "'.$competencia->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a Competencia-'.$competencia->id.' ...<br/>';
    $competencia->StoreNewModelTriples($sQuery);
}


foreach (CapitalEstructural::model()->findAll() as $capitalestructural) {
    $sQuery = '
        uc_capsests:CapitalEstructural-'.$capitalestructural->id.' 
            a uc_classdefs:ClassCapitalEstructural ; 
            uc_classdefs:id '.$capitalestructural->id.' ; 
            uc_classdefs:nombre "'.$capitalestructural->nombre.'" ; 
            uc_classdefs:descripcion "'.$capitalestructural->descripcion.'" ; 
            uc_classdefs:tipo '.$capitalestructural->tipo.' ; 
            uc_classdefs:un_capital '.$capitalestructural->un_capital.' ; 
            uc_classdefs:created_at "'.$capitalestructural->created_at.'" ; 
            uc_classdefs:updated_at "'.$capitalestructural->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a CapitalEstructural-'.$capitalestructural->id.' ...<br/>';
    $capitalestructural->StoreNewModelTriples($sQuery);
}


foreach (CapitalHumano::model()->findAll() as $capitalhumano) {
    $sQuery = '
        uc_capshums:CapitalHumano-'.$capitalhumano->id.' 
            a uc_classdefs:ClassCapitalHumano ; 
            uc_classdefs:id '.$capitalhumano->id.' ; 
            uc_classdefs:nombre "'.$capitalhumano->nombre.'" ; 
            uc_classdefs:tipo '.$capitalhumano->tipo.' ; 
            uc_classdefs:contacto "'.$capitalhumano->contacto.'" ; 
            uc_classdefs:secundaria "'.$capitalhumano->secundaria.'" ; 
            uc_classdefs:created_at "'.$capitalhumano->created_at.'" ; 
            uc_classdefs:updated_at "'.$capitalhumano->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a CapitalHumano-'.$capitalhumano->id.' ...<br/>';
    $capitalhumano->StoreNewModelTriples($sQuery);
}


foreach (CapitalRelacional::model()->findAll() as $capitalrelacional) {
    $sQuery = '
        uc_capsrels:CapitalRelacional-'.$capitalrelacional->id.' 
            a uc_classdefs:ClassCapitalRelacional ; 
            uc_classdefs:id '.$capitalrelacional->id.' ; 
            uc_classdefs:afines "'.$capitalrelacional->afines.'" ; 
            uc_classdefs:organizacion '.$capitalrelacional->organizacion_id.' ; 
            uc_classdefs:created_at "'.$capitalrelacional->created_at.'" ; 
            uc_classdefs:updated_at "'.$capitalrelacional->updated_at.'" .
    ';
    echo '[+] Almacenando tripletas concernientes a CapitalRelacional-'.$capitalrelacional->id.' ...<br/>';
    $capitalrelacional->StoreNewModelTriples($sQuery);
}

?>

<div id="dMenuModels">
    <?php
        //$this->widget('zii.widgets.CMenu',array('items'=>$aMenu,));
    ?>
</div><!-- mainmenu -->
