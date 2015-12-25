@extends('basic')

@section('main_body')
	<h1 class="main_heading"> Codes </h1>
	@foreach($articles as $article)
		<div class="single_user_div">
				<h2>
					 <a href= "/user_codes/{{$article->id}}" >	{{$article->id}}	</a>
					 <a href= "{{action('ArticlesController@show',[$article->id])}}" >	{{$article->id}}	</a>
					 <a href= "{{url('/user_codes',$article->id)}}" >	{{$article->id}}	</a>
				</h2>
				<p> <b>Title: </b> {{ $article->title }}  </p>
				<p> <i><b>Created at:</b> {{ $article->created_at }} </i></p>
				<p> <i><b>Last Update Done At:</b> {{ $article->updated_at }} </i></p>
			</div>
		</div>
	@endforeach
@stop