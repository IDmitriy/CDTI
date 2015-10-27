<?php
/**
 * Фреймворк. Объекты. Обертка.
 * @copyright (c) 2014, Dmitriy Ivan
 */
namespace CDTI\Objects;

/**
 * Интерфейс обертки для другого объекта
 */
interface hProvider
{
	/**
	 * Задать объект поставщика услуг
	 * @param object $_provider Поставщик услуг
	 */
	function setProvider($_provider);

	/**
	 * Получить объект поставщика услуг
	 * @return object Поставщик услуг
	 */
	function getProvider();
}