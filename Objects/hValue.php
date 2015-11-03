<?php
namespace CDTI\Objects;

/**
 * Value interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @todo: getValue - possibly exclude from here? hValue?
 */
interface hValue
{
	/**
	 * Получить значение
	 * @param mixed $_raw
	 */
	function getValue($_static = null);

	/**
	 * Задать значение
	 * @param mixed $_raw
	 */
	function setValue($_value);

	/**
	 * ЗАдать пустое значение
	 */
	function setEmpty();

	/**
	 * Проверить наличие значения
	 */
	function isEmpty();

	/**
	 * Выбросить исключение при провале проверки совместимости
	 * @param mixed $_value
	 * @todo уточнить неоходимость декларирования здесь.
	 */
	static function throwIsCompatibleFault($_value);
}