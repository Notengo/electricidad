<?php

/**
 * Description of VoProveedor
 *
 * @author ssrolanr
 */
class VoProveedor {

    private $_idProveedores, $_nombre, $_duenio, $_direccion, $_telefono, $_fax;
    private $_mail, $_idCondFiscales, $_cuit, $_fechaAlta, $_fechaBaja;

    public function get_idProveedores() {
        return $this->_idProveedores;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function get_duenio() {
        return $this->_duenio;
    }

    public function get_direccion() {
        return $this->_direccion;
    }

    public function get_telefono() {
        return $this->_telefono;
    }

    public function get_fax() {
        return $this->_fax;
    }

    public function get_mail() {
        return $this->_mail;
    }

    public function get_idCondFiscales() {
        return $this->_idCondFiscales;
    }

    public function get_cuit() {
        return $this->_cuit;
    }

    public function get_fechaAlta() {
        return $this->_fechaAlta;
    }

    public function get_fechaBaja() {
        return $this->_fechaBaja;
    }

    public function set_idProveedores($_idProveedores) {
        $this->_idProveedores = $_idProveedores;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function set_duenio($_duenio) {
        $this->_duenio = $_duenio;
    }

    public function set_direccion($_direccion) {
        $this->_direccion = $_direccion;
    }

    public function set_telefono($_telefono) {
        $this->_telefono = $_telefono;
    }

    public function set_fax($_fax) {
        $this->_fax = $_fax;
    }

    public function set_mail($_mail) {
        $this->_mail = $_mail;
    }

    public function set_idCondFiscales($_idCondFiscales) {
        $this->_idCondFiscales = $_idCondFiscales;
    }

    public function set_cuit($_cuit) {
        $this->_cuit = $_cuit;
    }

    public function set_fechaAlta($_fechaAlta) {
        $this->_fechaAlta = $_fechaAlta;
    }

    public function set_fechaBaja($_fechaBaja) {
        $this->_fechaBaja = $_fechaBaja;
    }

}
