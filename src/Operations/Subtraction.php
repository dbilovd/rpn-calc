<?php
namespace RPN\Operations;

class Addition extends BaseOperations
{
	public function compute ($firstValue, $secondValue)
	{
		return $firstValue - $secondValue;
	}
}