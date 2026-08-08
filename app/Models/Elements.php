<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Elements extends Model
{
    public $fillable = ["z", "name", "short", "columns", "rows", "isstab"];
    public $table = "elements";
}
