<?php
namespace App\classes;
class User
{

    protected $name = 'BITM';
    protected $city = 'Dhaka';

    public function index()
    {
        echo 'Institute name is ' .$this->name. 'and the city is ' .$this->city;
    }

}