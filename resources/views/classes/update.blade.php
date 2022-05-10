@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Editar una Clase</h2>

    <form
    action="{{ URL('/classes/update/') }}{{ $data['clase']->id_class }}"
      method="POST">
        <input type="number" placeholder="Id del estudiante"
        name="id"
        value="{{ $data['clase']->id }}">
        <span class="invalidFeedback">
            {{ $data['idError'] }}
        </span>

        <input type="number" placeholder="Id del curso"
        name="id_course"
        value="{{ $data['clase']->id_course }}">
        <span class="invalidFeedback">
            {{ $data['id_courseError'] }}
        </span>

        <input type="number" placeholder="Id del horario"
        name="id_schedule"
        value="{{ $data['clase']->id_schedule }}">
        <span class="invalidFeedback">
            {{ $data['id_scheduleError'] }}
        </span>

        <input type="text" placeholder="Nombre de la clase"
        name="name"
        value="{{ $data['clase']->name }}">
        <span class="invalidFeedback">
            <?=$data['nameError'];?>
        </span>

        <input type="text" placeholder="Color de la clase"
        name="color"
        value="{{ $data['clase']->color }}">
        <span class="invalidFeedback">
            {{ $data['colorError'] }}
        </span>

        <button id="submit" type="submit" value="submit">Actualizar clase</button>

    </form>

    <div>
      <a href="{{ URL('/classes/index') }}"><input type="button" value="Volver"></a>
    </div>
  </div>

</div>


@endsection