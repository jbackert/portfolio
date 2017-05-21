<?php

//TODO: create a help function with usage rpnCalc.php "3 4 5 * -"
//TODO: do a check for the existence of a string to calculate and respond accordingly if not
//TODO: catch error thrown by calculate()
//TODO: check for invalid data (not operator or number and return message
//TODO: refactor the calculator into a class that is created - also add unit tests

$stack = new \SplStack();

$stringToProcess = explode(" ", $argv[1]);

for($i=count($stringToProcess)-1; $i>=0; $i--) {
    $stack->push($stringToProcess[$i]);
}

$tempStorage = [];
$i=0;
while($stack->count() > 0) {
    $topOfStack = $stack->pop();

    if (isOperator($topOfStack)) {

        $operator = $topOfStack;
        $stack->push(calculate($operator, $tempStorage[$i-1], $tempStorage[$i-2]));
        $i -= 2;

    } else {
        $tempStorage[$i] = $topOfStack;
        $i++;
    }
}

echo "The answer is " . $tempStorage[0];

function isOperator($string) {
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

function calculate($operator, $operand1, $operand2) {
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
            //TODO: throw error
    }
}

