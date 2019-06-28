@extends('layouts.app')

@section('content')
@if(Auth::user())

<style>
.starter-template {
    padding: 3rem 1.5rem;
    text-align: center;
}
body {
    padding-top: 5rem;
}
</style>
<main role="main" class="container">

  <div class="starter-template">
    <h1>Хочешь погоду для начала?</h1>
    <p class="lead">Надо нажать в меню и перейти на страницу<br>и если получится то ты узнаешь</p>
  </div>

</main>
	
	
@else
<style>
	body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
	<form class="form-signin" action="{{route('login')}}" method='post'>
		@csrf
		
		<h1 class="h3 mb-3 font-weight-normal">Вход</h1>
		<label for="loginEmail" class="sr-only">Email address</label>
		<input type="email" name="email" id="loginEmail" class="form-control" placeholder="Email" required autofocus />
		<label for="loginPass" class="sr-only">Password</label>
		<input type="password" name="password" id="loginPass" class="form-control" placeholder="Пароль" required />

		<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
		
	</form>
	 или
	  <form class="form-signin" action="{{route('register')}}" method='post'>
		  @csrf
		
		<h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
		<label for="regName" class="sr-only">Имя</label>
		<input type="text" name="name" id="regName" class="form-control" placeholder="Имя" required  />
		<label for="regFamilia" class="sr-only">Фамилия</label>
		<input type="text" name="familia" id="regFamilia" class="form-control" placeholder="Фамилия" required   />
		<label for="regEmail" class="sr-only">Email</label>
		<input type="email" name="email" id="regEmail" class="form-control" placeholder="Email" required  />
		<label for="regSex" class="sr-only">Пол</label>
		<select name="sex" id="regSex" class="form-control" >
		 <option value="m"> Муж. </option>
		 <option value="w"> Жен. </option>
		</select>
		<label for="regDate" class="sr-only">Дата рождения</label>
		<input type="date" id="regDate" name="birthday" class="form-control" placeholder="Дата" required  />
		<label for="regPass" class="sr-only">Пароль</label>
		<input type="text" name="password" id="regPass" class="form-control" placeholder="Пароль" required  />
		<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

	</form>
@endif
@endsection
