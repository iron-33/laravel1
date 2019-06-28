@extends('layouts.app')

@section('content')
<div class="container">	
<div class="row mt-5 justify-content-md-center ">	
	@if(Auth::user())
	
	
	
	 
	<div class="col-12">
		<h2 class="m-5">  Погода на {{$day}}, {{$date}} {{$month}} </h2>
		<div class="alert alert-warning">{{$daylight}} </div>
		<button class="btn btn-success btn-lg">{{$temp}} </button>
		
		@php $k=0;$looper=0; $drop = true; @endphp
	
		@foreach($weather as $w)
			@if($k==0)<div class="row mt-5">@endif
			
		@if($looper==0 && $drop) <div class="col"></div> @php $drop = false; @endphp @endif
		@if($looper==1 && $drop) <div class="col"></div> @php $drop = false; @endphp @endif
		@if($looper==2 && $drop) <div class="col"></div> @php $drop = false; @endphp @endif
		@if($looper==3 && $drop) <div class="col">Градус</div> @php $drop = false; @endphp @endif
		@if($looper==4 && $drop) <div class="col">Ощущается</div> @php $drop = false; @endphp @endif
		@if($looper==5 && $drop) <div class="col">Давление, мм</div> @php $drop = false; @endphp @endif
		@if($looper==6 && $drop) <div class="col">Влажность</div> @php $drop = false; @endphp @endif
		@if($looper==7 && $drop) <div class="col">Ветер</div> @php $drop = false; @endphp @endif
		@if($looper==8 && $drop) <div class="col">Вероятность осадки, %</div> @php $drop = false; @endphp @endif
		
			@if($k==0)<div class="col">ночь</div> @php $k++;  @endphp @endif
			@if($k==2)<div class="col">утро</div> @php $k++;  @endphp @endif
			@if($k==4)<div class="col">день</div> @php $k++;  @endphp @endif
			@if($k==6)<div class="col">вечер</div> @php $k++;  @endphp @endif
			
			<div class="col">{{$w}}</div>
		@php $k++;  if($k%8==0) { echo '</div><div class="row mt-3">'; $looper++; $drop = true; } @endphp
	
	
		@endforeach
	</div>
	@else
		<div class="col-6">Для вас просмотр страницы запрещён </div>
	@endif
</div>
@endsection