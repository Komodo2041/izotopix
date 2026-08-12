<?php

namespace App\Http\Controllers;


use App\Services\IzoData;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function showTableFile(Request $request, IzoData $id)
    {
        $z = $request->input("z", 1);
        $columns = $id->getColumns();
        return view("izoShow", ["columns" => $columns, "z" => $z]);
    }
}
