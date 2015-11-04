<?php
namespace QBWCServer\launcher;
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.10.2015
 * Time: 19:48
 */

class SoapLauncher
{
    public static function start($object)
    {
        $server = new \SoapServer($object->_config['wsdlPath'], $object->_config['soapOptions']);
        $server->setObject($object);
        $server->handle();
    }
}