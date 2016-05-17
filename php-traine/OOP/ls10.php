<?php
    class Raine{

        public $nastroy = "good";

        public function walk($itsRain = false){
            if ($itsRain) {
                echo "Сидим дома";
            }
                else{
                    echo"Идем гулять";
                }
            }
    }

$obj = new Raine();
$itsRain = false;
$obj->walk($itsRain);
echo("<br/>");
$obj->nastroy;
echo ($obj->nastroy);
echo("<br/>");
$obj->nastroy="bad";
echo ($obj->nastroy);
?>