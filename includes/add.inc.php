<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $price = $_POST["price"];
    $sku = $_POST["sku"];
    $quantity = $_POST["quantity"];

    try {
        require_once 'dbh.inc.php';
        require_once 'add_model.inc.php';
        require_once 'add_controller.inc.php';

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($name, $price, $sku, $quantity)) {
            $errors["empty_input"] = "Please fill all the fields";
        }
//        if (is_invalid_input($price, $sku, $quantity)) {
//            $errors["invalid_input"] = "Invalid input";
//        }

        require_once 'config_session.inc.php';


        if ($errors) {
            $_SESSION["error_add"] = $errors;

            header('Location: ../index.php');
            die();
        }

        create_product($pdo, $name, $price, $sku, $quantity);

        header('Location: ../index.php?product=success');

        $pdo = null;
        $stmt = null;

        die();

    }
    catch (PDOException $e) {
        echo 'Query failed: ' . $e -> getMessage();
    }
}
else {
    header('Location: ../index.php');
    die();
}