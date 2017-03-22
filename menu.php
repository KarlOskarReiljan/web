<?php
/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 22.03.2017
 * Time: 15:26
 */
// loome menüü mallide objektid
$menu = new template('menu.menu');
$item = new template('menu-item');
// kontrollime objekti olemasolu ja sisu
echo '<pre>';
print_r($menu);
print_r($item);
echo '<pre>';
?>