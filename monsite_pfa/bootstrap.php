<?php
/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 20/04/2017
 * Time: 05:22
 */
spl_autoload_register('app_autoload');

function app_autoload($class){
    require "class/$class.php";
}