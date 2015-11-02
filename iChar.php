<?php
/**
 * Common Data Type Interface.
 * @copyright (c) 2015 Dmitriy Ivan
 */
namespace CDTI;

/**
 * Интерфейс Символа
 * @package  theFramework
 */
interface iChar 
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