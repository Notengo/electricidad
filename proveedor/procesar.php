<?php
include_once '../clases/ActiveRecord/MysqlActiveRecordAbstractFactory.php';

$oMysql = ActiveRecordAbstractFactory::getActiveRecordFactory(ActiveRecordAbstractFactory::MYSQL);
$oMysql->conectar();

extract($_POST, EXTR_OVERWRITE);

$oMyProveedor = $oMysql->getProveedorActiveRecord();
$oProveedor = new VoProveedor();
$oProveedor->set_nombre($nombre);
$oProveedor->set_duenio($duenio);
$oProveedor->set_direccion($direccion);
$oProveedor->set_telefono($telefono);
$oProveedor->set_fax($fax);
$oProveedor->set_idCondFiscales($iva);
$oProveedor->set_mail($mail);
$oProveedor->set_cuit($cuit);
mysql_query("begin;");
$existe = $oMyProveedor->existe($oProveedor);

if ($existe) {
    if ($oMyProveedor->guardar($oProveedor)) {
        mysql_query("COMMIT;");
        ?>
        <div class="text-center">
            <div class="alert alert-success" role="alert">Los datos se almacenaron</div>
        </div>
        <?php
    } else {
        mysql_query("ROLLBACK;");
        ?>
        <div class="text-center">
            <div class="alert alert-danger" role="alert">Los datos NO se almacenaron</div>
        </div>
        <?php
    }
} else {
    mysql_query("ROLLBACK;");
    ?>
    <div class="text-center">
        <div class="alert alert-danger" role="alert">Los datos NO se almacenaron,<br> El Proveedor ya existe.</div>
    </div>
    <?php
}
    