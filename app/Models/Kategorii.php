<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorii extends Model
{
    use HasFactory;
    protected $table='Kategorii';
    protected $guarded =['Id_Buku','created_at', 'updated_at'];
}
