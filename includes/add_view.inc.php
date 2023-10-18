<?php

declare(strict_types=1);

function add_erorrs() {
    if (isset($_SESSION["error_add"])) {
        $errors = $_SESSION["error_add"];

        echo '<br>';

        foreach ($errors as $error) {
            echo "<p class='add-error'>{$error}</p>";
        }

        unset($_SESSION["error_add"]);
    }
    else if (isset($_GET["product"]) && $_GET["product"] === "success") {
        echo '<br>';
        echo "<p class='add-success'>Product added!</p>";
    }
}