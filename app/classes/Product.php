<?php

namespace App\classes;
class Product
{

    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $name;
    protected $price;
    protected $description;
    protected $imageName;
    protected $tmpPath;

    public function __construct($post = null, $file = null)
    {
        $this->file   = $file;
        $this->imageName = $file['image']['name'];
        $this->tmpPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/upload/' .$this->imageName;

//        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
//        echo 'success';

    }

    public function index()
    {
        header('Location: action.php?pages= add-product');
    }

    public function newProduct()
    {
        move_uploaded_file($this->tmpPath, $this->directory);
    }

}