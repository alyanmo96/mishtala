<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_photo_m extends Model
{
    use HasFactory;
    protected $table = 'work_photo_ms';
    protected $fillable = ['image'];
}
