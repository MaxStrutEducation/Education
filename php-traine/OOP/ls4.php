<?php
    class Room
    {
        public static$color = 'Yellow';

        public static function get_color(){
            echo static::$color;
        }
    }

echo('Static variable = ' . Room::$color);
echo('</br>');
echo(' Static function = ' . Room::get_color());//чому Room::get_color() виводьться раніше ' Static function = '
//create object
$obj = new Room();
echo('</br>');
echo('Static function = '.$obj::$color);//'Static function = ' виводиться нормально, перед -> $obj::$color
?>
