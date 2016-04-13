<?php 

namespace ApartmentApi\Exceptions;

use Exception;

class InvalidBuildingDataException extends InvalidFieldException 
{
	
	function __construct($message, $errorBag, $code = 0, $previous = null)
	{
		parent::__construct($message,$errorBag, $code, $previous);
	}
	
}
