<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_equipment extends Model
{
    use HasFactory;
    protected $table = 'work_equipments';
    protected $fillable = ['name','description','price','image'];
}
