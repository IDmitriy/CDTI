<?php
namespace CDTI;

/**
 * Number interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: Numers include floating point and real numbers
 */
interface iNumber extends iObject, Objects\hValue
{
	function isPositive($_number = null);
	
	function isNegative($_number = null);
	
	function isFloat($_number = null);
	
	//function isSimple();
	//
	//function getFibonachi();
	
	function asString();
	
	function doInverse();
	
	function getSign();

	//function asNumber(); //objects implementing this interface must be able to return a number value
	//gor instance, "theUnit" object - 20 | 20 meters; 1024 | 1 kilobyte... should they?
}
