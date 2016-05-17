<?php
abstract class Room{
    public function __construct()
    {
        echo ('Construct method Room');
    }

    abstract public function run();

    final public function getFrame(){
        require 'LIW';
    }
}

class Room1 extends Room{
    public function __construct()
    {
        parent::__construct();
        echo ('Construct method Room1');
    }

    public function run(){
        echo ('Реализация абстрактного метода');
    }
    
}
?>