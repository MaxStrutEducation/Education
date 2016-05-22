<?php
namespace ClassTriangle;
/**
 * Class EquilateralTriangle
 * @package ClassTriangle
 */
class EquilateralTriangle extends Triangle //равносторонний
{
    function TriangleName(){
        $name = 'Equilateral';
        return $name;
    }
  /**
   * EquilateralTriangle constructor.
   * @param $a
   */
public function __construct($a) {
parent::__construct($a, $a, $a); //override the constructor
}
}