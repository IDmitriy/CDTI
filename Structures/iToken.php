<?php
/**
 * Common Data Type Interface. Структуры. Метка.
 * @copyright (c) 2015 Dmitriy Ivan
 */
namespace CDTI\Structures;

/**
 * Интерфейс произвольной Метки.
 */
interface iToken
{
	/**
	 * Полкчить имя метки в типе по-умолчанию или произвольном
	 * @param type $_type
	 */
	function getName($_type = null);

	/**
	 * Проверить существование мектки в текущем пространстве
	 * @param type $_structure_name
	 */
	static function isExists($_structure_name);

	/**
	 * Исключительное поведение
	 * при провале проверки на сущаствование метки
	 * @param type $_structure_name
	 */
	function throwIfExistFault($_structure_name);
}