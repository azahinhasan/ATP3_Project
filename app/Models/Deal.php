<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $table='deal';
    protected $primaryKey='Deal_Id';
    public $timestamps=false;
    use HasFactory;
}
