@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <h2>Cambio de nombre de usuario</h2>
  <form action="{{ URL('/users/username') }}" method="POST">
    <div class="input-box"> 
      <label for="username">Modifica el nombre de usuario</label>
      <input type="text" id="newUsername" name="newUsername" autocomplete="off">
        <span class="invalidFeedback">
          {{-- {{ $data['usernameError'] }} --}}
        </span>
        <span class="validFeedback">
          {{-- {{ $data['usernameSuccess'] }} --}}
        </span>
      <div class="input-box">
        <button type="submit" class="btn-profile">Actualizar nombre</button>
      </div>
    </div>
  </form>
  </div>
</div>

@endsection

