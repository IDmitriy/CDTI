<?php
namespace CDTI\Objects;

/**
 * Vector interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan

 */
interface hVector 
{
	/**
	 * Направление движения: Вперед
	 */
	const FORWARD   = false;

	/**
	 * Направление движения: Назад
	 */
	const BACKWARD  = true;

	/**
	 * Направление движения: Не определено
	 */
	const UNPOINTED = null;

	/**
	 * Получить количество элементов
	 * @param type $_mixed
	 */
	function getLength($_mixed = null); //$_in_bytes = false?

	/**
	 * Изменить порядок элементов на обратный
	 */
	function setReverse();

	/**
	 * Получить первый элемент
	 * При указании аргумента элемент изымается из ряда
	 * @param bool $_chop
	 */
	function getFirst($_chop = false);

	/**
	 * Добавить элемент к началу ряда
	 * @param mixed $_item
	 */
	function setFirst($_item);

	/**
	 * Получить последний элемент
	 * При указании аргумента элемент изымается из ряда
	 * @param bool $_chop
	 */
	function getLast($_chop = false);

	/**
	 * Добавить элемент к концу ряда
	 * @param mixed $_item
	 */
	function setLast($_item);

	/**
	 * Получить ряд элементов
	 * @param int $_start
	 * @param int $_length
	 */
	function getRange($_start = null, $_length = null); //#

	/**
	 * Добавить ряд элементов
	 * @param type $_mixed
	 * @param int $_start
	 * @param int $_length
	 */
	function setRange($_mixed, $_start = null, $_length = null); //# ruins source

	/**
	 * Изменить порядок элементов на случайный
	 */
	function setShuffle();

	/**
	function setRandom();?
	 */
}