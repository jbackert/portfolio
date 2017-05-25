<?php

include_once("ReversePolishNotationCalculator.php");

$options = getopt("i:h::");

if (array_key_exists("h", $options)) {
    echo "This reverse Polish Notation Calculator can process the following functions: \n";
    echo "Addition \n";
    echo "Subtraction \n";
    echo "Multiplication \n";
    echo "Division \n";
    echo "\n";
    echo "To process an equation run: rpnCalc.php -i \"<<YOUR_STRING>>\"\n";
    echo "Ex: php rpnCalc.php -i \"3 4 +\" will return 7 \n";

    exit();
}

try {
    //$calculator = new ReversePolishNotationCalculator($options["i"]);

    //echo "The answer is " . $calculator->calculate() . "\n";

    echo "The answer is " . ReversePolishNotationCalculator::calculate($options["i"]) . "\n";

} catch (Exception $exception) {

    echo $exception->getMessage() . "\n";
}

