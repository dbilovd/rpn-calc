<?php
namespace Tests;

use RPN\Calculator;
use PHPUnit\Framework\TestCase;

class TestCalculator extends TestCase
{

	/** @test */
	public function when_CalculatorIsNew_ThenAccumulatorMustReturnZero ()
	{
		$calculator = new Calculator();
		$this->assertEquals(0, $calculator->getAccumulator());
	}

	/** @test */
	public function when_ThreeValuesArePushedToStack_thenAccumulatorValue_mustBeTheThirdValue ()
	{
		// Given
		$calculator = new Calculator();

		// When
		$calculator->addElement(9);
		// ->enter();

		$calculator->addElement(5);
		$calculator->addElement(3);

		// Then
		$accuumulator = $calculator->getAccumulator();
		$this->assertEquals(3, $accuumulator);
	}
}