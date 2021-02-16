<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grass extends Model
{
    use HasFactory;
    protected $table = 'grass';
    protected $fillable = ['name','description','price','image'];
}
