<?php
/**
 * Created by PhpStorm.
 * User: karl-oskar.reiljan
 * Date: 22.03.2017
 * Time: 12:14
 */

class template
{// klassi algus
    // template klassi omadused - muutujad
    var $file =''; // html faili nimi
    var $content = false; // html malli faili sisu
    var $vars = array(); // html vaade sisu - reaalsed väärtused
    // klassi tegevused - meetodid - funktsioonid

    // klassi konstruktor
    function __construct($f){
        $this->file = $f; // määrame html malli faili nimi
        $this->loadFile(); // loeme määratud failist sisu
    }// konstruktor

    // html malli faili lugemine
    function loadFile(){
        $f = $this->file; // lokaalne asendus
        // kontrollime mallide kausta olemasolu
        if(!is_dir(TMPL_DIR)){
            echo 'Kataloogi '.TMPL_DIR.' ei ole leitud<br />';
            exit;
        }
        // kui fail on olemas ja lugemiseks sobiv
        if(file_exists($f) and is_file($f) and is_readable($f)){
            // loeme failist malli sisu
            $this->readFile($f);
        }
        // kui sisu ei olnud võimalik lugeda
        if($this->content === false){
            echo 'Ei suutnud lugeda faili '.$this->file.'<br />';
        }
    }// loadFile

    // loeme sisu html maili failist
    function readFile ($f){
        $this->content = file_get_contents($f);
    }// readFile
}// klassi lõpp
?>