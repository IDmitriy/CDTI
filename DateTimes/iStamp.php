<?php
namespace CDTI\DateTimes;

/**
 * Timestamp interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: Shares functionality of DateTime and Number
 * @todo: to think.
 */
interface iStamp extends \CDTI\iNumber, \CDTI\iDateTime
{
	public function setAbsolute();

	public function setRelative();

	public function isAbsolute();

	public function isRelative();


	public function getDateTime();

	public function setCurrent();
}