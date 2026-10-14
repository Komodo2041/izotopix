<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Elements;
use App\Models\Izotopics;


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

    public function serge()
    {

        $elements = Izotopics::where("is_stable", 1)->get();
        $res = [];
        foreach ($elements as $izo) {
            $res[$izo->z][$izo->n] = 1;
        }

        return view("serge", ["res" => $res]);
    }
}
