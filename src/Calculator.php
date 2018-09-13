<?php

namespace RPN;

class Calculator
{
	protected $strategy;


	public function __construct ()
	{
	}

	/**
	 * Run calculation
	 *
	 * @return Integer 
	 */
	public function calculate ($firstValue, $secondValue)
	{
		$this->strategy->performOperation($firstValue, $secondValue);
	}
}