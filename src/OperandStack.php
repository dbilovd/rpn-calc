<?php
namespace RPN;

/**
 * 
 */
class OperandStack
{
	/**
	 * Array to hold elements within stack
	 * @var array
	 */
	protected $stack = [];
	
	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/**
	 * Push element to the top of the stack
	 *
	 * @return void
	 */
	public function push ($value)
	{
		array_push($this->stack, $value);
	}

	/**
	 * Returning value at the top of the stack of elements
	 * That is the value latest value added
	 *
	 * @return Mixed
	 */
	public function peek ()
	{
		// Check stack has element to be poped
		if (! count($this->stack) > 0) {
			return 0;
		}
		
		return $this->stack[ (count($this->stack) - 1) ];
	}

	/**
	 * Pop and element from the stack
	 *
	 * @return Mixed Element in the time
	 */
	public function pop ()
	{
		// Check stack has element to be poped
		if (! count($this->stack) > 0) {
			return 0;
		}

		return array_pop($this->stack);
	}

	/**
	 * Replace Top
	 * 
	 * @return Void
	 */
	public function replaceTop ()
	{
		
	}
}