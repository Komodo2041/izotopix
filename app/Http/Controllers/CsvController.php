<?php

namespace App\Http\Controllers;


use App\Services\IzoData;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function showTableFile(Request $request, IzoData $id)
    {
        $z = $request->input("z", 0);
        $columns = $id->getColumns();
        $res = [];
        if ($z > 0) {
            $res = $id->getIzoData($z);
        }

        return view("izoShow", ["columns" => $columns, "z" => $z, "res" => $res]);
    }
}
