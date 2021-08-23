<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    function getfrom()
    {
        echo view("user");
    }
}
