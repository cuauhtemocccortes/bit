@extends('layout')


@section('title','Contacto')


@section('content')

<div class="container">

	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

	{{-- @if($errors->any())
		@foreach($errors->all() as $error)
		<p>{{$error}} </p>
		@endforeach
	@endif --}}

		{{-- @include('partials.session-status') --}}

		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('messages.store')}} ">
			@csrf

			<H1 >{{__('Contact')}}</H1>
			<hr>

			<div class="form-goup">
				<label for="name">Nombre</label>
				<input class="form-control bg-light shadow-sm  @error('name')is-invalid @else border-0 @enderror"  id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}} </strong>
					</span>
				@enderror
				{{-- {!!$errors->first('name', '<small>:message</small><br>')!!} --}}
			</div>

			<div class="form-goup">
				<label for="email">Email</label>
				<input class="form-control bg-light shadow-sm  @error('email')is-invalid @else border-0 @enderror" id="email" type="text" name="email" placeholder="Email" value="{{old('email')}}">
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}} </strong>
					</span>
				@enderror
				{{-- {!!$errors->first('email', '<small>:message</small><br>')!!} --}}
			</div>

			<div class="form-goup">
				<label for="subject">Asunto</label>
				<input class="form-control bg-light shadow-sm  @error('subject')is-invalid @else border-0 @enderror" id="subject" name="subject" placeholder="Asunto" value="{{old('subject')}}">
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}} </strong>
					</span>
				@enderror
				{{-- {!!$errors->first('subject', '<small>:message</small><br>')!!} --}}
			</div>

			<div class="form-goup">
				<label for="content">Mensaje</label>
				<textarea class="form-control bg-light shadow-sm  @error('subject')is-invalid @else border-0 @enderror" id="content" name="content" placeholder="Mensaje">{{old('content')}}</textarea>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}} </strong>
					</span>
				@enderror
				{{-- {!!$errors->first('content', '<small>:message</small><br>')!!} --}}
			</div>

			<button class="btn btn-primary btn-lg btn-block">Enviar</button>
		</form>

		</div>
	</div>

</div>


@endsection