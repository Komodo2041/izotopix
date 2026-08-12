<?php


namespace App\Services;

use Illuminate\Support\Facades\Storage;


class IzoData
{

    public function getColumns()
    {
        $data = Storage::get('izobase.csv');
        $records = explode("\n", $data);
        $columns = explode(",", $records[0]);
        return $columns;
    }
}
