<?php
/**
 * Фреймворк.
 * @copyright (c) 2013, Dmitriy Ivan
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