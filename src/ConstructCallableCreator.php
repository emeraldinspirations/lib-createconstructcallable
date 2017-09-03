<?php

/**
 * Container for unit tests for __construct callable creator
 *
 * PHP Version 7
 *
 * @category  Library
 * @package   CreateConstructCallable
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE
 * @link      https://github.com/emeraldinspirations/lib-createconstructcallable
 */

namespace emeraldinspirations\library\createConstructCallable;

/**
 * Unit tests for __construct callable creator
 *
 * PHP does not yet have a syntax for creating a callable for the constructor
 * of a class.  Some workarounds involve using ReflectionClass.  Example:
 * https://stackoverflow.com/q/24129450/6699286
 *
 * This class provides an alternate option.  In creates an anonymous function
 * that fulfills the callable need and runs the relevant constructor.
 *
 * @category  Library
 * @package   CreateConstructCallable
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      https://github.com/emeraldinspirations/lib-createconstructcallable
 */
class ConstructCallableCreator
{

    /**
     * Create callable wrapper for object constructor
     *
     * @param string $ForClass The name of the class to be constructed
     *
     * @return callable
     */
    static function createConstructCallable(string $ForClass) : callable
    {
        return function (...$Params) use ($ForClass) {
            return new $ForClass(...$Params);
        };
    }

}
