<?php
namespace CDTI\Objects;

/**
 * Allows multiple instances of oblect stored in pool.
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface hMultiton
{
    /**
     * Create a full copy of current instance
	 *
	 * @param var $_capture Variable for optionally store previous state
	 * @return iObject Object of same type;
	 */
	function asNew(&$_capture = false);
    
    /**
     * Получить новый объект через конструтор
     */
    function getNew();
    
    /**
     * Получить Список Объектов
	 * Позволяет общим методам листа подставлять нужные объекты при вызове из потомков
     */
    function getList($_type = true);
    
    static function getInstance($_name);
    
    static function setInstance($_name, $_object);
    
    static function &getInstanceStorage();
    
    static function setInstanceStorage(array $_storage);
}