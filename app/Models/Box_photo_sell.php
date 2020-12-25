<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box_photo_sell extends Model
{
    use HasFactory;
    protected $table = 'box_photo_sells';
    protected $fillable = ['name','description','price','image'];
}
