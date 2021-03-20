@extends('layout')


<!--Seccion del titulo-->
@section('title','Home')

<!--Seccion del contenido-->
@section('content')

<div class="container">
	<div class="row">

		<div class="col-12 col-lg-6">

			<H1 class="text-primary ">Página BIT{{-- @lang('Home') --}}</H1>
			<p class="lead text-secondary">Descripcion </p>


			<div class="card" style="width: 18rem;">
  				<img src="/img/home.svg" class="card-img-top" alt="...">
  				<div class="card-body">
  				  <h5 class="card-title">Congreso BIT MX</h5>
   				  <p class="card-text">     </p>
  				  <a href="https://tinyurl.com/congresobit" target="blank" class="btn btn-primary">Iniciar</a>

 			 	</div>
			</div>



			{{-- <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctanos</a> --}}
			{{-- <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a> --}}

		</div>

		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/home.svg" alt="BIT">
			<a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctanos</a>
		</div>

		<div>
			Hola
			@auth
				{{ auth()->user()->name}}
			@endauth
		</div>

	</div>
</div>





@endsection