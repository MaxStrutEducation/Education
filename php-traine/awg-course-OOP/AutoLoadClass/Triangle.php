<?php
namespace ClassTriangle;
/**
 * Class Triangle
 * @package ClassTriangle
 */
class Triangle extends AbstractTriangle
{
  /**
   * @return mixed
   */
  function TriangleName(){
    $name = 'triangle';
    return $name;
  }
  /**
   * @return mixed
   */
public function perimeter() {
$perimeter = $this->a + $this->b + $this->c;
  return $perimeter;
}

  /**
   * @return float
   */
public function Area(){ //Geron method
$SemiPerimeter = $this->perimeter() / 2;
$area = sqrt($SemiPerimeter * ($SemiPerimeter - $this->a) * ($SemiPerimeter - $this->b) * ($SemiPerimeter - $this->c));
return $area;
}
}