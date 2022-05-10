@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Inicia sesion</h2>
    <form action="<?=URLROOT;?>/users/login" method="POST">
      <input type="text" placeholder="Nombre de usuario" name="username">
      <span class="invalidFeedback">
        {{-- {{ $data['usernameError'] }} --}}
      </span>

      <input type="password" placeholder="Contrasena" name="password">
      <span class="invalidFeedback">
{{--         {{ $data['passwordError'] }} --}}
      </span>

      <button id="submit" type="submit" value="submit">Iniciar sesion</button>
      <p class="options">Todavia no tienes una cuenta? <a href="<?=URLROOT;?>/users/register">registrate aqui</p>
    </form>
  </div>

</div>

@endsection