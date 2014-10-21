<?php
error_reporting(0);
require 'vendor/autoload.php';

use Elibyy\Reader;

if ($argv[1] !== null) {
    if (file_exists($argv[1])) {
        $reader = new Reader($argv[1]);
        $status = $reader->unzip();
        if ($status !== false) {
            $result = "Archive unpacked successfully!\r\n";
        } else {
            $result = "Error: Archive could not unpack.\r\n";
        }
    } else {
        $result = "Error: This file ". $argv[1] ." is doesn't exist!\r\n";
    }
} else {
    $result = "Error: Insert file name.\r\n";
}
print($result);
