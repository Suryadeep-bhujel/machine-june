<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        "user_id",
        'status',
    ];
    public function comments()
    {
        //Write your code here to fix the problem
    }
}
