<?php

namespace Tests;

use RPN\Operations\Addition as AdditionOperation;
use RPN\Interfaces\Operation as OperationInterface;
use PHPUnit\Framework\TestCase;

class AdditionOperationTest extends TestCase
{
	/** @test */
	public function givenNewInstanceOfAddition_shouldBeInstanceOfOperation ()
	{
		$addition = new AdditionOperation();
		$this->fail();
		// $this->assertInstanceOf($addition, OperationInterface::class);
	}
}