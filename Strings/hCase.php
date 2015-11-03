<?php
namespace CDTI\Strings;

/**
 * Case interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @todo: move to string? 
 */
interface hCase //good old string
{
	const SENSETIVE   = true;
	const INSENSETIVE = false;

	const UPPER = true;
	const LOWER = false;
    
    function getCase();
}