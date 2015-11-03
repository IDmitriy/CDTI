<?php
namespace CDTI;

/**
 * Char interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iChar extends iObject, Objects\hValue
{	
	/**
	 * Возврат кода Символа
	 */
	public function getCode();

	/**
	 * Создание Строки из текущего объекта
	 */
	public function asString(); 
} 