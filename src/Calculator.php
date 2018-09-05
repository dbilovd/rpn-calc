<?php

namespace RPN;

class Calculator
{
	private $accumulator = null;
	private $stack = [];

	public function __construct ()
	{
		$this->setAccumulator(0);
	}

	public function getAccumulator ()
	{
		return $this->accumulator != null ?: 0;
	}

	protected function setAccumulator ($value)
	{
		$this->accumulator = $value;
	}

	public function addElement ($value)
	{
		// Move acculator value to stack

		// Set new accumulator
	}
}