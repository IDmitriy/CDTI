<?php
namespace CDTI\Objects;

/**
 * List interface
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: Lists are object which contains limited by type items, allowing mass operations on them
 */
interface hList extends iArray
{
    /**
     * Called methods performed on instance of List object, as on array
     */
    const SELF = false;
    
    /**
     * Called methods performed on items List contains
     */
    const CONTAINS = true;

    /**
     * This is example, qht types of objects can be members of list; 
     * @param type $_object
     * @todo: maybe array of allowed types?
     * @todo: think about interfaces;
     */
    function setMember($_object);
    
    function getMember();
    
    /**
     * Changes operation mode of list: perform methods on self or items it contains
     * @param boolean $_mode iList::SELF | iList::CONTAINS
     */
    function setMode($_mode);
    
    function getMode();
}