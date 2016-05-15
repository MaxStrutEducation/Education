<?php
    class Room9{
        public function __construct(){
            print ("Construct is work! - in parent class");
        }
    }

    class Room10 extends Room9
    {
        public function __construct(){
            //для того чтобі віволнить родительский метод нужно использовать
            parent::__construct();
            echo('<br/>');
            print ("Construct is work! - in child class");
        }
    }

$obj = new Room10();

?>