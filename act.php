<?php
/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 5.04.2017
 * Time: 9:03
 */
$act = $http->get('act'); // küsime hetkel valitud tegevus
// koostame otsitava faili nimi failisüsteemi jaoks
$fn = ACTS_DIR.str_replace('.', '/', $act).'.php'; // koostame otsitava faili nimi
// kui selline fail olemas ja lugemiseks lubatud
if(file_exists($fn) and is_file($fn) and is_readable($fn)){
    // loeme sisu
    require_once $fn;
} else {
    $fn = ACTS_DIR.'default'.'.php';
    require_once $fn;
}