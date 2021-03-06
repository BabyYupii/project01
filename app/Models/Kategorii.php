<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorii extends Model
{
    use HasFactory;
    protected $table='kategorii';
    protected $guarded =['Id_Kat','created_at', 'updated_at'];
    protected $fillable =['Kategori','Keterangan'];
}
