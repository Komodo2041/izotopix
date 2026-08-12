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

    public function getIzoData($z)
    {
        $data = Storage::get('izobase.csv');
        $records = explode("\n", $data);
        $c = count($records);
        $res = [];
        for ($i = 4; $i < $c; $i++) {
            $pom = explode(",", $records[$i]);
            if ($pom[0] == $z) {
                $res[] = $pom;
            }
        }

        return $res;
    }
}
