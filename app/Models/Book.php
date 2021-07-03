<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table='books';
    protected $primaryKey='Id';
    public $timestamps=false;
    use HasFactory;
}
