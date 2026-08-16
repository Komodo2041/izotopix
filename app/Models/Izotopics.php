<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Izotopics extends Model
{

    public $fillable = [
        "z",
        "n",
        "abundance",
        "unc_a",
        "is_stable",
        "ht",
        "operator_hl",
        "unc_hl",
        "unit_hl",
        "half_life_sec",
        "decay_1",
        "decay_1_p",
        "unc_1",
        "decay_2",
        "decay_2_p",
        "unc_2",
        "decay_3",
        "decay_3_p",
        "unc_3"
    ];


    public $table = "izotops";
}
