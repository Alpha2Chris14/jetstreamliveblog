<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['featuredPosts'] = Post::published()->featured()->latest('published_at')->take(3)->get();
        $data['latestPosts'] = Post::published()->latest('published_at')->take(3)->get();
        return view('home',$data);
    }
}
