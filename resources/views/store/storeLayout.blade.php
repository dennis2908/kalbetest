<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Arifah Dilah</title>

    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style2.css')}}" />
    
    <!-- JQuery and Validator Plugins -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    {{-- custom css --}}
    <style>
        @media only screen and (max-width: 767px){
            #head_links {
                visibility: hidden;
            }
            .custom_search_top {
                text-align:center;
            }

            .header-ctn {
                width: 100%;
            }
        }
		
		#newsletter.section{
			border-top: 2px solid #E4E7ED;
			margin-top: 30px;
		}
        </style>

</head>

<body>
    <!-- HEADER -->
    <header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul id="head_links" class="header-links pull-left" style="margin-bottom:20px!important">
                    <li><a href="tel:6282299638812" target="_blank"><i class="fa fa-phone"></i>+62 888 0961 5182</a></li>
					<li><a href="https://web.whatsapp.com/send?phone=6282299638812" target="_blank"><i class="fa fa-whatsapp "></i> +62 888 0961 5182</a></li>
                    <li><a href="mailto:dennismichaelmanullang@gmail.com"><i class="fa fa-envelope-o"></i>dennismichaelmanullang@gmail.com</a></li>
                    <li><a class="p-3 mx-auto m-3" href="https://goo.gl/maps/UoLL4WBk49RpuRAS7" target="_blank"><i class="fa fa-map-marker"></i>Jl. Bengawan Solo I Blok A5/9 RT/RW 001/008 Bekasi </a></li>
                </ul>
                <ul class="header-links pull-right">
                    @if(Session::has('user') || session('user'))
                      <li><a style="color:white!important" href="{{route('user.history')}}">{{session()->get('user')->txtCustomerName}} </a></li>  
                      <li><a href="{{route('user.logout')}}"><i class="fa fa-user-o"></i> Logout</a></li>
                    @else
                    <li><a href="{{route('user.login')}}"><i class="fa fa-user-o"></i> Masuk</a></li>
                    
                    <li><a href="{{route('user.signup')}}"><i class="fa fa-user-o"></i> Registrasi</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('user.home')}}" class="logo">
                                <img style="width:40%!important" src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="{{route('user.search')}}" method="get">
                                <div class="custom_search_top" >
                                    <input class="input" style="border-radius: 40px 0px 0px 40px !important;" name="n" placeholder="Cari disini">
                                    <button  class="search-btn">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-xl-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div  class="dropdown">
                                <a class="dropdown-toggle" style="width:200px!important;" id="custom_shopping_cart" href="{{route('user.cart')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Keranjang Belanja</span>
                                </a>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle pull-right">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="{{Route::is('user.home') ? 'active' : ''}}"><a href="{{route('user.home')}}">Home</a></li>
                    @if(Route::is('user.search'))
                        @foreach($cat as $c)
                        <li class="{{$c->id == $a ? 'active' : ''}}"><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
                        @endforeach
                        <li class="{{$a == -1  ? 'active' : ''}}"><a href="search">Lihat Semua</a></li>
                    @else
                        @foreach($cat as $c)
                        <li ><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
                        @endforeach
                        <li ><a href="{{route('user.search')}}">Lihat Semua</a></li>
                    @endif
                    
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            @if(Route::is('user.home'))
            <div class="row">
                <!-- shop -->
                @php
                $counter=0;
              
                @endphp
				@foreach($cat as $c)
                 @php
                $counter++;
                if($counter==4)
                break;
               
                @endphp
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="img/{{$c->image}}" width="250" height="300" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>{{$c->name}}</h3>
                            <a href="search?c={{$c->id}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                @endforeach
            </div>
            @endif
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->


    @yield('content')

    <!-- /SECTION -->
    
    <!-- <div id="newsletter" class="section_new">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Berlangganan Info <strong>PRODUK KAMI</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Masukkan Email Anda" required>
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Berlangganan</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://shopee.co.id/abdrob" target="_blank"><img style="width:80%!important" src="{{asset('img/shopee.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/arifahdilah/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://web.whatsapp.com/send?phone=6282299638812" target="_blank"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <!-- /FOOTER -->


    <!-- jQuery Plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
    
    

</body>

</html>
