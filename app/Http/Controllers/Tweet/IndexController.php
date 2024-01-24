<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        // $tweets = Tweet::all()->sortByDesc('created_at');
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
