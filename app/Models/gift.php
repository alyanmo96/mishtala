<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gift extends Model
{
    use HasFactory;
    protected $table = 'gifts';
    protected $fillable = ['name','description','price','image'];
}
