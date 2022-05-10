@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <table>
    <thead>
      <tr>
        <th>Id_Teacher</th>
        <th>Username</th>
        <th>Pass</th>
        <th>Email</th>
        <th>User_type</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Nif</th>
        
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>

    <tbody>
      @foreach ( {{ $data['teachers'] }} as $teacher )
      <tr>

        <th>{{ $teacher->id }}</th>

        <td >
            {{ $teacher->username }}
        </td>

        <td>
            {{ $teacher->pass }}
        </td>

        <td>
            {{ $teacher->email }}
        </td>

        <td>
            {{ $teacher->user_type }} 
        </td>

        <td>
            {{ $teacher->name }}
        </td>

        <td>
            {{ $teacher->surname }}
        </td>

        <td>
            {{ $teacher->nif }}
        </td>

        <td>
            {{ $teacher->surname }}
        </td>

        <td>
        <!--PENDIENTE CUANDO TENGA EL EDIT PREPARADO-->

            <button class ='btn'>
            <a href="{{ URL('/teachers/update/') }}{{ $teacher->id }}">
                Edit
            </button>
        </td>

        <!--PENDIENTE CUANDO TENGA EL DELETE PREPARADO-->
        <td>
                <form action="{{ URL('/teachers/delete/')}}{{ $teacher->id }}" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn">
                </form>
        </td>

      @endforeach

      </tr>
    </tbody>
  </table>

  <div>

<a href="{{ url('/teachers/addTeacher') }}"><input class="button" type="button" value="Crear un profesor"></a>

</div>
</div>


@endsection
