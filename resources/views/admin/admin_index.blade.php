@extends('layouts.master')
@section('title','Currency-Exchange Admin Home Page')
@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Welcome To Admin Panel<username></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section started -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Update Services</h2>
                        </div>
                    </div>
                    <div>
                        <p><b><h4 class="theme_color">IMPORTANT NOTE:</h4></b> This page is only for Admin.Only Admin can asscess this page.for more site information please contact <a href="#"><b>Admin</b></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                       <img class="img-responsive" src="{{ url('storage/images/s1.png') }}" alt="#" />
                       <h4> <a href="/add-address">Address Detail</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ url('storage/images/s2.png') }}" alt="#" />
                        <h4> <a href="/news/create">Add News</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="{{ url('storage/images/s3.png') }}" alt="#" />
                        <h4><a href="/rates">Add&Update Services</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section End -->
@endsection
</body>

</html>