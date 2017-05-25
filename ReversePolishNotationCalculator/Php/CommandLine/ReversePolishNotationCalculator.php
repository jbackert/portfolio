<?php

class ReversePolishNotationCalculator
{
    protected static $stringToProcess;

    private function __construct() {}

    public static function calculate($stringToProcess)
    {
        self::$stringToProcess = explode(" ", $stringToProcess);

        self::validateStringToProcess();

        $partsOfString = new \SplStack();

        for($i=count(self::$stringToProcess)-1; $i>=0; $i--) {
            $partsOfString->push(self::$stringToProcess[$i]);
        }

        $operands = new \SplStack();
        while($partsOfString->count() > 0) {
            $topOfStack = $partsOfString->pop();

            if (self::isOperator($topOfStack)) {

                $operator = $topOfStack;
                $operand1 = $operands->pop();
                $operand2 = $operands->pop();

                $partsOfString->push(self::operate($operator, $operand1, $operand2));

            } else {
                $operands->push($topOfStack);
                $i++;
            }
        }

        return $operands->pop();
    }

    private static function validateStringToProcess()
    {
        foreach(self::$stringToProcess as $element) {
            if (self::isOperator($element) === false && is_numeric($element) === false) {

                throw new Exception("Unable to process $element in string");
            }
        }
    }

    private static function isOperator($string) {
        switch ($string) {
            case "*":
                return true;
            case "+":
                return true;
            case "/":
                return true;
            case "-":
                return true;
            default:
                return false;
        }
    }

    private static function operate($operator, $operand1, $operand2) {
        switch ($operator) {
            case "*":
                return $operand1 * $operand2;
            case "+":
                return $operand1 + $operand2;
            case "/":
                return $operand2 / $operand1;
            case "-":
                return $operand2 - $operand1;
            default:
                throw new Exception("Unable to compute $operator in string");
        }
    }
}