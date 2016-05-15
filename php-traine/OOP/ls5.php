<?php
class Room
{
    public static $location='In home';

    public static function changeLocation($loc){
        self::$location = $loc;
    }

    private $color = "Red";

    public function setColor($col){
        $this->color = $col;
    }

    public function get_color(){
        return $this->color;
    }
}
$obj = new Room();
$obj->setColor("Orange");
print($obj->get_color());
echo("<br/>");
Room::changeLocation("Out Home");
print(Room::$location);
echo("<br/>");

class privateInfo{
    public static $name = "Maxim";
    public static $soname = "Strutinskiy";
    public static $age = "22 year";

    public static function changeName($change_name){
        self::$name = $change_name;
    }
    public static function changeSoName($change_soname){
        self::$soname = $change_soname;
    }
    public static function changeAge($change_age){
        self::$age = $change_age;
    }

    public static function printInfo(){
        print(self::$name);
        echo("</br>");
        print(self::$soname);
        echo("</br>");
        print(self::$age);
        echo("</br>");
    }
}
privateInfo::printInfo();
privateInfo::changeName("Ekaterina");
privateInfo::changeSoName("Sapelkina");
privateInfo::changeAge("22 year");
privateInfo::printInfo();
?>