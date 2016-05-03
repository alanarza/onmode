@extends('app')

@section('title')
Edit Post
@endsection

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Editar Post</h2>
				
			</div>
			<div class="panel-body">

				<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
				<script type="text/javascript">
					tinymce.init({
						selector : "textarea",
						plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
						toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
					}); 
				</script>

				<form method="post" action='{{ url("/update") }}'>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="post_id" value="{{ $post->id }}{{ old('post_id') }}">
					<div class="form-group">
						<input required="required" placeholder="Titulo del post" type="text" name = "title" class="form-control" value="@if(!old('title')){{$post->title}}@endif{{ old('title') }}"/>
					</div>
					<div class="form-group">
						<textarea name='body'class="form-control">
							@if(!old('body'))
							{!! $post->body !!}
							@endif
							{!! old('body') !!}
						</textarea>
					</div>
					@if($post->active == '1')
					<input type="submit" name='publish' class="btn btn-success" value = "Actualizar"/>
					@else
					<input type="submit" name='publish' class="btn btn-success" value = "Publicar"/>
					@endif
					<input type="submit" name='save' class="btn btn-default" value = "Guardar Borrador" />
					<a href="{{  url('delete/'.$post->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Borrar</a>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
