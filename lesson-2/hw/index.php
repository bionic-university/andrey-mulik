<?php
    class calculator {

        public static function doIt ($operandA, $operandB, $operator) {

            switch ($operator) {
                case '+':
                    $result = $operandA + $operandB;
                    break;

                case '-':
                    $result = $operandA - $operandB;
                    break;
                case '*':
                    $result = $operandA * $operandB;
                    break;
                case '/':
                    $result = $operandA / $operandB;
                    break;
            }
            print($result);
        }
    }

$result = calculator::doIt($argv[1],$argv[2],$argv[3]);
print($result);
