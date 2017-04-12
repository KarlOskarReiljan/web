<?php
/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 29.03.2017
 * Time: 14:47
 */
function fixUrl($val){
    return urlencode($val);
}

function fixDb($val) {
    return'"'.addslashes($val).'"';
}
?>