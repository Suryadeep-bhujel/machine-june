<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reel extends Model
{
    use HasFactory;
    protected $fillable = [
        "caption",
        "file_path",
        "user_id",
        "status",
    ];
    public function comments()
    {
//your code here

    }
}
