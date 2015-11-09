<?php
/**
 * Created by PhpStorm.
 * Date: 09.11.2015
 * Time: 1:20
 */

namespace tests;

include "../application/Calculator.php";

use application\Calculator;

spl_autoload_extensions(".php");
spl_autoload_register();

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCanBeCreated()
    {
        new Calculator();
    }

    public function testEmptyStringSum()
    {
        $o = new Calculator();
        $this->assertEquals(0, $o->add(""));
    }

    public function testTwoNumsSum()
    {
        $o = new Calculator();
        $this->assertEquals(3, $o->add("1,2"));
    }

    public function testOneNumSum()
    {
        $o = new Calculator();
        $this->assertEquals(1 ,$o->add("1"));
    }

    public function testMoreNumsSum()
    {
        $o = new Calculator();
        $this->assertEquals(6 ,$o->add("1,2,3"));
    }
} 