<?php
    require_once 'vendor/autoload.php';
    use App\classes\Product;

    if (isset($_GET['pages']))
    {
        if ($_GET['pages'] = 'add-product')
        {
            include 'pages/add-product.php';
        }
    }

    elseif (isset($_POST['btn']))
    {
        $product = new Product($_POST, $_FILES);
        $product->newProduct();
      //  include 'pages/add-product.php';
    }