<?php

namespace Test ;

use App\Calculator;
use PHPUnit\Framework\TestCase;
require './class/Calculator.php';



class CalculatorTest extends TestCase 
{   
    public function testAdd()
    {
        $calc = new Calculator();
        $calc = $calc->add(3,2);
        $this->assertEquals(5,$calc);
    }
}