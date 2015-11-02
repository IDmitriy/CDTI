<?php
/**
 * Common Data Type Interface. Даты и Время. Дата.
 * @copyright (c) 2015 Dmitriy Ivan
 */
namespace CDTI\DateTimes;

/**
 * Интерфейс Даты
 */
interface iDate
{
	/**
	 * Получить год
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Dates\tYear|\theFramework\tString|\theFramework\tNumber|int По умолчанию theYear, int в случае $_type=false
	 */
	public function getYear($_type = true);

	/**
	 * Задать год
	 * @param int $_number
	 */
	public function setYear($_number);

	/**
	 * Получить месяц
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Dates\tMonth|\theFramework\tString|\theFramework\tNumber|int По умолчанию theMonth, int в случае $_type=false
	 */
	public function getMonth($_type = true);

	/**
	 * Задать месяц
	 * @param int $_number
	 */
	public function setMonth($_number);

	/**
	 * Получить день
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Dates\tDay|\theFramework\tString|\theFramework\tNumber|int По умолчанию theDay, int в случае $_type=false
	 */
	public function getDay($_type = true);

	/**
	 * Задать день
	 * @param int $_number
	 */
	public function setDay($_number);
}