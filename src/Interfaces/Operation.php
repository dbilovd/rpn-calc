<?php
namespace RPN\Interfaces;

use RPN\OperandStack;

interface Operation
{
	/**
	 * Perform Operation
	 * 
	 * @param  OperandStack $stack [description]
	 * @return Mixed            [description]
	 */
	public function perform(OperandStack $stack);
}