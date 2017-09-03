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
 * @category  Library
 * @package   CreateConstructCallable
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      https://github.com/emeraldinspirations/lib-createconstructcallable
 */
class ConstructCallableCreatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Verify callable created for specified constructor
     *
     * @return void
     */
    public function testInvoke()
    {

        $Callable1 = ConstructCallableCreator::createConstructCallable(
            ConstructCallableCreatorTestDummy1::class
        );

        $Callable2 = ConstructCallableCreator::createConstructCallable(
            ConstructCallableCreatorTestDummy2::class
        );


        $this->assertTrue(
            is_callable($Callable1)
        );

        $this->assertTrue(
            is_callable($Callable2)
        );

        $Test1 = $Callable1();
        $Test2 = $Callable2(
            $StdClass1 = new \stdClass(),
            $StdClass2 = new \stdClass()
        );

        $this->assertInstanceOf(
            ConstructCallableCreatorTestDummy1::class,
            $Test1
        );

        $this->assertInstanceOf(
            ConstructCallableCreatorTestDummy2::class,
            $Test2
        );

        $this->assertSame(
            $Test2->Param1,
            $StdClass1
        );

        $this->assertSame(
            $Test2->Param2,
            $StdClass2
        );
    }

}

/**
 * Dummy Class 1
 *
 * @category  Library
 * @package   CreateConstructCallable
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      https://github.com/emeraldinspirations/lib-createconstructcallable
 */
class ConstructCallableCreatorTestDummy1
{

}

/**
 * Dummy Class 2
 *
 * Dummy class with construct parameters
 *
 * @category  Library
 * @package   CreateConstructCallable
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      https://github.com/emeraldinspirations/lib-createconstructcallable
 */
class ConstructCallableCreatorTestDummy2
{

    /**
     * Mock construct with parameters
     *
     * @param mixed $Param1 Required
     * @param mixed $Param2 Optional
     * @param mixed $Param3 Optional
     *
     * @return void
     */
    public function __construct($Param1, $Param2 = null, $Param3 = null)
    {
        $this->Param1 = $Param1;
        $this->Param2 = $Param2;
        $this->Param3 = $Param3;
    }

}
