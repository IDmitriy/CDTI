<?php
/**
 * Фреймворк.
 * @copyright (c) 2013, Dmitriy Ivan
 */
namespace CDTI;

/**
 * Интерфейс Массива.
 */
interface iArray extends Objects\iVector
{
	function isKeyExists($_key);
	
	function isItemExists($_key);
	
	function doSortByKey();
	
	function doSortByValue();
	
	function getValueKeys();
	
	function getValueItems();
	
	function doFlip();
}
