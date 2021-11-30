<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    static public function getAll() {
        $sql = "SELECT * FROM tasks";
        return DB::select($sql);
    }
}
