<?php

require_once 'activeRecordInterface.php';
require_once '../clases/ValueObject/VoProveedor.php';

/**
 * Description of MyProveedor
 *
 * @author ssrolanr
 */
class MyProveedor implements ActiveRecord {

    public function actualizar($oValueObject) {
        
    }

    /**
     * 
     * @param VoProveedor $oValueObject
     */
    public function borrar($oValueObject) {
        $sql = "UPDATE proveedor SET fecha_baja = CURRENT_TIMESTAMP() "
                . "WHERE idProveedor = " . $oValueObject->get_idProveedor()
                . " AND fecha_alta = '" . $oValueObject->get_fecha_alta() . "';";
        if (mysql_query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * 
     * @param VoProveedor $oValueObject
     * @return boolean|\VoProveedor
     */
    public function buscar($oValueObject) {
        $sql = "SELECT * FROM proveedor "
                . "WHERE idProveedor = " . $oValueObject->get_idProveedor()
                . " AND fecha_baja = '0000-00-00 00:00:00' "
                . "ORDER BY fecha_alta";
        $resultado = mysql_query($sql);
        if ($resultado) {
            $aProveedor = array();
            while ($fila = mysql_fetch_object($resultado)) {
                $oObj = new VoProveedor();
                $oObj->set_idProveedor($fila->idProveedor);
                $oObj->set_nombre($fila->nombre);
                $oObj->set_duenio($fila->duenio);
                $oObj->set_direccion($fila->direccion);
                $oObj->set_telefono($fila->telefono);
                $oObj->set_fax($fila->fax);
                $oObj->set_iva_id($fila->iva_id);
                $oObj->set_dgr($fila->dgr);
                $oObj->set_cuit($fila->cuit);
                $oObj->set_fecha_alta($fila->fecha_alta);
                $oObj->set_fecha_baja($fila->fecha_baja);
                $aProveedor[] = $oObj;
                unset($oObj);
            }
            return $aProveedor;
        } else {
            return FALSE;
        }
    }

    public function buscarTodo() {
        $sql = "SELECT * "
                . "FROM proveedores "
                . "WHERE fechaBaja = '0000-00-00 00:00:00' "
                . "ORDER BY nombre";
        $resultado = mysql_query($sql);
        if ($resultado) {
            $aProveedor = array();
            while ($fila = mysql_fetch_object($resultado)) {
                $oObj = new VoProveedor();
                $oObj->set_idProveedores($fila->idProveedores);
                $oObj->set_nombre($fila->nombre);
                $oObj->set_duenio($fila->duenio);
                $oObj->set_direccion($fila->direccion);
                $oObj->set_telefono($fila->telefono);
                $oObj->set_fax($fila->fax);
                $oObj->set_idCondFiscales($fila->idCondFiscales);

                $oObj->set_cuit($fila->cuit);
                $oObj->set_fechaAlta($fila->fechaAlta);
                $oObj->set_fechaBaja($fila->fechaBaja);
                $aProveedor[] = $oObj;
                unset($oObj);
            }
            return $aProveedor;
        } else {
            return FALSE;
        }
    }

    public function contar() {
        
    }

    /**
     * 
     * @param VoProveedor $oValueObject
     * @return boolean
     */
    public function existe($oValueObject) {
        $sql = "SELECT COUNT(*) FROM proveedores "
                . "WHERE nombre = '" . $oValueObject->get_nombre()
                . "' AND fechaBaja = '0000-00-00 00:00:00'";
        $resultado = mysql_query($sql);
        $resultado = mysql_fetch_array($resultado);

        if ($resultado[0] != '0') {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /**
     * 
     * @param VoProveedor $oValueObject
     */
    public function guardar($oValueObject) {
        $sql = "INSERT INTO proveedores (nombre, duenio, direccion, telefono, "
                . "fax, mail, idCondFiscales, cuit, fechaAlta) VALUES("
                . "'" . utf8_decode($oValueObject->get_nombre()) . "', "
                . "'" . utf8_decode($oValueObject->get_duenio()) . "', "
                . "'" . utf8_decode($oValueObject->get_direccion()) . "', "
                . "'" . utf8_decode($oValueObject->get_telefono()) . "', "
                . "'" . utf8_decode($oValueObject->get_fax()) . "', "
                . "'" . utf8_decode($oValueObject->get_mail()) . "', "
                . "'" . utf8_decode($oValueObject->get_idCondFiscales()) . "', "
                . "'" . utf8_decode($oValueObject->get_cuit()) . "', NOW())";
        if (mysql_query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
