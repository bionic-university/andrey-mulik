<?php
error_reporting(0);
require 'vendor/autoload.php';

use Elibyy\Reader;

if ($argv[1] !== null) {
    $reader = new Reader($argv[1]);
    $reader->unzip();
} else {
    $result = "Insert file name\r\n";
}
print($result);
