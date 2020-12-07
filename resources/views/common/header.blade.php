    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ url('storage/images/loader.gif') }}" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->
  <!-- Start header -->
  <header class="top-header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="/"><img src="{{ url('storage/images/logo.png') }}" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto: {{$address->email ?? 'razarai663@gmail.com'}}"><img src="{{ url('storage/images/mail_icon.png') }}" alt="#" />{{$address->email ?? 'razarai663@gmail.com'}}</a></li>
                            <li><a href="tel: {{$address->phone ?? '03037900571'}}"><img src="{{ url('storage/images/phone_icon.png') }}" alt="#" />{{$address->phone ?? '03037900571'}}</a></li>
                            <li><a class="join_bt" href="#">Join us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                   <nav class="navbar header-nav navbar-expand-lg">
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="/">Home</a></li>
                        <li><a class="nav-link" href="/about">About</a></li>
                        <li><a class="nav-link" href="/exchange">Exchange</a></li>
                        <li><a class="nav-link" href="/services">Services</a></li>
                        <li><a class="nav-link" href="/news">News</a></li>
                        <li><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
                 </nav>
                <div class="search-box">
                    <form action="/news" method="get">
                        <input type="text" name="search" class="search-txt" placeholder="Search">
                        <a class="search-btn" type="button">
                            <img src="{{ url('storage/images/search_icon.png') }}" alt="#" />
                        </a>
                    </form>
                </div>
                </div>
            </div>
          </div>
        </div>

    </header>
    <!-- End header -->



