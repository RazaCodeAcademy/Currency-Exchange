@extends('layouts.master')
@section('title','Currency-Exchange News Page')
@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
   <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>News</h2>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($find_news!=null)
                    @foreach($find_news as $news_find)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="full news_blog">
                                @if($latest_news->id == $news_find->id)
                                    <div class="chip bg-warning text-white">
                                        @if(count($errors)>0)
                                            <div class="alert-danger alert">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(\Session:: has('success'))
                                            {{\Session::get('success')}}
                                        @endif
                                    </div>
                                @endif
                                <img class="img-responsive" src="/storage/public/{{ $news_find->image }}" alt="#" />
                                <div class="overlay"><a class="main_bt transparent" href="/news/{{ $news_find->id }}">View</a></div>
                                <div class="blog_details">
                                    <h3>{{ $news_find->title }} </h3>
                                    <p>{{ $news_find->headlines }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                
                    @foreach($news as $news_card)
                    <?php dd($news); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="full news_blog">
                                <img class="img-responsive" src="/storage/public/{{ $news_card->image }}" alt="#" />
                                <div class="overlay"><a class="main_bt transparent" href="/news/{{ $news_card->id }}">View</a></div>
                                <div class="blog_details">
                                    <h3>{{ $news_card->title }}</h3>
                                    <p>{{ $news_card->headlines }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
    <!-- end section -->

@endsection
	
</body>

</html>