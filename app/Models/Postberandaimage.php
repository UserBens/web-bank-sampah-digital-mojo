<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postberandaimage extends Model
{
    use HasFactory; 
    protected $table = 'postimage'; // Sesuaikan dengan nama tabel yang benar di database
    protected $fillable = [
        'nama_file', 'image'
    ];
}
