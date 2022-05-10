@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Editar un profesor</h2>

    <form
    action="{{ URL('/teachers/update/') }}{{ $data['teacher']->id }}"
      method="POST">
        <input type="text" placeholder="Nombre"
        name="name"
        value="{{ $data['teacher']->name }}">
        <span class="invalidFeedback">
          {{ $data['nameError'] }}
        </span>

        <input type="text" placeholder="Apellido"
        name="surname"
        value="{{ $data['teacher']->surname }}">
        <span class="invalidFeedback">
          {{ $data['surnameError'] }}
        </span>

        <input type="text" placeholder="Username"
        name="username"
        value="{{ $data['teacher']->username }}">
        <span class="invalidFeedback">
            {{ $data['usernameError'] }}
        </span>
        
        <input type="text" placeholder="Email"
        name="email"
        value="{{ $data['teacher']->email }}">
        <span class="invalidFeedback">
            {{ $data['emailError'] }}
        </span>

        <input type="text" placeholder="Telefono"
        name="telephone"
        value="{{ $data['teacher']->telephone }}">
        <span class="invalidFeedback">
            {{ $data['phoneError'] }}
        </span>

        <input type="text" placeholder="NIF"
        name="nif"
        value="{{ $data['teacher']->nif }}">
        <span class="invalidFeedback">
            {{ $data['nifError'] }}
        </span>

        <input type="text" placeholder="Password"
        name="pass"
        value="{{ $data['teacher']->pass }}">
        <span class="invalidFeedback">
            {{ $data['passError'] }}
        </span>

        <input type="text" placeholder="Confirmar password"
        name="confirmPass"
        value="">
        <span class="invalidFeedback">
            {{ $data['confirmPassError'] }}
        </span>

        <br>

        <label for="text">Tipo de usuario</label>
              <select id="user_type" name="user_type">
              <option value="teacher">Profesor</option>
              </select>

        <br>


        <button id="submit" type="submit" value="submit">Actualizar profesor</button>


    </form>

    <div>
      <a href="{{ URL('/courses/index') }}"><input type="button" value="Volver"></a>
    </div>
  </div>

</div>


@endsection
