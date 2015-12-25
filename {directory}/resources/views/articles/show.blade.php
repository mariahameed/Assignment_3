@extends('basic')

@section('main_body')
<div class="single_user_div">
	<h1 style="text-align:center"> {{ $articles->title }} </h1>
	<p class="code_para"> {{ $articles->code }} </p>
	<p class="desc_para"> {{ $articles->description }} </p>
	<p> <i>{{ $articles->published_at }} </i>	</p>

</div>
@stop