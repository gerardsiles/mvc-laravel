@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Registrate al campus</h2>
    <form action="{{ URL('/users/register') }}" method="POST">
        <input type="text" placeholder="Nombre" name="name">
        <span class="invalidFeedback">
            {{-- {{ $data['nameError'] }} --}}
        </span>

        <input type="text" placeholder="Apellido" name="surname">
        <span class="invalidFeedback">
            {{-- {{ $data['surnameError'] }} --}}
        </span>

        <input type="text" placeholder="Nombre de usuario" name="username">
        <span class="invalidFeedback">
            {{-- {{ $data['usernameError'] }} --}}
        </span>

        <input type="email" placeholder="email" name="email">
        <span class="invalidFeedback">
{{--             {{ $data['emailError'] }} --}}
        </span>

        <input type="number" placeholder="Telefono" name="telephone">
        <span class="invalidFeedback">
            {{-- {{ $data['phoneError'] }} --}}
        </span>

        <input type="text" placeholder="NIF" name="nif">
        <span class="invalidFeedback">
            {{-- {{ $data['nifError'] }} --}}
        </span>

        <input type="password" placeholder="Contrasena" name="password">
        <span class="invalidFeedback">
            {{-- {{ $data['passwordError'] }} --}}
        </span>

        <input type="password" placeholder="Confirmar contrasena" name="confirmPassword">
        <span class="invalidFeedback">
            {{-- {{ $data['confirmPasswordError'] }} --}}
        </span>

        <button id="submit" type="submit" value="submit">Registrarse</button>
        <p class="options">tienes una cuenta? <a href="<?=URLROOT?>/users/login">inicia sesion aqui</p>
      </form>
  </div>



</div>

@endsection
