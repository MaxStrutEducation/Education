<?php
namespace ClassTriangle;
/**
 * Class AbstractTriangle
 * @package ClassTriangle
 */
abstract class AbstractTriangle {
  public $a;
  public $b;
  public $c;



  /**
   * @return mixed
   */
  public function getA() {
    return $this->a;
  }

  /**
   * @param mixed $a
   */
  public function setA($a) {
    $this->a = $a;
  }

  /**
   * @return mixed
   */
  public function getB() {
    return $this->b;
  }

  /**
   * @param mixed $b
   */
  public function setB($b) {
    $this->b = $b;
  }

  /**
   * @return mixed
   */
  public function getC() {
    return $this->c;
  }

  /**
   * @param mixed $c
   */
  public function setC($c) {
    $this->c = $c;
  }

  /**
   * AbstractTriangle constructor.
   * @param $a
   * @param $b
   * @param $c
   */
  function __construct($a, $b, $c) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }
}