<?php
namespace RPN\Operations;

use RPN\OperandStack;
use RPN\Interfaces\Operation as OperationInterface;

class BaseOperations implements OperationInterface
{
	public function perform (OperandStack $stack)
	{
		$firstValue = $stack->pop();
		$secondValue = $stack->peek();
		$stack->replaceTop(
			$this->compute($firstValue, $secondValue);
		);
	}
}