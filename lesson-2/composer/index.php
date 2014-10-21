<?php
error_reporting(0);
require 'vendor/autoload.php';

use Elibyy\Reader;

if ($argv[1] !== null) {
    $reader = new Reader($argv[1]);
    $status = $reader->unzip();
    if ($status !== false) {
        $result = "Archive unpacked successfully\r\n";
    } else {
        $result = "Archive could not unpack\r\n";
    }
} else {
    $result = "Insert file name\r\n";
}
print($result);
