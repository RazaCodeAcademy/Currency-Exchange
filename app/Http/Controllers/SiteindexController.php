<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\News;

class SiteindexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('index',[
            'news' => $news,
        ]);
    }
}
