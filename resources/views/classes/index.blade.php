@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <table>
  <thead>
    <tr>
      <th>Id_Class</th>
      <th>Id_Teacher</th>
      <th>Id_Course</th>
      <th>Id_Schedule</th>
      <th>Nombre</th>
      <th>Color</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>

  <tbody>

    @foreach ( {{ $data['classes'] }} as $clase )
    <tr>

      <th>{{ $clase->id_class }}</th>

      <td >
          {{ $clase->id }}
      </td>

      <td>
          {{ $clase->id_course }}
      </td>

      <td>
          {{ $clase->id_schedule }}
      </td>

      <td>
          {{ $clase->name }}
      </td>

      <td>
        {{ $clase->color }}
      </td>


      <!--PENDIENTE CUANDO TENGA EL EDIT PREPARADO-->
      <td>
          <button class ='btn'>
          <a href="{{ URL('/classes/update/') }}{{ $clase->id_class }}">
              Edit
          </button>
      </td>

      <!--PENDIENTE CUANDO TENGA EL DELETE PREPARADO-->
      <td>
        <form action="{{ URL('/classes/delete/') }}{{ $clase->id_class }}" method="POST">
            <input type="submit" name="delete" value="Delete" class="btn">
        </form>
      </td>
  @endforeach


    </tr>
  </tbody>
</table>

  <div>
    <a href="{{ URL('/classes/addClass') }}"><input class="button" type="button" value="Crear una clase"></a>
  </div>
</div>

@endsection