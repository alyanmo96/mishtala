<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_video extends Model
{
    use HasFactory;
    protected $table = 'work_videos';
    protected $fillable = ['link'];
}
