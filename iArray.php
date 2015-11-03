<?php
namespace CDTI;

/**
 * Array interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iArray extends Objects\hVector
{
	function isKeyExists($_key);
	
	function isItemExists($_key);
	
	function doSortByKey();
	
	function doSortByValue();
	
	function getValueKeys();
	
	function getValueItems();
	
	function doFlip();
}
