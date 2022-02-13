<?php
namespace App\classes;
trait Category
{


    public $a = 'bitm';
    public $b = 'basis';

    public function hello()

    {
        echo $this->a .' ' .$this->b;
    }
}