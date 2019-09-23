<?php
class Complex
{
	private $_re;
	private $_im;

	function __construct(float $re = 0.0, float $im = 0.0)
	{
		$this->_re = $re;
		$this->_im = $im;
	}

	public function getReal(): float
	{
		return $this->_re;
	}

	public function getImaginary(): float
	{
		return $this->_im;
	}

	public function setReal(float $re)
	{
		$this->_re = $re;
	}

	public function setImaginary(float $im)
	{
		$this->_im = $im;
	}

	public function abs(): float
	{
		return sqrt(pow($this->_re, 2) + pow($this->_im, 2));
	}

	public static function add(Complex &$num_1, Complex &$num_2): Complex
	{
		return new Complex((float)($num_1->_re + $num_2->_re), (float)($num_1->_im + $num_2->_im));
	}


	public static function sub(Complex &$num_1, Complex &$num_2): Complex
	{
		return new Complex((float)($num_1->_re - $num_2->_re), (float)($num_1->_im - $num_2->_im));
	}

	public static function mul(Complex &$num_1, Complex &$num_2): Complex
	{
		return new Complex
		(
			(float)($num_1->_re*$num_2->_re - $num_1->_im*$num_2->_im),
			(float)($num_1->_re*$num_2->_re + $num_1->_im*$num_2->_im)
		);
	}

	public static function div(Complex &$num_1, Complex &$num_2): Complex
	{
		$r = $num_1->_re*$num_2->_re + $num_1->_im*$num_2->_im;
		return new Complex
		(
			(float)(($num_1->_re*$num_2->_re + $num_1->_im*$num_2->_im)/$r),
			(float)(($num_1->_re*$num_2->_re - $num_1->_im*$num_2->_im)/$r)
		);
	}
}
