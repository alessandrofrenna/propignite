<?php

namespace Codeigniter\Propel\Helpers;

use Codeigniter\Propel\Interfaces\DirectoryInterface;

define('DS', DIRECTORY_SEPARATOR);

class Directory implements DirectoryInterface
{

    public static function propel()
    {
        $propel = dirname(APPPATH) . DS . 'propel' . DS;
        return $propel;
    }

    public static function propel_configuration()
    {
        $config = self::propel() . "config" . DS;
        return $config;
    }

    
}