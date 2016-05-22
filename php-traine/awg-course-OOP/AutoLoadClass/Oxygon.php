<?php
namespace ClassTriangle;
/**
 * Class Oxygon
 * @package ClassTriangle
 */
class Oxygon extends Triangle //остроугольный
{
    /**
     * @return string
     */
    function TriangleName(){
        $name = 'Oxygon';
        return $name;
    }
}