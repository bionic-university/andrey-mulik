<?php
error_reporting(0);

    class calculator
    {
        public static $info_1 = "1Ошибка, программа работает только с этими операторами: +, -, *, /";
        public static $info_2 = "Результат: Ошибка, 1 и 3 параметры должны быть числом\r\n";
        public static $info_3 = "Результат: Ошибка, метод ожидает 3 параметра (Операнд, Оператор, Операнд)\r\n";

        public static function doIt ($operandA, $operator, $operandB)
        {
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
                            $result = self::$info_1;
                            break;
                    }
                    $result = "Результат: " . $result . "\r\n";
                } else {
                    $result = self::$info_2;
                }
            } else {
                $result = self::$info_3;
            }
            print($result);
        }
    }

$result = calculator::doIt($argv[1],$argv[2],$argv[3]);
print($result);
