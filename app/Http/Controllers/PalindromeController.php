<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function index()
	{
		$wordList = ["Aku", "Kamu", "Katak", "Malam", "Isi", "Kasur", "Makan", "Minum", "Buku", "Kopi"]; 
        $this->palindrome($wordList);
	}

    public function palindrome($x) 
    {
        $y = count($x);
        for ($i = 0; $i < $y; $i++) {
            $z = strrev($x[$i]);
            if (strcasecmp($x[$i], $z) == 0) {
                echo $x[$i] . " adalah palindrome, ";
            } else {
                echo $x[$i] . " bukan palindrome, ";
            }
        }
    }
}
