<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagorymodel extends Model
{

    protected $table='book_categories';
    protected $primaryKey='CategoryId';
    public $timestamps=false;
    use HasFactory;
}
