@extends('layouts.app')
@section('content')

<div class="container-login">
	<div class="wrapper-login">
			<h2>Formulario: Editar un administrador</h2>

			<form
			action="<?=URLROOT;?>/admins/update/<?=$data['admin']->id_user_admin?>"
			 method="POST">
					<input type="text" placeholder="Username"
					name="username"
					value="<?php echo $data['admin']->username ?>">
					<span class="invalidFeedback">
							<?=$data['usernameError'];?>
					</span>

					<input type="text" placeholder="Name"
					name="name"
					value="<?php echo $data['admin']->name ?>">
					<span class="invalidFeedback">
							<?=$data['nameError'];?>
					</span>

					<input type="text" placeholder="Email"
					name="email"
					value="<?php echo $data['admin']->email ?>">
					<span class="invalidFeedback">
							<?=$data['emailError'];?>
					</span>

					<br>

					<label for="text">Tipo de usuario</label>
							<select id="user_type" name="user_type">
							<option value="admin">Admin</option>
							</select>

					<br>

					<input type="text" placeholder="Password"
					name="password"
					value="<?php echo $data['admin']->password ?>">
					<span class="invalidFeedback">
							<?=$data['passwordError'];?>
					</span>


					<button id="submit" type="submit" value="submit">Actualizar admin</button>


			</form>

			<div>
					<a href="{{ URL('/admins/menu') }}"><input type="button" value="Volver"></a>
			</div>
	</div>

</div>

@endsection