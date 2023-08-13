<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 
    protected $table = 'post'; // Sesuaikan dengan nama tabel yang benar di database
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'user_id', 'title', 'image', 'body'
    // ];
}
