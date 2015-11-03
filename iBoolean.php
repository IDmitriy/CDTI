<?php
namespace CDTI;

/**
 * Boolean interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iBoolean extends iObject, Objects\hValue
{
	/**
	 * Правда
	 */
	const TRUE  = 'true';

	/**
	 * Ложь
	 */
	const FALSE = 'false';

	/**
	 * Неизвестность
	 */
	const NULL  = 'null';

	/*
	function getTrue();

	function getFalse();

	function getNull();
	*/

}
