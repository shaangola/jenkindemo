<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Insurance</title>
      <!-- Bootstrap -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
      <!-- FontAwesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontello.css') }}">
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
      <!-- owl-carousel -->
      <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
      <!-- Style CSS -->
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->		
   </head>
   <body>
      @include('includes.header')
      
      <!-- .hero-slider -->
      @yield('content')
      @include('includes.footer')
      <!-- /.footer -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/menumaker.js') }}" type="text/javascript"></script>
      <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/sticky-header.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/multiple-carousel.js') }}"></script>
     <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	  <script type="text/javascript">
	  $(function(){

var url = location.href, 
	urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
	// now grab every link from the navigation
   $('.menu li').removeClass('active');
   console.log(url);
	$('.menu a').each(function(){
		// and test its normalized href against the url pathname regexp
		if(urlRegExp.test(this.href.replace(/\/$/,''))){
			$(this).parent('li').addClass('active');
		}
	});

});
//# sourceurl=djt.library.js
</script>
   </body>
</html>