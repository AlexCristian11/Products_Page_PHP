<?php

declare(strict_types=1);

function set_product(object $pdo, string $name, float $price, int $sku, int $quantity) {
    $query = "INSERT INTO products (name, price, sku, quantity) VALUES (:name, :price, :sku, :quantity);";
    $stmt = $pdo -> prepare($query);

    $stmt -> bindParam(":name", $name);
    $stmt -> bindParam(":price", $price);
    $stmt -> bindParam(":sku", $sku);
    $stmt -> bindParam(":quantity", $quantity);

    $stmt -> execute();
}