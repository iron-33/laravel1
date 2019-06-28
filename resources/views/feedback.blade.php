@extends('layouts.app')

@section('content')
@if(Auth::user())
	<div class="container">
	
	<div class="row justify-content-md-center mt-5">
		<div class="col-5">
	<form class="form-signin" action="{{route('addfeed')}}" method='post'>
		@csrf
		
		<h1 class="h3 mb-3 font-weight-normal">Добавить отзыв</h1>

		<input type="email" name="email" class="form-control" placeholder="Email" required autofocus />
		
		<input type="text" name="name"  class="form-control" placeholder="Имя" required autofocus />
		<textarea class="form-control" name="message"></textarea>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Добавить отзыв</button>
		
	</form>
		</div>
	</div>
	<h1>отзывы</h1>
		@if($feed)
			@foreach($feed as $f)
				<div class="row mb-3 "> 
					<div class="col-3 text-left"> 
						Имя: {{$f->name}}<br>
						Емайл: {{$f->email}}<br>
						Дата: {{$f->created_at}}<br>
					</div> 
					<div class="col text-left border-bottom border-left"> 
						{{$f->message}}
					</div>
				</div>
			@endforeach
		@endif
	</div>
@else
	

	<DIV class="alert alert-danger">Для вас просмотр страницы запрещён</div>
	
	
@endif
@endsection