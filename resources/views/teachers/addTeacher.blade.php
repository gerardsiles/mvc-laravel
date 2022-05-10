@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Crear un nuevo profesor</h2>
    <form action="{{ URL('/teachers/addTeacher') }}" method="POST">
    <input type="text" placeholder="Nombre" name="name">
      <span class="invalidFeedback">
          {{-- {{ $data['nameError'] }} --}}
      </span>

      <input type="text" placeholder="Apellido" name="surname">
      <span class="invalidFeedback">
  {{--         {{ $data['surnameError'] }} --}}
      </span>

      <input type="text" placeholder="Nombre de usuario" name="username">
      <span class="invalidFeedback">
          {{-- {{ $data['usernameError'] }} --}}
      </span>

      <input type="email" placeholder="email" name="email">
      <span class="invalidFeedback">
          {{-- {{ $data['emailError'] }} --}}
      </span>

      <br>

      <label for="text">Selecciona el tipo de usuario.</label>
            <select id="user_type" name="user_type">
            <option value='teacher'>Profesor</option>
            </select>

      <br>

      <input type="number" placeholder="Telefono" name="telephone">
      <span class="invalidFeedback">
          {{-- {{ $data['phoneError'] }} --}}
      </span>

      <input type="text" placeholder="NIF" name="nif">
      <span class="invalidFeedback">
          {{-- {{ $data['nifError'] }} --}}
      </span>

      <input type="pass" placeholder="Contrasena" name="pass">
      <span class="invalidFeedback">
          {{-- {{ $data['passError'] }} --}}
      </span>

      <input type="pass" placeholder="Confirmar contrasena" name="confirmPass">
      <span class="invalidFeedback">
          {{-- {{ $data['confirmPassError'] }} --}}
      </span>

      <button id="submit" type="submit" value="submit">Crear profesor</button>
    </form>

    <div>
        <a href="{{ URL('/teachers/index') }}"><input type="button" value="Volver"></a>
    </div>

  </div>



</div>


@endsection
