<?php

namespace App\Http\Controllers\V1\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function new_updates(Request $request){
         // write  query to fetch any type of  latest content  that can be post , feeds or reels, which has  true status
         // has to return counts of comments 
         // has to return 5 comments per content 
         // all that has to be in single query, 
         // return laravel standard response format with http status code standerd status code
    }
    public function  comments(Request $request, $id){
        // request should send  one   of  tye type of content {post, feed , reels}
        // fetch active comments on that content and send in pagination, 
    }
}
