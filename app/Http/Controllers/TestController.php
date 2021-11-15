<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function room($number="")
    {
        return "部屋番号は".$number."です";
    }
    public function build($text="建物です")
    {
        return $text;
        }
}