<?php

require_once 'activeRecordInterface.php';
require_once '../clases/ValueObject/VoIva.php';

/**
 * Description of MyIva
 *
 * @author ssrolanr
 */
class MyIva implements ActiveRecord {

    /**
     * 
     * @param VoIva $oValueObject
     * @return boolean
     */
    public function actualizar($oValueObject) {
        $sql = "UPDATE proveedor SET descripcion = "
                . "'" . $oValueObject->get_descripcion() . "' "
                . "WHERE id = " . $oValueObject->get_id();
        if (mysql_query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function borrar($oValueObject) {
        
    }

    /**
     * 
     * @param VoIva $oValueObject
     * @return boolean
     */
    public function buscar($oValueObject) {
        $sql = "SELECT * "
                . "FROM iva "
                . "WHERE id = " . $oValueObject->get_id()
                . " ORDER BY descripcion";
        $resultado = mysql_query($sql);
        if ($resultado) {
            $aIva = array();
            while ($fila = mysql_fetch_object($resultado)) {
                $oObj = new VoIva();
                $oObj->set_id($fila->id);
                $oObj->set_descripcion($fila->descripcion);
                $oObj->set_usuario_alta($fila->usuario_alta);
                $oObj->set_fecha_alta($fila->fecha_alta);
                $oObj->set_usuario_baja($fila->usuario_baja);
                $oObj->set_fecha_baja($fila->fecha_baja);
                $aIva[] = $oObj;
                unset($oObj);
            }
            return $aIva;
        } else {
            return FALSE;
        }
    }

    public function buscarTodo() {
        $sql = "SELECT * "
                . "FROM iva "
                . "WHERE fecha_baja = '0000-00-00 00:00:00'"
                . " ORDER BY descripcion";
        $resultado = mysql_query($sql);
        if ($resultado) {
            $aIva = array();
            while ($fila = mysql_fetch_object($resultado)) {
                $oObj = new VoIva();
                $oObj->set_id($fila->id);
                $oObj->set_descripcion($fila->descripcion);
                $oObj->set_usuario_alta($fila->usuario_alta);
                $oObj->set_fecha_alta($fila->fecha_alta);
                $oObj->set_usuario_baja($fila->usuario_baja);
                $oObj->set_fecha_baja($fila->fecha_baja);
                $aIva[] = $oObj;
                unset($oObj);
            }
            return $aIva;
        } else {
            return FALSE;
        }
    }

    public function contar() {
        
    }

    public function existe($oValueObject) {
        
    }

    /**
     * 
     * @param VoIva $oValueObject
     * @return boolean
     */
    public function guardar($oValueObject) {
        $sql = "INSERT INTO proveedor (id, descripcion) VALUES("
                . "'" . $oValueObject->get_id() . "', "
                . "'" . $oValueObject->get_descripcion() . "')";
        if (mysql_query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
