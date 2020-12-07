<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\News;
use \App\Address;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$laatstepost = Post::orderBy('created_at', 'desc')->take(1)->get();
        $id = $request->search;

        $news = News::orderBy('created_at', 'desc')->get();

        //dd($news);

        $find_news = News::where( 'title', 'LIKE', '%' . $id . '%' )->orderBy('created_at', 'desc')->get();

        $latest_news = News::latest()->first();

        //$news = News::orderBy('created_at', 'desc')->take(3)->get();

        if ($find_news==true) {
            //dd($news);
        
            return view('news',[
        
                'news' => $news,

                'latest_news' => $latest_news,
        
                'find_news' => $find_news,
        
                ]);
        
            } else {
               // dd($news);
        
                $find_news=null;
        
                return view('news',[
        
                    'news' => $news,

                    'latest_news' => $latest_news,
        
                    'find_news' => $find_news,
        
                ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News;

        $news->title = $request->title;
        
        $news->image_url = $request->image_url;
        
        if ($request->hasfile('image')) {
        
            $file = $request->file('image');
        
            $extension = $file->getClientOriginalExtension(); //getting image extension
        
            $filename = time(). '.' .$extension;
        
            $file->move('storage/public/',$filename);
        
            $news->image = $filename;
        
        } else {
        
            return $request;
        
            $news->image = '';
        
        }
        
        $news->headlines = $request->headlines;
        
        $news->description = $request->description;
     
        $news->save();
        
        return redirect('/news')->with('success','New');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        
        return view('news_show',[
        
            'news' => $news,
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
