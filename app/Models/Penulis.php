<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $table='Penulis';
    protected $guarded =['Id_Penulis','created_at', 'updated_at'];
}
