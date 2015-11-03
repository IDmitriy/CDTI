<?php
namespace CDTI\Objects;

/**
 * Whraps some external provider
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: This interface should not be extended by another interfaces
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