<?php
include_once '../clases/ActiveRecord/MysqlActiveRecordAbstractFactory.php';

$oMysql = ActiveRecordAbstractFactory::getActiveRecordFactory(ActiveRecordAbstractFactory::MYSQL);
$oMysql->conectar();

$oMyIva = $oMysql->getIvaActiveRecord();
$oIva = new VoIva();
$oIva = $oMyIva->buscarTodo();
$aIva = array();
$aIva[0] = '';
foreach ($oIva as $aIva_) {
    $aIva[$aIva_->get_id()] = $aIva_->get_descripcion();
}
unset($oIva);
unset($oMyIva);

$oMyProveedor = $oMysql->getProveedorActiveRecord();
$oProveedor = new VoProveedor();
$oProveedor = $oMyProveedor->buscarTodo();
?>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tr class="text-info">
                <th>Nombre</th>
                <th>Direcci&oacute;n</th>
                <th>Tel&eacute;fono</th>
                <th>Fax</th>
                <th>Cuit</th>
            </tr>
            <?php
            foreach ($oProveedor as $aProveedor) {
                ?>
                <tr title="Iva: <?php echo $aIva[$aProveedor->get_iva_id()]; ?> - Dgr: <?php echo $aProveedor->get_dgr(); ?>">
                    <td><?php echo $aProveedor->get_nombre(); ?></td>
                    <td><?php echo $aProveedor->get_direccion(); ?></td>
                    <td><?php echo $aProveedor->get_telefono(); ?></td>
                    <td><?php echo $aProveedor->get_fax(); ?></td>
                    <td><?php echo $aProveedor->get_cuit(); ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>