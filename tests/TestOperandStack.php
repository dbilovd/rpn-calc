<?php
namespace Tests;

use RPN\OperandStack;
use PHPUnit\Framework\TestCase;

/**
 * 
 */
class TestOperandStack extends TestCase
{
	protected $os;

	public function setUp ()
	{
		$this->os = new OperandStack();
	}

	/** @test */
	public function when_operandStackIsNew_thenPeekingShouldZero ()
	{
		$this->assertSame($this->os->pop(), 0);
	}

	/** @test */
	public function when_operandStackIsNew_thenPoppingShouldZero ()
	{
		$this->assertSame($this->os->peek(), 0);
	}

	/** @test */
	public function whenValueIsPushedToStack_thenPeekedValue_shouldBeValue ()
	{
		$value = 3;
		$this->os->push($value);
		$this->assertSame($this->os->peek(), $value);
	}

	/** @test */
	public function whenValueIsPushedToStack_thenPoppedValue_shouldBeValue ()
	{
		$value = 3;
		$this->os->push($value);
		$this->assertSame($this->os->pop(), $value);
	}
	
	/** @test */
	public function whenTwoValuesArePushedToStackAndPopedOnce_thenPeekedValue_shouldBeFirstValue ()
	{
		$valueOne = 1;
		$valueTwo = 2;
		$this->os->push($valueOne);
		$this->os->push($valueTwo);
		$this->os->pop();
		$this->assertSame($this->os->peek(), $valueOne);
	}
}