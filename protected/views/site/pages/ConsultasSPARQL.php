<?php
$this->pageTitle=Yii::app()->name . ' - WebService Clients';
$this->breadcrumbs=array(
	'WebService Clients',
);
?>
<h1>EJEMPLOS DE CONSULTAS SPARQL</h1>

<div>
    <h2>Consulta gen&eacute;rica</h2>
    <pre>
        PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .
        PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .
        PREFIX dc: &lt;http://purl.org/dc/elements/1.1/&gt; .
        PREFIX owl: &lt;http://www.w3.org/2002/07/owl#&gt; .
        PREFIX ex: &lt;http://www.example.org/&gt; .
        PREFIX xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .
        PREFIX uc_mco: &lt;http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#&gt; .
        PREFIX uc_classdefs: &lt;http://universidad.edu/ontologias/ClassDefinitions#&gt; .
        PREFIX uc_orgs: &lt;http://universidad.edu/ontologias/OrganizacionInstances#&gt; .
        PREFIX uc_procs: &lt;http://universidad.edu/ontologias/ProcesoInstances#&gt; .
        PREFIX uc_areas: &lt;http://universidad.edu/ontologias/AreaInstances#&gt; .
        PREFIX uc_secs: &lt;http://universidad.edu/ontologias/SectorInstances#&gt; .
        PREFIX uc_comps: &lt;http://universidad.edu/ontologias/CompetenciaInstances#&gt; .
        PREFIX uc_caps: &lt;http://universidad.edu/ontologias/CapitalInstances#&gt; .
        PREFIX uc_capsests: &lt;http://universidad.edu/ontologias/CapitalEstructuralInstances#&gt; .
        PREFIX uc_capshums: &lt;http://universidad.edu/ontologias/CapitalHumanoInstances#&gt; .
        PREFIX uc_capsrels: &lt;http://universidad.edu/ontologias/CapitalRelacionalInstances#&gt; .
        PREFIX uc_intans: &lt;http://universidad.edu/ontologias/IntangibleInstances#&gt; .
        PREFIX uc_tans: &lt;http://universidad.edu/ontologias/TangibleInstances#&gt; .

        PREFIX uc_instances: &lt;http://universidad.edu/ontologias/TheInstances#&gt; .


        SELECT * WHERE {
          GRAPH &lt;http://universidad.edu/ontologias/TheInstances&gt; { ?s ?p ?o . }
        }
        LIMIT 10
    </pre>
</div>
<hr>
<div>
    <h2>Consulta con parte espec&iacute;fica de la tripleta</h2>
    <pre>
        PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .
        PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .
        PREFIX dc: &lt;http://purl.org/dc/elements/1.1/&gt; .
        PREFIX owl: &lt;http://www.w3.org/2002/07/owl#&gt; .
        PREFIX ex: &lt;http://www.example.org/&gt; .
        PREFIX xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .
        PREFIX uc_mco: &lt;http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#&gt; .
        PREFIX uc_classdefs: &lt;http://universidad.edu/ontologias/ClassDefinitions#&gt; .
        PREFIX uc_orgs: &lt;http://universidad.edu/ontologias/OrganizacionInstances#&gt; .
        PREFIX uc_procs: &lt;http://universidad.edu/ontologias/ProcesoInstances#&gt; .
        PREFIX uc_areas: &lt;http://universidad.edu/ontologias/AreaInstances#&gt; .
        PREFIX uc_secs: &lt;http://universidad.edu/ontologias/SectorInstances#&gt; .
        PREFIX uc_comps: &lt;http://universidad.edu/ontologias/CompetenciaInstances#&gt; .
        PREFIX uc_caps: &lt;http://universidad.edu/ontologias/CapitalInstances#&gt; .
        PREFIX uc_capsests: &lt;http://universidad.edu/ontologias/CapitalEstructuralInstances#&gt; .
        PREFIX uc_capshums: &lt;http://universidad.edu/ontologias/CapitalHumanoInstances#&gt; .
        PREFIX uc_capsrels: &lt;http://universidad.edu/ontologias/CapitalRelacionalInstances#&gt; .
        PREFIX uc_intans: &lt;http://universidad.edu/ontologias/IntangibleInstances#&gt; .
        PREFIX uc_tans: &lt;http://universidad.edu/ontologias/TangibleInstances#&gt; .

        PREFIX uc_instances: &lt;http://universidad.edu/ontologias/TheInstances#&gt; .


        SELECT * WHERE {
          GRAPH &lt;http://universidad.edu/ontologias/TheInstances&gt; { ?s uc_classdefs:organizacion_id ?o . }
        }
    </pre>
</div>
<hr>
<div>
    <h2>Inserci&oacute;n de tripletas</h2>
    <pre>
        PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .
        PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .
        PREFIX dc: &lt;http://purl.org/dc/elements/1.1/&gt; .
        PREFIX owl: &lt;http://www.w3.org/2002/07/owl#&gt; .
        PREFIX ex: &lt;http://www.example.org/&gt; .
        PREFIX xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .
        PREFIX uc_mco: &lt;http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#&gt; .
        PREFIX uc_classdefs: &lt;http://universidad.edu/ontologias/ClassDefinitions#&gt; .
        PREFIX uc_orgs: &lt;http://universidad.edu/ontologias/OrganizacionInstances#&gt; .
        PREFIX uc_procs: &lt;http://universidad.edu/ontologias/ProcesoInstances#&gt; .
        PREFIX uc_areas: &lt;http://universidad.edu/ontologias/AreaInstances#&gt; .
        PREFIX uc_secs: &lt;http://universidad.edu/ontologias/SectorInstances#&gt; .
        PREFIX uc_comps: &lt;http://universidad.edu/ontologias/CompetenciaInstances#&gt; .
        PREFIX uc_caps: &lt;http://universidad.edu/ontologias/CapitalInstances#&gt; .
        PREFIX uc_capsests: &lt;http://universidad.edu/ontologias/CapitalEstructuralInstances#&gt; .
        PREFIX uc_capshums: &lt;http://universidad.edu/ontologias/CapitalHumanoInstances#&gt; .
        PREFIX uc_capsrels: &lt;http://universidad.edu/ontologias/CapitalRelacionalInstances#&gt; .
        PREFIX uc_intans: &lt;http://universidad.edu/ontologias/IntangibleInstances#&gt; .
        PREFIX uc_tans: &lt;http://universidad.edu/ontologias/TangibleInstances#&gt; .

        PREFIX uc_instances: &lt;http://universidad.edu/ontologias/TheInstances#&gt; .

        INSERT INTO &lt;http://universidad.edu/ontologias/TheInstances&gt; {

            uc_orgs:Organizacion-999 
                a uc_classdefs:ClassOrganizacion ; 
                uc_classdefs:id 999 ; 
                uc_classdefs:nombre "Organización de Prueba" ; 
                uc_classdefs:contacto "Calle 99 #99-99" ; 
                uc_classdefs:url "http://www.prueba.com/" ; 
                uc_classdefs:sector uc_secs:Sector-99 ; 
                uc_classdefs:descripcion "Descripción de organización de prueba." ; 
                uc_classdefs:created_at "2001-01-01 01:01:01" ; 
                uc_classdefs:updated_at "2001-01-01 01:01:01" .

        }
    </pre>
</div>
<hr>
<div>
    <h2>Borrado de tripletas</h2>
    <pre>
        PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt; .
        PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt; .
        PREFIX dc: &lt;http://purl.org/dc/elements/1.1/&gt; .
        PREFIX owl: &lt;http://www.w3.org/2002/07/owl#&gt; .
        PREFIX ex: &lt;http://www.example.org/&gt; .
        PREFIX xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .
        PREFIX uc_mco: &lt;http://universidad.edu/ontologias/ModeloConocimientoOrganizacional#&gt; .
        PREFIX uc_classdefs: &lt;http://universidad.edu/ontologias/ClassDefinitions#&gt; .
        PREFIX uc_orgs: &lt;http://universidad.edu/ontologias/OrganizacionInstances#&gt; .
        PREFIX uc_procs: &lt;http://universidad.edu/ontologias/ProcesoInstances#&gt; .
        PREFIX uc_areas: &lt;http://universidad.edu/ontologias/AreaInstances#&gt; .
        PREFIX uc_secs: &lt;http://universidad.edu/ontologias/SectorInstances#&gt; .
        PREFIX uc_comps: &lt;http://universidad.edu/ontologias/CompetenciaInstances#&gt; .
        PREFIX uc_caps: &lt;http://universidad.edu/ontologias/CapitalInstances#&gt; .
        PREFIX uc_capsests: &lt;http://universidad.edu/ontologias/CapitalEstructuralInstances#&gt; .
        PREFIX uc_capshums: &lt;http://universidad.edu/ontologias/CapitalHumanoInstances#&gt; .
        PREFIX uc_capsrels: &lt;http://universidad.edu/ontologias/CapitalRelacionalInstances#&gt; .
        PREFIX uc_intans: &lt;http://universidad.edu/ontologias/IntangibleInstances#&gt; .
        PREFIX uc_tans: &lt;http://universidad.edu/ontologias/TangibleInstances#&gt; .

        PREFIX uc_instances: &lt;http://universidad.edu/ontologias/TheInstances#&gt; .

        DELETE FROM &lt;http://universidad.edu/ontologias/TheInstances&gt; {
            uc_orgs:Organizacion-999 ?p ?o .
        }
    </pre>
</div>
