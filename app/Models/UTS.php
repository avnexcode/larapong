<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UTS extends Model
{
    use HasFactory;
    
    protected $fillable = ["nama_lengkap", "nim", "jurusan", "semester"];
    protected $guarded = ["id"];
    protected $table = "mahasiswa";
    
}
