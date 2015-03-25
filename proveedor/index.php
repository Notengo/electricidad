<?php
include_once '../clases/ActiveRecord/MysqlActiveRecordAbstractFactory.php';

$oMysql = ActiveRecordAbstractFactory::getActiveRecordFactory(ActiveRecordAbstractFactory::MYSQL);
$oMysql->conectar();

$oMyIva = $oMysql->getIvaActiveRecord();
$oIva = new VoIva();
$oIva = $oMyIva->buscarTodo();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proveedor</title>
        <script src="js/funciones.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
            <legend>Proveedor</legend>
            <form method="POST" name="formulario" id="formulario" onsubmit="actualizarProveedor();
                    return false;" action="#" >

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nombre</div>
                            <input class="form-control" type="text" id="nombre" name="nombre" maxlength="150" />
                        </div>
                    </div>

                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Due&ntilde;o</div>
                            <input class="form-control" type="text" id="duenio" maxlength="150" name="duenio" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Direcci&oacute;n:</div>
                            <input class="form-control" type="text" id="direccion" maxlength="150" name="direccion" />
                        </div>
                    </div>

                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Email</div>
                            <input class="form-control" type="email" id="mail" maxlength="150" name="mail" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tel&eacute;fono</div>
                            <input class="form-control" type="text" id="telefono" maxlength="50" name="telefono" />
                        </div>
                    </div>

                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Fax</div>
                            <input class="form-control" type="text" id="fax" maxlength="50" name="fax" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Cond. IVA</div>
                            <select class="form-control" name="iva" id="iva">
                                <option value="0">Seleccione</option>
                                <?php
                                foreach ($oIva as $aIva) {
                                    echo "<option value='" . $aIva->get_id() . "'>"
                                    . $aIva->get_descripcion() . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>                    

                    <div class="col-sm-6 form-group">
                        <div class="input-group">
                            <div class="input-group-addon">CUIT</div>
                            <input class="form-control" type="text" id="cuit" maxlength="50" name="cuit" />
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!--<div class="col-sm-3"></div>-->
                    <input type="button" name="guardar" class="col-sm-1 btn btn-primary" value="Aceptar" onclick="actualizarProveedor()">
                    <div class="col-xs-1"></div>
                    <input type="button" class="col-sm-1 btn btn-primary" value="Cancelar" onclick="javascript: window.location.href = 'proveedor_frm.php'">
                </div>
            </form>
            <br />
            <div class="row">
                <div id="divResultado"></div>
            </div>
            <!--            <div id="divListadoProveedor">
            <?php //include './listadoProveedor.php'; ?>
                        </div>-->
        </div>
    </body>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
