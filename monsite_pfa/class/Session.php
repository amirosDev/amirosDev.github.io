<?php

/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 20/04/2017
 * Time: 11:02
 */
class Session
{
    static $instance;

    static function getInstance(){
        if(!self::$instance){
            self::$instance= new Session();
        }
        return self::$instance;
    }

    public function __construct()
    {
        session_start();
    }
}