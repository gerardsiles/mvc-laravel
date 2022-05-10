@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <table>
    <thead >
      <tr>
        <th>Id_Course</th>
        <th>Name</th>
        <th>Description</th>
        <th>Date_start</th>
        <th>Date_end</th>
        <th>Active</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    <tbody>
      @foreach ( $data['courses'] as $course)
      <tr>
        <th>{{ $course->id_course }}</th>

        <td >
            {{ $course->name }}
        </td>

        <td>
            {{ $course->description }}
        </td>

        <td>
            {{ $course->date_start }}
        </td>

        <td>
            {{ $course->date_end }}
        </td>

        <td>
            {{ $course->active }}
        </td>

        <td>
        <!--PENDIENTE CUANDO TENGA EL EDIT PREPARADO-->

            <button class ='btn'>
            <a href="{{ URL('/courses/update/') }}{{ $course->id_course }}">
                Edit
            </button>
        </td>

        <!--PENDIENTE CUANDO TENGA EL DELETE PREPARADO-->
        <td>
                <form action="{{ URL('/courses/delete/') }}{{ $course->id_course }}" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn">
                </form>
        </td>

      @endforeach
      </tr>
    </tbody>
  </table>

  <div>

<a href="{{ URL('/courses/addCourse') }}"><input class="button" type="button" value="Crear un curso"></a>

</div>
</div>

@endsection