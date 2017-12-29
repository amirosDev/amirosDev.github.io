<?php
/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 27/04/2017
 * Time: 10:47
 */
session_start();
require "class/Client.php";
Client::doLogout();
header('Location:racing.php');
