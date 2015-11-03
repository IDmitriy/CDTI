<?php
namespace CDTI\Objects;

/**
 * Singleton interface.
 * 
 * @package Common Data Type Interface
 * @copyright (c) 2015 Dmitriy Ivan
 * @internal: Allows only one instance of oblect.
 */
interface hSingleton
{
    function getInstance();
}