<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function index()
    {
        $node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
    }

    public function fizzbuzz($x, $y, $z)
    {
        $node = $x + 1;
        $fizz = $y + 1;
        $buzz = $z + 1;
        if ($node == 100) {
            return;
        }
        if ($fizz == 2&& $buzz == 3) {
            echo "Fizz, Buzz";
            $fizz = 0;
            $buzz = 0;
        } else if ($fizz == 2) {
            echo "Fizz";
            $fizz = 0;
        } else if ($buzz == 3) {
            echo "Buzz";
            $buzz = 0;
        } else {
            echo $node;
        }
        echo "<br>";
        $this->fizzbuzz($node, $fizz, $buzz);
    }
}
