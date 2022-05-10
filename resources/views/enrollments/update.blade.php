@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Editar una matriculacion</h2>

    <form
    action="{{ URL('/enrollments/update/') }}{{ $data['enrollment']->id_enrollment }}"
      method="POST">
        <input type="number" placeholder="Id del estudiante"
        name="id"
        value="{{ $data['enrollment']->id }}">
        <span class="invalidFeedback">
          {{ $data['idError'] }}
        </span>

        <input type="number" placeholder="Id del curso"
        name="id_course"
        value="{{ $data['enrollment']->id_course }}">
        <span class="invalidFeedback">
          {{ $data['id_courseError'] }}
        </span>


        <br>

        <label for="number">Selecciona si está activo o no.</label>
          <select id="status"
          name="status"
          value="{{ $data['enrollment']->status }}">
          <option value=0>No activo</option>
          <option value=1>Activo</option>
          </select>

        <br>


        <button id="submit" type="submit" value="submit">Actualizar matriculacion</button>


    </form>

    <div>
      <a href="{{ URL('/enrollments/index') }}"><input type="button" value="Volver"></a>
    </div>
  </div>

</div>

@endsection