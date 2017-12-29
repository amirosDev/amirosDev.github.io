<?php

/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 20/04/2017
 * Time: 05:14
 */
class App
{
    static $db=null;
    static function getDatabase(){
        if (!self::$db)
        self::$db= new Database('root','','data_pfa');
        return self::$db;
    }
}