<?php
namespace RPN\Interfaces;

interface StrategyInterface
{
	/**
	 * Perform Operation
	 *
	 * @param Integer $firstValue 
	 * @param Integer $secondValue
	 * @return Integer
	 */
	public function performOperation ($firstValue, $secondValue);
}