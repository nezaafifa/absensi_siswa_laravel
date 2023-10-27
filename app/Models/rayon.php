<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rayon extends Model
{
    use HasFactory;
    protected $table='rayon';
    protected$primaryKey='id_rayon';
    public $timestamps= false;
    protected $fillable=array('nama_rayon','wali_rayon','jumlah_anggota');
}
