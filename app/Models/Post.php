<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'file_path',
        "user_id",
        'status',
    ];
    public function comments()
    {
        //Write your code here to fix the problem

    }
    public function reacts()
    {
        //Write your code here to fix the problem
    }
}
