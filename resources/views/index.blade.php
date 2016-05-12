@extends('app')

@section('title')
<h3>Bienvenido</h3>
@endsection

@section('content')
<div id="slide1">
<div class="content">

<div class="container">
<div class="row">
	<div class="col-md-10 col-md-offset-1">

		<div class="jumbotron">
	    <div class="container">
	        <h1>Bienvenido a Onmode</h1>
	        <h4>Onmode es un website/blog informatico<br>  
	        se libre de compartir cualquier noticia o informacion concerniente al tema<br>  
	        en nuestro blog dedicado</h4>
	        <a href="/home" class="btn btn-primary">Ir al Blog</a>
	    </div>
		</div>

		

		<div class="section"> 
			<div class="col-md-12">
  				<div class="row">

					<div class="col-md-7">
						
						<div class="panel panel-primary">
						  	<div class="panel-heading">
						    	<h3 class="panel-title">Ultimos Posts</h3>
						  	</div>

						  	<ul class="list-group">
						  	@foreach($posts as $post)
						  	  
						  	  	<a href="{{ url('/'.$post->destacados_post->slug) }}" class="list-group-item">

						  	  	<div class="media">
						  	  	<div class="media-body">
				              		<div class="col-md-12">
										<h4 class="list-group-item-heading">{{ $post->destacados_post->title }}</h4>
						    			<h5 class="list-group-item-text">{{ str_limit($post->destacados_post->description,195) }}</h5>
									</div>
								</div>
								</div>

				              	</a>
				            
				            @endforeach
				            <div class="col-md-offset-4"><?php echo $posts->render(); ?></div>
				            </ul>

							
						</div>

					</div>

					<div class="col-md-5">
						
						<div class="panel panel-info" >
						  <div class="panel-heading">
						    <h3 class="panel-title">Ultimos Tweets</h3>
						  </div>
						  <div class="panel-body">
						    <a class="twitter-timeline" href="https://twitter.com/eliezer_arza" data-widget-id="727508199595773952">Tweets por @eliezer_arza.</a>
						  </div>
						</div>

					</div>

				</div>
			</div>
		</div>

</div> 
</div>
</div> 
		

<div id="slide2">
<div class="content" >		

			<div class="container"> 
				<div class="row">
					<div class="col-md-4"> 
					<img src="images/yo.jpeg" class="center-block img-circle img-responsive">
					</div>

					<div class="col-md-6">
					<br>
						<h1>Eliezer Arza</h1> <h3>Desarrollo de software</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
					</div>
				</div>
			 


		 <div class="section"> 
			<div class="col-md-8">
  				<div class="row">

					<div class="panel panel-default">
					  <div class="panel-body">
					    <legend>Conocimiento Tecnico</legend>

					    	PHP

						    <div class="progress progress-striped">
								<div class="progress-bar progress-bar-info" style="width: 80%"></div>
							</div>

							Sql

							<div class="progress progress-striped">
							  	<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
							</div>

							Laravel

							<div class="progress progress-striped">
							  	<div class="progress-bar progress-bar-success" style="width: 75%"></div>
							</div>

							Bootstrap

							<div class="progress progress-striped">
							  	<div class="progress-bar progress-bar-danger" style="width: 90%"></div>
							</div>

					  </div>
					</div>

				</div>
			</div>

			<div class="col-md-4">
  				<div class="row">

  					<div class="panel panel-default">
					  <div class="panel-body">
					    <legend>Conocimiento Tecnico</legend>

					    	PHP

						    <div class="progress progress-striped">
								<div class="progress-bar" style="width: 80%"></div>
							</div>

							Sql

							<div class="progress progress-striped">
							  	<div class="progress-bar" style="width: 70%"></div>
							</div>

							Laravel

							<div class="progress progress-striped">
							  	<div class="progress-bar" style="width: 75%"></div>
							</div>

							Bootstrap

							<div class="progress progress-striped">
							  	<div class="progress-bar" style="width: 90%"></div>
							</div>

					  </div>
					</div>

  				</div>
			</div>
			</div>

		</div>

		<div id="copyright"><p>Copyright &copy; 2016 | <a href="/">Onmode</a></p></div> 

</div>
</div>

	</div>
</div>

@endsection