<?php
namespace CDTI\DateTimes;

/**
 * Time interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iTime extends \CDTI\iObject
{
	/**
	 * Получить час
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Times\tHour|\theFramework\tString|\theFramework\tNumber|int По умолчанию theHour, int в случае $_type=false
	 */
	public function getHour($_type = true);

	/**
	 * Задать час
	 * @param int $_number
	 */
	public function setHour($_number);

	/**
	 * Получить минуту
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Times\tMinute|\theFramework\tString|\theFramework\tNumber|int По умолчанию theMinute, int в случае $_type=false
	 */
	public function getMinute($_type = true);

	/**
	 * Задать минуту
	 * @param int $_number
	 */
	public function setMinute($_number);

	/**
	 * Получить секунду
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Times\tSecond|\theFramework\tString|\theFramework\tNumber|int По умолчанию theSecond, int в случае $_type=false
	 */
	public function getSecond($_type = true);

	/**
	 * Задать секунду
	 * @param int $_number
	 */
	public function setSecond($_number);

	/**
	 * Получить микросекунду
	 *
	 * @param bool|\theFramework\aSimple $_type Тип, в котором будут возврещены данные
	 * @return \theFramework\DateTimes\Times\tMicrosecond|\theFramework\tString|\theFramework\tNumber|int По умолчанию theMicrosecond, int в случае $_type=false
	 */
	public function getMicrosecond($_type = true);

	/**
	 * Задать микросекунду
	 * @param int $_number
	 */
	public function setMicrosecond($_number);
}