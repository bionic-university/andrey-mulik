<?php
    class calculator {

        public static function doIt ($operandA, $operator, $operandB) {
            if ($operandA !== null && $operandB !== null && $operator !== null) {
                if (is_numeric($operandA) && is_numeric($operandB)) {
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
                        default:
                            $result = "Ошибка, программа работает только с этими операторами: +, -, *, /";
                            break;
                    }
                    $result = "Результат: " . $result . "\r\n";
                } else {
                    $result = "Результат: Ошибка, 1 и 3 параметры должны быть числом\r\n";
                }
            } else {
                $result = "Результат: Ошибка, метод ожидает 3 параметра\r\n";
            }
            print($result);
        }
    }

$result = calculator::doIt($argv[1],$argv[2],$argv[3]);
print($result);
