<?php
namespace CDTI\Reflections;

/**
 * Token interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: any token: classname, function name, key name... etc.
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