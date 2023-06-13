<?php

namespace App\Http\Controllers\V1\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function new_updates(Request $request)
    {
        // write  query to fetch any type of  latest content  that can be posts , feeds or reels, which has  true status
        // has to return counts of comments
        // has to return 5 comments per content
        // all that has to be in single query,
        // return laravel standard response format with http status code standerd status code
    }
    public function comments(Request $request, $id)
    {
        // request should send  one   of  tye type of content {posts, feeds , reels}
        // fetch active comments on that content and send in pagination,
    }
    // public function post_comment(Request $request, $id)
    // {
    //     // request should send  one   of  tye type of content {posts, feeds , reels} to this method
    //     // add comment to the content  with polymorphic standard,
    //     // return laravel standard response or best approach in laravel
    // }
    public function post_react(Request $request, $id)
    {
        // request should send  one   of  tye type of content {posts, feeds , reels, comments} to this method
        // find content , if not exist follow your best approach, if exist  add react 
        // react from request should be ['like', 'haha', 'wow', 'angry', "sad"],
        // once react is updated ,  trigger a  laravel job which sends  notification to content related all users, 
    }
}
