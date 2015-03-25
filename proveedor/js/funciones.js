function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function actualizarProveedor() {
//    var id_prov = document.formulario.id.value, id_fecha = document.formulario.fecha.value,
    var nom = document.formulario.nombre.value, due = document.formulario.duenio.value,
            dire = document.formulario.direccion.value, tel = document.formulario.telefono.value,
            fax = document.formulario.fax.value, indice = document.formulario.iva.selectedIndex,
            condIva = document.formulario.iva.options[indice].value, mail = document.formulario.mail.value,
            cuit = document.formulario.cuit.value, divResultado = document.getElementById('divResultado');
    var cond = 0;
//    if ((nom == '') && (due == '')) {
//        divMsj.innerHTML = '<div style=color:red align=center>Ingrese los Datos Requeridos</div>';
//        cond = 1;
//    } else {
//        if (condIva == 0) {
//            divMsj.innerHTML = '<div style=color:red align=center>Ingrese Condici&oacute;n de IVA</div>';
//            cond = 1;
//        }
//        if (tel == '') {
//            divMsj.innerHTML = '<div style=color:red align=center>Ingrese Tel&eacute;fono</div>';
//            cond = 1;
//        }
//        if (dire == '') {
//            divMsj.innerHTML = '<div style=color:red align=center>Ingrese Direcci&oacute;n</div>';
//            cond = 1;
//        }
//        if (due == '') {
//            divMsj.innerHTML = '<div style=color:red align=center>Ingrese Due&ntilde;o</div>';
//            cond = 1;
//        }
//        if (nom == '') {
//            divMsj.innerHTML = '<div style=color:red align=center>Ingrese Nombre del Proveedor</div>';
//            cond = 1;
//        }
//    }
    if (cond === 0) {
        var ajax = objetoAjax();
        ajax.open("POST", "procesar.php", true);
        ajax.onreadystatechange = function() {
            if (ajax.readyState === 1) {
                divResultado.innerHTML = '';
            } else if (ajax.readyState === 4) {
                //mostrar los nuevos registros en esta capa
                divResultado.innerHTML = ajax.responseText;
                //una vez actualizacion ocultamos formulario
//                document.formulario.id.value = 0;
//                document.formulario.fecha.value = '';
//                document.formulario.nombre.value = '';
//                document.formulario.duenio.value = '';
//                document.formulario.direccion.value = '';
//                document.formulario.telefono.value = '';
//                document.formulario.fax.value = '';
//                document.formulario.iva.selectedIndex = 0;
//                document.formulario.iva.options[document.formulario.iva.selectedIndex].value = 0;
//                document.formulario.mail.value = '';
//                document.formulario.cuit.value = '';
            }
        };
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        ajax.send("nombre=" + nom + "&duenio=" + due
                + "&direccion=" + dire + "&telefono=" + tel
                + "&fax=" + fax + "&iva=" + condIva
                + "&mail=" + mail + "&cuit=" + cuit);
        return true;
    }
}