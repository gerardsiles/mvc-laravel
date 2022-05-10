@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Crear un nuevo administrador</h2>
    <form action="{{  URL('/admins/addAdmin') }}" method="POST">
      <input type="text" placeholder="Username" name="username">
      <span class="invalidFeedback">
        {{ $data['usernameError'] }}
      </span>

      <input type="text" placeholder="Nombre" name="name">
      <span class="invalidFeedback">
        {{ $data['nameError'] }}
      </span>

      <input type="text" placeholder="Email" name="email">
      <span class="invalidFeedback">
        {{ $data['emailError'] }}
      </span>

      <br>

      <label for="text">Tipo de usuario</label>
        <select id="user_type" name="user_type">
        <option value="admin">Admin</option>
        </select>

      <br>

      <input type="text" placeholder="Password" name="password">
      <span class="invalidFeedback">
        {{ $data['passwordError'] }}
      </span>

      <button id="submit" type="submit" value="submit">Crear administrador</button>

    </form>

    <div>
      <a href="{{ URL('/admins/menu') }}"><input type="button" value="Volver"></a>
    </div>
  </div>

</div>


@endsection