@extends('layouts.app')
@section('content')

<div class="container-profile">
  <div class="wrapper-profile">
  <h2>Cambio de contrasena</h2>
  <form action="{{ URL('/users/password') }}" method="POST">
    <div class="input-box">
      <label for="username">Modifica la contrasena</label>
      <input type="text" id="newPassword" name="newPassword" placeholder="nueva contrasena" autocomplete="off">
        <span class="invalidFeedback">
          {{-- {{ $data['passwordError'] }} --}}
        </span>
        <span class="validFeedback">
          {{-- {{ $data['passwordSuccess'] }} --}}
        </span>
      <div class="input-box">
        <button type="submit" class="btn-profile">Actualizar</button>
      </div>
    </div>
  </form>
  </div>
</div>

@endsection