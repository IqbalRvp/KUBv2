<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangTelur extends Model
{
    use HasFactory;
    protected $table = 'brg_telur';
    protected $primaryKey = 'id_telur';
    protected $fillable = ['id_telur', 'gread', 'berat_telur'];

}
