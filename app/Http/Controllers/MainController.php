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
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+16)->get();
        $res2 = [];
        foreach ($elements as $izo) {
            $res2[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+13)->get();
        $res3 = [];
        foreach ($elements as $izo) {
            $res3[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+12)->get();
        $res4 = [];
        foreach ($elements as $izo) {
            $res4[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+11)->get();
        $res5 = [];
        foreach ($elements as $izo) {
            $res5[$izo->z][$izo->n] = 1;
        }
        return view("serge", ["res" => $res, "res2" => $res2, "res3" => $res3, "res4" => $res4, "res5" => $res5]);
    }

    public function serge82()
    {

        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+14)->get();
        $res = [];
        foreach ($elements as $izo) {
            $res[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+11)->get();
        $res2 = [];
        foreach ($elements as $izo) {
            $res2[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+8)->get();
        $res3 = [];
        foreach ($elements as $izo) {
            $res3[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 3.15576e+5)->get();
        $res4 = [];
        foreach ($elements as $izo) {
            $res4[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 300)->get();
        $res5 = [];
        foreach ($elements as $izo) {
            $res5[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 30)->get();
        $res6 = [];
        foreach ($elements as $izo) {
            $res6[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 1)->get();
        $res7 = [];
        foreach ($elements as $izo) {
            $res7[$izo->z][$izo->n] = 1;
        }
        $elements = Izotopics::where("half_life_sec", ">=", 0.0001)->get();
        $res8 = [];
        foreach ($elements as $izo) {
            $res8[$izo->z][$izo->n] = 1;
        }
        return view("serge82", ["res" => $res, "res2" => $res2, "res3" => $res3, "res4" => $res4, "res5" => $res5, "res6" => $res6, "res7" => $res7, "res8" => $res8]);
    }
}
