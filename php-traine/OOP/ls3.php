<?php
class Room{
    public $color = 'Yellow';

    public function change_color($col){
        $this->color = $col;
        print($this->color);
    }

    public function get_color(){
        print($this->color);
    }
}
    $obj = new Room();
    $obj-> change_color('Black');
    echo ('<br/>');
    $obj-> change_color('Tomato');
    echo ('<br/>');
    $obj-> get_color();
?>