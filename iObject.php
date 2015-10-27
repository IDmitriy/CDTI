<?php
/**
 * Фреймворк.
 * interface has abstract type and exception... "i hate" lol.
 *
 * @copyright (c) 2013, Dmitriy Ivan
 *
 * Возможно, среди интерфейсов можно выделить 2 группы:
 * - Описывающие какие свойства объект может иметь, и соответственно get-set'ы
 *   например: hTime, hValue, hLength, hProvider, hFormat... hVector
 *
 * - Описываюшие какие действия моно совершить с объектом.
 *   например iArray, iStructure, iObject, iString,
 *
 * Типы действий:
 * - Преобразования
 * - Проверки
 * - Изменение значения (связанные с тем, какие свойства имеет?)
 *   т.е. действия подсасывают за собой свойства.
 *
 * @todo:
 * - Конфиг, основанный на массиве;
 * - Результат проверки, который сможет кидать exception? научить exception уму?
 */
namespace CDTI;

/**
 * Интерфейс базового Объекта
 */
interface iObject
{
	const VERSION = '1.3';

	/**
	 * Создется полная копия текущего объекта, и дальнейшая работа только с ней
	 *
	 * @param var $_capture Пустая переменная для отлова значения
	 * @return aObject Объект того же типа, что и исполнитель метода;
	 */
	function asNew(&$_capture = false);

	/**
	 * Является ли данный объект точным представителем вызываемого класса
	 *
	 * @param type $_aObject
	 * @return bool Объект того же типа, что и исполнитель метода
	 */
	static function is($_aObject);

	/**
	 * is given value sufficient for creating instance of this class?
	 * @param mixed $_mixed любое значение
	 * @return bool
	 * @todo maybe should have method for explicitly check datatype?
	 */
	static function isCompatible($_mixed);

	/**
	 * Получить данные об объекте
	 * @param boolean $_type
	 */
	function getClass($_type = true);

	function getList($_type = true);
}