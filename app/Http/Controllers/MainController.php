<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Elements;

class MainController extends Controller
{
    public function list()
    {
        $elements = Elements::all();
        $res = [];
        foreach ($elements as $e) {
            $res[$e->rows][$e->columns] = $e->toArray();
        }

        return view("main", ["res" => $res]);
    }
}
