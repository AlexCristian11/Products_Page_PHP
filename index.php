<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/products_view.inc.php';
    require_once 'includes/add_view.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styling.css">
    <title>Document</title>
</head>
<body>
    <div class="products">
        <?php
            show_products();
        ?>
    </div>

    <h3 id="add">Add Product</h3>

    <form action="includes/add.inc.php" method="post"  class="add">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="sku" placeholder="SKU">
        <input type="text" name="quantity" placeholder="Quantity">
        <button>Add</button>
    </form>

    <?php
        add_erorrs();
    ?>

</body>
</html>