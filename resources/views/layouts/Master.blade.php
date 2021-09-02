<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title >  Moschino | Minimalist Free HTML Portfolio by WowThemes.net </title>
<link rel="stylesheet" href="{{asset('blog-assets/css/woocommerce-layout.css')}}" type='text/css' media='all'/>
<link rel="stylesheet" href="{{asset('blog-assets/css/woocommerce-smallscreen.css')}}" type='text/css' media='only screen and (max-width: 768px)'/>
<link rel="stylesheet" href="{{asset('blog-assets/css/woocommerce.css')}}" type='text/css' media='all'/>
<link rel="stylesheet" href="{{asset('blog-assets/css/font-awesome.min.css')}}" type='text/css' media='all'/>
<link rel="stylesheet" href="{{asset('blog-assets/css/style.css')}}" type='text/css' media='all'/>
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel="stylesheet" href="{{asset('blog-assets/css/easy-responsive-shortcodes.css')}}" type='text/css' media='all'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.html" rel="home">Moschino</a></h1>
			<h2 class="site-description">Minimalist Portfolio HTML Template</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="elements.html">Elements</a></li>
				<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="portfolio-item.html">Portfolio Item</a></li>
					<li><a href="blog-single.html">Blog Article</a></li>
					<li><a href="shop-single.html">Shop Item</a></li>
					<li><a href="portfolio-category.html">Portfolio Category</a></li>
				</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
                @if(isset(Auth::user()->name))
        	<li><a href="{{ route('signout')}}">Loguot</a></li>
    @endif
    </ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
        @yield('content')
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
			 <a target="blank" href="https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net</a>
		</div>
	</div>
@yield('footer_scripts')
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
   {{-- <script src="{{ asset('blog-assets/js/jquery.js')}}"></script> --}}
   <script src="{{ asset('blog-assets/js/plugins.js')}}"></script>
   <script src="{{ asset('blog-assets/js/scripts.js')}}"></script>
   <script src="{{ asset('blog-assets/js/masonry.pkgd.min.js')}}"></script>
</body>
</html>
