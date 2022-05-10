@extends('layouts.app')
@section('content')

div class="container-login">
  <div class="wrapper-login">
    <h2>Formulario: Editar un horario</h2>

    <form
    action="{{ URL('/schedules/update/') }}{{ $data['schedule']->id_schedule }}"
    method="POST">
      <input type="number" placeholder="Id de la clase"
      name="id_class"
      value="{{ $data['schedule']->id_class }}">
      <span class="invalidFeedback">
          {{ $data['id_classError'] }}
      </span>

      <input type="time" placeholder="Hora de inicio"
      name="time_start"
      value="{{ $data['schedule']->time_start }}">
      <span class="invalidFeedback">
          {{ $data['time_startError'] }}
      </span>

      <input type="time" placeholder="Hora de fin"
      name="time_end"
      value="{{ $data['schedule']->time_end }}">
      <span class="invalidFeedback">
          {{ $data['time_endError'] }}
      </span>

      <input type="date" placeholder="Dia del horario de la clase"
      name="day"
      value="{{ $data['schedule']->day }}">
      <span class="invalidFeedback">
          {{ $data['dayError'] }}
      </span>

      <button id="submit" type="submit" value="submit">Actualizar clase</button>

    </form>

    <div>
        <a href="{{ URL('/classes/index') }}"><input type="button" value="Volver"></a>
    </div>
  </div>

</div>


@endsection