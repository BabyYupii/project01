<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $table='Distributor';
    protected $guarded =['Id_Distributor','created_at', 'updated_at'];
}
