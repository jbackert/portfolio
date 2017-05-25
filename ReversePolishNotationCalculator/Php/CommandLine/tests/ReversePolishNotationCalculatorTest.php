<?php

use PHPUnit\Framework\TestCase;

class ReversePolishNotationCalculatorTest extends TestCase
{
    public function testAddition()
    {
        $answer = ReversePolishNotationCalculator::calculate("3 4 +");

        $this->assertEquals($answer, 7);
    }

    public function testSubtraction()
    {
        $answer = ReversePolishNotationCalculator::calculate("3 4 -");

        $this->assertEquals($answer, -1);
    }

    public function testMultiplication()
    {
        $answer = ReversePolishNotationCalculator::calculate("3 4 *");

        $this->assertEquals($answer, 12);
    }

    public function testDivision()
    {
        $answer = ReversePolishNotationCalculator::calculate("3 4 /");

        $this->assertEquals($answer, .75);
    }

    public function testOrderOfOperations()
    {
        $answer = ReversePolishNotationCalculator::calculate("3 2 1 + *");

        $this->assertEquals($answer, 9);
    }
}