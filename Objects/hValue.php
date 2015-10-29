<?php
/**
 * Common Data Type Interface. Объекты. Атомарник.
 * @copyright (c) 2014, Dmitriy Ivan
 */
namespace CDTI\Objects;

/**
 *  Интерфейс атомарных объектов
 *  @todo getValue - вероятно исключить? hValue?
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