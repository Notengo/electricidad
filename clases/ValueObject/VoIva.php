<?php

/**
 * Description of VoIva
 *
 * @author ssrolanr
 */
class VoIva {

    private $_id, $_descripcion, $_usuario_alta, $_fecha_alta;
    private $_usuario_baja, $_fecha_baja;

    public function get_id() {
        return $this->_id;
    }

    public function get_descripcion() {
        return $this->_descripcion;
    }

    public function get_usuario_alta() {
        return $this->_usuario_alta;
    }

    public function get_fecha_alta() {
        return $this->_fecha_alta;
    }

    public function get_usuario_baja() {
        return $this->_usuario_baja;
    }

    public function get_fecha_baja() {
        return $this->_fecha_baja;
    }

    public function set_id($_id) {
        $this->_id = $_id;
    }

    public function set_descripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }

    public function set_usuario_alta($_usuario_alta) {
        $this->_usuario_alta = $_usuario_alta;
    }

    public function set_fecha_alta($_fecha_alta) {
        $this->_fecha_alta = $_fecha_alta;
    }

    public function set_usuario_baja($_usuario_baja) {
        $this->_usuario_baja = $_usuario_baja;
    }

    public function set_fecha_baja($_fecha_baja) {
        $this->_fecha_baja = $_fecha_baja;
    }

}
