@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
  <table>
    <thead>
    <tr>
      <th>Id_User_Admin</th>
      <th>UserName</th>
      <th>name</th>
      <th>Email</th>
      <th>Uer_Type</th>
      <th>Password</th>

      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>

    <tbody>

    @foreach ( {{ $data['admins'] }} as $admin )
    <tr>

      <th>{{ $admin->id_user_admin }}</th>

      <td >
        {{ $admin->username }}
      </td>

      <td>
        {{ $admin->name }}
      </td>

      <td>
        {{ $admin->email }}
      </td>

      <td>
        {{ $admin->user_type }}
      </td>

      <td>
        {{ $admin->password }}
      </td>

      <td>
      <!--PENDIENTE CUANDO TENGA EL EDIT PREPARADO-->

        <button class ='btn'>
        <a href="{{ URL('/admins/update/') }}{{ $admin->id_user_admin }}">
          Edit
        </button>
      </td>

      <!--PENDIENTE CUANDO TENGA EL DELETE PREPARADO-->
      <td>
        <form action="{{ URL('/admins/delete/') }}{{ $admin->id_user_admin }}" method="POST">
          <input type="submit" name="delete" value="Delete" class="btn">
        </form>
      </td>

    @endforeach

      </tr>
    </tbody>
  </table>

  <div>
    <a href="{{ URL('/admins/addAdmin') }}"><input type="button" value="Crear un user_admin"></a>
  </div>
  
</div>


@endsection