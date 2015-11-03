<?php
namespace CDTI;

/**
 * String interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iString extends Objects\hVector, Objects\hValue
{
	const ENCODING    = 'UTF-8';
	const SENSETIVE   = true;
	const INSENSETIVE = false;
	
	//array? guess yes, for consistency
	public function asChar(); //$single = false //первый, как символ
//	public function asCharList(); //полный список?
	
	public function asArray($_delimiter = false);
	
	public function doTrim();
	
	public function doReplace($_search, $_replace = '');
} 