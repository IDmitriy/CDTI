<?php
/**
 * Common Data Type Interface. Даты и Время. Метка.
 * @copyright (c) 2015 Dmitriy Ivan
 */
namespace CDTI\DateTimes;

/**
 * Интерфейс Таймстампа
 */
interface iStamp
{
	public function setAbsolute();

	public function setRelative();

	public function isAbsolute();

	public function isRelative();


	public function getDateTime();

	public function setCurrent();
}