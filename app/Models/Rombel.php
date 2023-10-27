<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    protected $table='rombel';
    protected $primaryKey='id_rombel';
    public $timestamps = false;
    protected $fillable=array('nama_rombel','wali_rombel','jurusan');
}
