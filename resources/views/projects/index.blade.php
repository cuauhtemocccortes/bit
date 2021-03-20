@extends('layout')


@section('title','Portafolio')


@section('content')

<div class="container">

	<div class="d-flex justify-content-between aling-items-center mb-3">

		<H1 class="mb-0" >@lang('Portafolio')</H1>


		@auth

			<a class="btn btn-primary"
			href="{{route('projects.create')}} ">
				Crear proyecto
			</a>

		@endauth

	</div>

		<p class="lead text-secondary">parrafo en donde se puede poner alguna descripcion</p>

	<hr>
	<ul class="list-group">

		@forelse ($projects as $project)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between aling-items-center"
				href="{{route('projects.show',$project)}} ">

				<span class=" font-weight-bold">
					{{$project->title}}
				</span>

				<span class="text-black-50">
					{{$project->created_at->format('d/m/Y')}}
				</span>

				</a>

				{{-- <br></rp><small>{{ $portafolioItem->description }} <br>{{$portafolioItem->created_at->format('Y-m-d')}} {{$portafolioItem->updated_at->diffForHumans()}} </small> --}}

			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay proyectos para mostrar
			</li>
		@endforelse

		{{$projects->links()}}

	</ul>

</div>

@endsection