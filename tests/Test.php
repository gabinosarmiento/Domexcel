<?php

namespace Domexcel\Tests;

use Domexcel\Domexcel;
use PHPUnit\Framework\TestCase;

/**
 *  Corresponding Class to test YourClass class
 *
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 *  @author Gabino Sarmiento
 */
class Test extends TestCase
{

    /**
     * Just check if the YourClass has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new Domexcel;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
     * Just check if the YourClass has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testMethod()
    {
        $var = new Domexcel;
        $this->assertTrue($var->world("hey") == 'Hello World');
        unset($var);
    }
}
