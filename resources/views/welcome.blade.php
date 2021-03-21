<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        <title>Test</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
		@yield('style')
 

    </head>
	
	<body>

		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="i{{route('home')}}">TestCode</a>
			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" >
			                <li class=" smooth-menu "></li>
<li class="smooth-menku"><a href="{{ route('employee_list') }}">Employee List</a></li>
<li class="smooth-menku"><a href="{{ route('employee') }}">Employee</a></li>


@if(Auth::user()=='')
<li class="smooth-menku"><a href="{{ route('login') }}">Login</a></li>

<li class="smooth-meknu"><a href="{{ route('register') }}">Register</a></li>
			                     
@else
<li class="smooth-menku"><a href="{{ route('logout') }}">Logout</a></li>

<li class="smooth-meknu"><a >{{ Auth::user()->name }}</a></li>

@endif
			                    
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		{{-- <!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> browny <br> star <span>.</span>   </h2>
							<p>ui/ux designer and web developer</p>
							<a href="assets/download/browney.txt" download>download resume</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end --> --}}

@yield('content')



		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
			
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		<!-- Include all js compiled plugins (below), or include individual files as needed -->
		<script src="{{ asset('assets/js/jquery.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('assets/js/bootsnav.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
		<script src="{{ asset('assets/js/progressbar.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="{{ asset('assets/js/custom.js')}}"></script>
	
    </body>
	
</html>