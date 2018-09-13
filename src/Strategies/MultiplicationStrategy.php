<?php
namespace RPN\Strategies;

use RPN\Interfaces\StrategyInterface;

class MultiplicationStrategy implements Strategy
{
	/**
	 * Perform Operation
	 *
	 * @param Float $firstValue 
	 * @param Float $secondValue
	 * @return Integer
	 */
	public function performOperation ($firstValue, $secondValue)
	{
		return $firstValue * $secondValue;
	}
}