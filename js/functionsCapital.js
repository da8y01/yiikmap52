/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function carga(){
    ocultaTipoCapital();
}


function ocultaTipoCapital(){
    //vTipo = document.getElementById('tipo').selectedIndex;
    vTipo = document.getElementById('tipo').options[document.getElementById('tipo').selectedIndex].value;
    //alert(vTipo);
    vCapEst = document.getElementById('dCapEst');
    vCapHum = document.getElementById('dCapHum');
    vCapRel = document.getElementById('dCapRel');

    switch(vTipo)
    {
        case '1':
            vCapEst.style.display = 'block';
            vCapHum.style.display = 'none';
            vCapRel.style.display = 'none';
            break;
        case '2':
            vCapEst.style.display = 'none';
            vCapHum.style.display = 'block';
            vCapRel.style.display = 'none';
            break;
        case '3':
            vCapEst.style.display = 'none';
            vCapHum.style.display = 'none';
            vCapRel.style.display = 'block';
            break;
        default:
            vCapEst.style.display = 'none';
            vCapHum.style.display = 'none';
            vCapRel.style.display = 'none';
            break;
    }

}

