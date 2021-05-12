<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Arifah Dilah</title>

    <link rel="shortcut icon" href="<?php echo e(asset('img/logo.png')); ?>" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/slick-theme.css')); ?>" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style2.css')); ?>" />
    
    <!-- JQuery and Validator Plugins -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <style>
        @media  only screen and (max-width: 767px){
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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                    <?php if(Session::has('user') || session('user')): ?>
                      <li><a style="color:white!important" href="<?php echo e(route('user.history')); ?>"><?php echo e(session()->get('user')->txtCustomerName); ?> </a></li>  
                      <li><a href="<?php echo e(route('user.logout')); ?>"><i class="fa fa-user-o"></i> Logout</a></li>
                    <?php else: ?>
                    <li><a href="<?php echo e(route('user.login')); ?>"><i class="fa fa-user-o"></i> Masuk</a></li>
                    
                    <li><a href="<?php echo e(route('user.signup')); ?>"><i class="fa fa-user-o"></i> Registrasi</a></li>
                    <?php endif; ?>
                    
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
                            <a href="<?php echo e(route('user.home')); ?>" class="logo">
                                <img style="width:40%!important" src="<?php echo e(asset('img/logo.png')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="<?php echo e(route('user.search')); ?>" method="get">
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
                                <a class="dropdown-toggle" style="width:200px!important;" id="custom_shopping_cart" href="<?php echo e(route('user.cart')); ?>">
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
                    <li class="<?php echo e(Route::is('user.home') ? 'active' : ''); ?>"><a href="<?php echo e(route('user.home')); ?>">Home</a></li>
                    <?php if(Route::is('user.search')): ?>
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($c->id == $a ? 'active' : ''); ?>"><a href="<?php echo e(route('user.search.cat',['id'=>$c->id])); ?>" ><?php echo e($c->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($a == -1  ? 'active' : ''); ?>"><a href="search">Lihat Semua</a></li>
                    <?php else: ?>
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li ><a href="<?php echo e(route('user.search.cat',['id'=>$c->id])); ?>" ><?php echo e($c->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li ><a href="<?php echo e(route('user.search')); ?>">Lihat Semua</a></li>
                    <?php endif; ?>
                    
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
            <?php if(Route::is('user.home')): ?>
            <div class="row">
                <!-- shop -->
                <?php
                $counter=0;
              
                ?>
				<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php
                $counter++;
                if($counter==4)
                break;
               
                ?>
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="img/<?php echo e($c->image); ?>" width="250" height="300" alt="">
                        </div>
                        <div class="shop-body">
                            <h3><?php echo e($c->name); ?></h3>
                            <a href="search?c=<?php echo e($c->id); ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->


    <?php echo $__env->yieldContent('content'); ?>

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
                                <a href="https://shopee.co.id/abdrob" target="_blank"><img style="width:80%!important" src="<?php echo e(asset('img/shopee.png')); ?>" alt=""></a>
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
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/lib/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dist/jquery.validate.js')); ?>"></script>
    
    

</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/storeLayout.blade.php ENDPATH**/ ?>