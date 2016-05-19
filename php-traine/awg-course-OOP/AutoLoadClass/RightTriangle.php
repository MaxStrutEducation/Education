<?php
namespace ClassTriangle;
/**
 * Class RightTriangle
 * @package ClassTriangle
 */
class RightTriangle extends Triangle //прямоугольный
{
  function TriangleName(){
    $name = 'Obtuse';
    return $name;
  }
  /**
   * @return float
   */
  public function Area() {
    $area = ($this->a * $this->b) / 2;
    return $area;
  }
}