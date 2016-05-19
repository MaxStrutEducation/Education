<?php
namespace ClassTriangle;

require 'vendor/autoload.php';

//значення сторін

$PostSideA = isset($_POST['SideA'] ) ? $_POST['SideA'] : '';
$PostSideB = isset($_POST['SideB'] ) ? $_POST['SideB'] : '';
$PostSideC = isset($_POST['SideC'] ) ? $_POST['SideC'] : '';

//формування трикутника
$Oxygon = new Oxygon($PostSideA, $PostSideB, $PostSideC);
$RightTriangle = new RightTriangle($PostSideA, $PostSideB, $PostSideC);
$EquilateralTriangle = new EquilateralTriangle($PostSideA);
$IsoscelesTriangle = new IsoscelesTriangle($PostSideA, $PostSideB, $PostSideC);
$ObtuseTriangle = new ObtuseTriangle($PostSideA, $PostSideB, $PostSideC);
$VersatileTriangle = new VersatileTriangle($PostSideA, $PostSideB, $PostSideC);

//масив виводу всіх трикутникуів
$AllTriangle = array(
  $Oxygon,
  $RightTriangle,
  $EquilateralTriangle,
  $IsoscelesTriangle,
  $ObtuseTriangle,
  $VersatileTriangle,
);

/**
 * @param \ClassTriangle\Triangle $triangle
 * @return \stdClass
 */
function GetTriangleParams(Triangle $triangle) {
  $triangleParametrs = new \stdClass();
  $triangleParametrs->name = $triangle->TriangleName();
  $triangleParametrs->perimeter = $triangle->perimeter();
  $triangleParametrs->area = $triangle->Area();
  $triangleParametrs->a = $triangle->a;
  $triangleParametrs->b = $triangle->b;
  $triangleParametrs->c = $triangle->c;
  return $triangleParametrs;
}

if (!empty($_POST)) {
  include_once('view/index_view.php');
} else {
  include_once('view/form.php');
}

