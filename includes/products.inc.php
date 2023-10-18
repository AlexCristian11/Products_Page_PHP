<?php

try {
//    require_once 'products_controller.inc.php';
//
//    if (out_of_stock($quantity)) {
//        $out = true;
//    }
}
catch (PDOException $e) {
    echo 'Query failed: ' . $e -> getMessage();
}