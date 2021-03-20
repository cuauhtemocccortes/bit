@extends('layout')

@section('title','Salas')

@section('content')

	{{-- <H1>@lang('About')</H1> --}}
	<div class="container">
	<div class="row">

		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/about.svg" alt="BIT">
		</div>

		<div class="col-12 col-lg-6">

			<H1 class="text-primary ">Salas{{-- @lang('Home') --}}</H1>
			<p class="lead text-secondary">Descripcion de lo quesea</p>

			<a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctanos</a>
			{{-- <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a> --}}



		</div>




	</div>
</div>

@endsection