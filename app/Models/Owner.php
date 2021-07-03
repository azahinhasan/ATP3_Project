<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table='shop';
    protected $primaryKey='Shop_Id';
    public $timestamps=false;
    use HasFactory;
}
