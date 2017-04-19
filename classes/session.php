<?php

/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 19.04.2017
 * Time: 8:53
 */
class session
{// klassi algus
    // klassi muutujad
    var $sid = false; // sessiooni id
    var $vars = array(); // sessiooni ajal tekkivad andmed
    var $http = false; // objekt veebiandmete kasutamiseks
    var $db = false; // objekt andmebaasi kasutamiseks
    // kui anonüümne lubatud ei ole - var $anonymous = false;
    var $anonymous = true; // anonüümne kasutaja on lubatud

    // klassi meetodid
    // konstruktor
    function __construct(&$http, &$db){
        $this->http = &$http;
        $this->db = &$db;
    }// konstruktor
}// klassi lõpp