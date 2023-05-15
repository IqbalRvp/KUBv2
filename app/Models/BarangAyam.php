<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangAyam extends Model
{
    use HasFactory;
    protected $table = 'brg_ayam';
    protected $primaryKey = 'id_ayam';
    protected $fillable = ['id_ayam', 'jumlah_ayam'];
}
