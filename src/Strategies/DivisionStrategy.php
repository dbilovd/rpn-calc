<?php
namespace RPN\Strategies;

use RPN\Interfaces\StrategyInterface;

class DivisionStrategy implements Strategy
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