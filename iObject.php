<?php
namespace CDTI;

/**
 * Object interface
 * - Check for exact class, as caller
 * - Check for sufficient for creating instance of this class
 * - Check for exact native type
 * - Retrieve reflection of class
 * - Retrieve class name
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 */
interface iObject
{
	/**
	 * Check for same class as caller
	 *
	 * @param type $_object
	 * @return bool
	 */
	static function is($_object);

	/**
	 * Check for sufficient for creating instance of this class
     * 
	 * @param mixed $_value Any value
	 * @return bool
	 */
	static function isCompatible($_value);
    
    /**
     * Check for exact native type
     * @param mixed $_value
     * @return bool
     */
	static function isExact($_value);
    
    /**
     * 
     */
    static function isInstanceExists();

	/**
     * Retrieve reflection of class
     * 
	 * @return \CDTI\Reflections\cClass
     * @internal: As method called, a poll of reflection instances will be created
	 */
	function getClass();
    
    /**
     * Retrieve class name
     *  
     * @return string Full name of class
     * @internal: lightweight version of getClass
     */
    function getClassName();

    
    
}