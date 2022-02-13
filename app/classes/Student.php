<?php
namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;
class Student extends Teacher implements ExampleOne, ExampleTwo
{

    use Category;

    protected $country  = 'Bangladesh';
    public static $area = 'Mirpur';

    public function __construct()
    {
//        $this->name = 'Hasan';
//        $this->city = 'Mirpur';
    }


    public function manage ()
    {
        echo self::$area;

       // echo "Institute name is $this->name , city is $this->city and the country is $this->country";
    }

    public function one()
    {
       echo 'hello one';
    }

    public function two()
    {
        echo 'hello two';
    }

    public function three()
    {
        echo 'hello three';
    }

    public function ten()
    {
        echo 'hello ten';
    }

    public function ten1()
    {
        echo 'hello ten one';
    }

    public function test()
    {
        echo 'hello test';
    }
    public static function demo()
    {
        echo 'hellow';
    }
}