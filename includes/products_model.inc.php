<?php

declare(strict_types=1);


function get_products(object $pdo) {
    $query = "SELECT * FROM products;";
    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}