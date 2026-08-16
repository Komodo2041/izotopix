<?php

namespace App\Http\Controllers;


use App\Services\IzoData;
use Illuminate\Http\Request;

use App\Models\Izotopics;

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

    public function importToTableIzoyopic(IzoData $id)
    {
        $all = $id->getIzoData(0, 1);
        foreach ($all as $record) {
            Izotopics::updateOrCreate(
                ['z' => $record[0], 'n' => $record[1]],
                [
                    'z' => $record[0],
                    'n' => $record[1],
                    'abundance' => $this->checknull($record['5']),
                    'unc_a' => $this->checknull($record['6']),
                    'is_stable' => $record['12'] == "STABLE",
                    'ht' => $record['12'] == "STABLE" ? null : $this->checknull($record['12']),
                    'operator_hl' => $this->checknull($record['13']),
                    'unc_hl' => $this->checknull($record['14']),
                    'unit_hl' => $this->checknull($record['15']),
                    'half_life_sec' => $this->checknull($record['16']),
                    'decay_1' => $this->checknull($record['18']),
                    'decay_1_p' => $this->checknull($record['19']),
                    'unc_1' => $this->checknull($record['20']),
                    'decay_2' => $this->checknull($record['21']),
                    'decay_2_p' => $this->checknull($record['22']),
                    'unc_2' => $this->checknull($record['23']),
                    'decay_3' => $this->checknull($record['24']),
                    'decay_3_p' => $this->checknull($record['25']),
                    'unc_3' => $this->checknull($record['26']),
                ]
            );
        }
        return redirect("/")->with('success', 'Dokonano importu z CSV');
    }

    private function checknull($val)
    {
        if ($val == "" || $val == "?") {
            return Null;
        }
        return $val;
    }
}
