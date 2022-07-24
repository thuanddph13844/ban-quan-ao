<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danh_mucs extends Model
{
    use HasFactory;
    protected $table = "danh_mucs";
    protected $fillable = ['id', 'name'];
    public function loadListWithPager($params = [])
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $list = $query->paginate(10);
        return $list;
    }
}
