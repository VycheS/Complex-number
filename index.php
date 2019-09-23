<?php
	error_reporting(E_ALL);

	require_once 'complex.php';

	$num1 = new Complex(4.0 , 3.2);
	$num2 = new Complex(2.4 , 7.3);
	$num3 = Complex::add($num1, $num2);
	$num4 = Complex::sub($num1, $num2);
    $num5 = Complex::mul($num1, $num2);
	$num6 = Complex::div($num1, $num2);
	$ln = "<br/>";
    echo "num1(re = ". $num1->getReal(). ", im = ". $num1->getImaginary(). ")".$ln;
    echo "num2(re = ". $num2->getReal(). ", im = ". $num2->getImaginary(). ")".$ln;
    echo "num3(re = ". $num3->getReal(). ", im = ". $num3->getImaginary(). ") = num1 + num2;".$ln;
	echo "num4(re = ". $num4->getReal(). ", im = ". $num4->getImaginary(). ") = num1 - num2;".$ln;
	echo "num5(re = ". $num5->getReal(). ", im = ". $num5->getImaginary(). ") = num1 * num2;".$ln;
	echo "num6(re = ". $num6->getReal(). ", im = ". $num6->getImaginary(). ") = num1 / num2;".$ln;
    echo "num1 abs = ". $num1->abs();
?>
