<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - OOP test</title>
</head>
<body>

<!--------------------------------------------->
<!--ls 3
    -стойства и методи
-->
<?php
//class Room{
//    public $color = 'Yellow';
//
//    public function change_color($col){
//        $this->color = $col;
//        print($this->color);
//    }
//
//    public function get_color(){
//        print($this->color);
//    }
//}
//$obj = new Room();
//$obj-> change_color('Black');
//echo ('<br/>');
//$obj-> change_color('Tomato');
//echo ('<br/>');
//$obj-> get_color();
//?>
<!--------------------------------------------->


<!--------------------------------------------->
<!--ls 4
    -статические методи
-->
<?php
//    class Room
//    {
//        public static$color = 'Yellow';
//
//        public static function get_color(){
//            echo static::$color;
//        }
//    }
//
//echo('Static variable = ' . Room::$color);
//echo('</br>');
//echo(' Static function = ' . Room::get_color());//чому Room::get_color() виводьться раніше ' Static function = '
////create object
//$obj = new Room();
//echo('</br>');
//echo('Static function = '.$obj::$color);//'Static function = ' виводиться нормально, перед -> $obj::$color
//?>
<!--------------------------------------------->

<!--------------------------------------------->
<!--ls 5
    -$this, self::, static::
-->
<?php
//class Room
//{
//    public static $location='In home';
//
//    public static function changeLocation($loc){
//        self::$location = $loc;
//    }
//
//    private $color = "Red";
//
//    public function setColor($col){
//        $this->color = $col;
//    }
//
//    public function get_color(){
//        return $this->color;
//    }
//}
//$obj = new Room();
//$obj->setColor("Orange");
//print($obj->get_color());
//echo("<br/>");
//Room::changeLocation("Out Home");
//print(Room::$location);
//echo("<br/>");
//
//class privateInfo{
//    public static $name = "Maxim";
//    public static $soname = "Strutinskiy";
//    public static $age = "22 year";
//
//    public static function changeName($change_name){
//        self::$name = $change_name;
//    }
//    public static function changeSoName($change_soname){
//        self::$soname = $change_soname;
//    }
//    public static function changeAge($change_age){
//        self::$age = $change_age;
//    }
//
//    public static function printInfo(){
//        print(self::$name);
//        echo("</br>");
//        print(self::$soname);
//        echo("</br>");
//        print(self::$age);
//        echo("</br>");
//    }
//}
//privateInfo::printInfo();
//privateInfo::changeName("Ekaterina");
//privateInfo::changeSoName("Sapelkina");
//privateInfo::changeAge("22 year");
//privateInfo::printInfo();
//?>
<!--------------------------------------------->


<!--------------------------------------------->
<!--ls 6
    __construct
    __invoke
    __toString
-->
<?php
//    class Room{
//        public function __construct()
//        {
//            echo ('Construct method');
//        }
//        public function __invoke()
//        {
//            echo ('Invoke method');
//        }
//        public function __toString()
//        {
//            echo('String method');
//        }
//    }
//$obj = new Room();
//echo('<br/>');
//$obj();
//echo('<br/>');
//echo $obj;
//?>
<!--------------------------------------------->

<!--------------------------------------------->
<!--ls 7
    __construct
    __invoke
    __toString
-->
<!--------------------------------------------->
</body>
</html>