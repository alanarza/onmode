@extends('app')

@section('title')
<h3>Ultimos Posts</h3>
@endsection

@section('content')

@if ( !$posts->count() )
There is no post till now. Login and write a new post now!!!
@else
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
        <div class="panel-body">
            @foreach( $posts as $post )
            <div class="list-group">
                <div class="list-group-item">
                    <h3><b><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
                        @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
                            @if($post->active == '1')
                            <a href="{{ url('edit/'.$post->slug)}}" class="btn btn-primary btn-sm" style="float: right">Editar Post</a>
                            @else
                            <a href="{{ url('edit/'.$post->slug)}}" class="btn btn-primary btn-sm" style="float: right">Editar Borrador</a>
                            @endif
                        @endif
                    </b></h3>
                    <h6>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></h6>
                    
                </div>
                <div class="list-group-item">
                    <article>
                        {!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Ver mas</a>') !!}
                    </article>
                </div>
            </div>
            @endforeach
            {!! $posts->render() !!}
        </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> &nbsp;&nbsp; Temas Destacados</h3>
          </div>
          
            <ul class="list-group">
              <li class="list-group-item">
                <span class="badge">14</span>
                Nueva pc master race
              </li>
              <li class="list-group-item">
                <span class="badge">2</span>
                Samsung s200
              </li>
              <li class="list-group-item">
                <span class="badge">1</span>
                consolas
              </li>
            </ul>
          
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp; Usuarios Destacados</h3>
          </div>
          
            <ul class="list-group">
              <li class="list-group-item">
                Fernando Martin Valde
              </li>
              <li class="list-group-item">
                Omar Maruca
              </li>
              <li class="list-group-item">
                Julian oscar gelvez
              </li>
            </ul>
          
        </div>
    </div>
</div>
@endif

@endsection
