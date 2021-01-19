<?php 

use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(8, $sut->add(5,3));
        $this->assertEquals(5, $sut->add(5,0));
    }

    public function testAddWillReturnTheSubtractOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(5, $sut->subtract(8,3));
        $this->assertEquals(8, $sut->subtract(10,2));
        $this->assertEquals(2, $sut->subtract(4,2));
    }
    
    public function testAddWillReturnTheMultiplyOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(24, $sut->multiply(8,3));
        $this->assertEquals(20, $sut->multiply(10,2));
        $this->assertEquals(8, $sut->multiply(4,2));
    }

    public function testAddWillReturnTheDivideOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(5, $sut->divide(10,2));
        $this->assertEquals(20, $sut->divide(40,2));
        $this->assertEquals(4, $sut->divide(8,2));
    }
}