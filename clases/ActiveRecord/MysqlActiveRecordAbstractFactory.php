<?php

// Se requiere de la clase ActiveRecordAbstractFactory
require_once '../clases/ActiveRecord/ActiveRecordAbstractFactory.php';

require_once '../clases/ActiveRecord/MyProveedor.php';
require_once '../clases/ActiveRecord/MyIva.php';

/**
 * Clase que nos permite conectar al motor MySQL y crear objetos
 * de tipo Active Record para cada una de tablas del sistema.
 *
 * Clase que nos permite conectar al motor MySQL y crear objetos
 * de tipo Active Record para cada una de tablas del sistema.
 * @version    1.0
 * @author Martin Remedi <remedi.martin@gmail.com>
 * @license http://www.gnu.org/licenses/ GPL License
 * @copyright (c) 2013, Martin Remedi
 */
class MysqlActiveRecordAbstractFactory extends ActiveRecordAbstractFactory {

    public static function getActiveRecordFactory($motor = self::MYSQL) {
        return parent::getActiveRecordFactory($motor);
    }

    const HOST = 'localhost';
    const USER = 'root';
    const PASS = 'root';
    const DB = 'stock';

    /**
     * Nos permite conectar al motor MySQL con los datos de
     * conexión especificados como constantes. Luego se hace
     * la selección de la base de datos.
     */
    public function conectar() {
        mysql_connect(self::HOST, self::USER, self::PASS);
//        mysql_connect(self::HOST, self::USER);
        mysql_select_db(self::DB);
    }

    /**
     * 
     * @return \MyProveedor
     */
    public function getProveedorActiveRecord() {
        return new MyProveedor();
    }

    /**
     * 
     * @return \MyIva
     */
    public function getIvaActiveRecord() {
        return new MyIva();
    }

}
