@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <table>
    <thead>
      <tr>
        <th>Id_Schedule</th>
        <th>Id_Class</th>
        <th>Hora de inicio</th>
        <th>Hora de fin</th>
        <th>Dia</th>

        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    <tbody>

    @foreach ( {{ $data['schedules'] }} as $schedule) 
      
    <tr>

      <th>{{ $schedule->id_schedule }}</th>

      <td >
        {{ $schedule->id_class }}
      </td>

      <td>
        {{ $schedule->time_start }}
      </td>

      <td>
        {{ $schedule->time_end }}
      </td>

      <td>
        {{ $schedule->day }}
      </td>


      <!--PENDIENTE CUANDO TENGA EL EDIT PREPARADO-->
      <td>
        <button class ='btn'>
          <a href="{{ URL('/schedules/update/') }}{{  }}{{ $schedule->id_schedule }}">
            Edit
        </button>
      </td>

      <!--PENDIENTE CUANDO TENGA EL DELETE PREPARADO-->
      <td>
        <form action="{{ URL('/schedules/delete/') }}{{ $schedule->id_schedule }}" method="POST">
            <input type="submit" name="delete" value="Delete" class="btn">
        </form>
      </td>
    </tr>
    @endforeach  
    </tbody>
  </table>

  <div>


<a href="{{  URL('/schedules/addSchedule') }}"><input class="button" type="button" value="Crear un horario"></a>

</div>

@endsection
