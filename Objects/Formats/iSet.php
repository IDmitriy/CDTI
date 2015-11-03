<?php
/**
 * Common Data Type Interface.
 * @copyright (c) 2015 Dmitriy Ivan
 */
namespace CDTI\Objects\Formats;

/**
 * Сам объект форматирования
 * Не наследуется от массива для легковесности и непротиворечивости.
 *
 * Set-функции возможно стоит разбить по интерфейсам?
 */
interface iSet
{
	/**
	 * Получить форматирование строки
	 */
	function getString();

	/**
	 * Получить форматирование числа
	 */
	function getNumber();

	/**
	 * Получить форматирование массива
	 */
	function getArray();

	/**
	 * Задать форматирование строки
	 * возможно, перенести в специнтерфейсы...
	 */
	function setString(aString $_format);

	/**
	 * Задать форматирование числа
	 */
	function setNumber(aNumber $_format);

	/**
	 * Задать форматирование массива
	 */
	function setArray(aArray $_format);

	/**
	 * Прокси к форматированию
	 * @param type $_value
	 */
	function asString(\theFramework\tObject $_value);

	/**
	 * Прокси к форматированию
	 * @param type $_value
	 */
	function asNumber(\theFramework\tObject $_value);

	/**
	 * Прокси к форматированию
	 * @param type $_value
	 */
	function asArray(\theFramework\tObject $_value);

	/**
	 * все форматы возвращаются как массив
	 */
	function getAll();

	/**
	 * Задать форматтер автоматически
	 * @param type $_object
	 */
	function setFormat($_object);
}