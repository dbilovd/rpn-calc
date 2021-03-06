<?php
namespace RPN\Strategies;

use RPN\Interfaces\StrategyInterface;

class AdditionStrategies implements Strategy
{
	/**
	 * Perform Operation
	 *
	 * @param Integer $firstValue 
	 * @param Integer $secondValue
	 * @return Integer
	 */
	public function performOperation ($firstValue, $secondValue)
	{
		return $firstValue + $secondValue;
	}
}