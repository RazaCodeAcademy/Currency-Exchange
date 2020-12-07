@extends('layouts.master')
@section('title','Currency-Exchange Exchange Page')
@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>{{$news->title}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="/storage/public/{{$news->image}}" alt="#" class="w-100" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">News</span> detail</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        {{$news->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>
    
    </html>