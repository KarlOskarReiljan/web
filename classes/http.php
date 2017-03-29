<?php

/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 29.03.2017
 * Time: 13:46
 */
class http
{// klassi algus
    // klassi muutujad
    var $vars = array(); // http päringute andmed
    var $server = array(); // serveri (masina) andmed
    //klassi meetodid
    // paneme algandmed paika - initsialiseerime neid
    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;
    }// init
}// klassi lõpp
?>