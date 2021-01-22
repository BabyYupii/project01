<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kain extends Model
{
    use HasFactory;
    protected $table='kain';
    protected $guarded =['Id','created_at', 'updated_at'];
    protected $fillable =['Nama_Kain','Id_Kain','Kategorii','Distributor','qty','Harga_Jual','Harga_Beli'];
}
