<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = ['Nama','jenis_Kelamin','Alamat','Alasan'];
    // protected $guarded = [''];
}
