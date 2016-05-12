<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Onmode</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<script>
   
		<!----- JQUERY FOR SLIDING NAVIGATION --->   
		$(document).ready(function() {
		  $('a[href*=#]').each(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		    && location.hostname == this.hostname
		    && this.hash.replace(/#/,'') ) {
		      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
		      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
		       if ($target) {
		         var targetOffset = $target.offset().top;

		<!----- JQUERY CLICK FUNCTION REMOVE AND ADD CLASS "ACTIVE" + SCROLL TO THE #DIV--->   
		         $(this).click(function() {
		            $("#nav li a").removeClass("active");
		            $(this).addClass('active');
		           $('html, body').animate({scrollTop: targetOffset}, 1000);
		           return false;
		         });
		      }
		    }
		  });

		});

	</script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">Onmode</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ url('/home') }}">Blog</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
					<li>
						<a href="{{ url('/login') }}">Iniciar Session</a>
					</li>
					<li>
						<a href="{{ url('/register') }}">Registrarse</a>
					</li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							@if (Auth::user()->can_post())
							<li>
								<a href="{{ url('/new-post') }}">Agregar Post</a>
							</li>
							<li>
								<a href="{{ url('/user/'.Auth::id().'/posts') }}">Mis Posts</a>
							</li>
							@endif
							<li>
								<a href="{{ url('/user/'.Auth::id()) }}">Mi Perfil</a>
							</li>
							<li>
								<a href="{{ url('/logout') }}">Cerrar Session</a>
							</li>
						</ul>
					</li>
					@endif
				</ul>
	    </div>
	  </div>
	</nav>


	
		@if (Session::has('message'))
		<div class="flash alert-info">
			<p class="panel-body">
				{{ Session::get('message') }}
			</p>
		</div>
		@endif
		@if ($errors->any())
		<div class='flash alert-danger'>
			<ul class="panel-body">
				@foreach ( $errors->all() as $error )
				<li>
					{{ $error }}
				</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		@yield('content')
	

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>

	<script type="text/javascript">

		$(document).ready(function(){
		 
			$(window).scroll(function(){
				var barra = $(window).scrollTop();
				var posicion = barra * 0.40;
		 
				$('body').css({
					'background-position': '0 ' + posicion + 'px'
				});
			});
		 
		});
		
	</script>
</body>
</html>
