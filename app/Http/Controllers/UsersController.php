<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function renderIndex() {
    return view('\users\index');
  }

  public function renderLogin() {
    return view('\users\login');
  }

  public function login() {
    /* login */
  }

  public function renderEmail() {
    return view('\users\email');
  }

  public function editEmail() {
    /* editar email usuario */
  }

  public function renderPassword() {
    return view('\users\password');
  }

  public function editPassword() {
    /* Editar el password de usuario */
  }

  public function renderRegister() {
    return view('\users\register');
  }

  public function register()
  {
    $data = [
        'name' => '',
        'surname' => '',
        'username' => '',
        'email' => '',
        'telephone' => '',
        'nif' => '',
        'password' => '',
        'confirmPassword' => '',
        'nameError' => '',
        'surnameError' => '',
        'usernameError' => '',
        'emailError' => '',
        'phoneError' => '',
        'nifError' => '',
        'passwordError' => '',
        'confirmPasswordError' => '',
    ];

      /* Funcion para el formulario de registro */
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Sanitize POST data
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          $data = [
              'name' => trim($_POST['name']),
              'surname' => trim($_POST['surname']),
              'username' => trim($_POST['username']),
              'email' => trim($_POST['email']),
              'telephone' => trim($_POST['telephone']),
              'nif' => trim($_POST['nif']),
              'password' => trim($_POST['password']),
              'confirmPassword' => trim($_POST['confirmPassword']),
              'nameError' => '',
              'surnameError' => '',
              'usernameError' => '',
              'emailError' => '',
              'phoneError' => '',
              'nifError' => '',
              'passwordError' => '',
              'confirmPasswordError' => '',
          ];

          $nameValidation = "/^[a-zA-Z]*$/";
          $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

          //Validar inputs del usuario
          if (empty($data['name'])) {
              $data['nameError'] = 'Introduzca su nombre';
          }

          if (empty($data['surname'])) {
              $data['surnameError'] = 'Introduzca su apellido';
          }

          if (empty($data['username'])) {
              $data['usernameError'] = 'Introduzca un usuario';
          } elseif (!preg_match($nameValidation, $data['username'])) {
              $data['usernameError'] = 'El usuario solo puede tener letras';
          } else if ($this->userModel->findUserByName($data['username'])) {
              $data['usernameError'] = 'Este nombre de usuario ya existe';
          }

          if (empty($data['email'])) {
              $data['emailError'] = 'introduzca su email';
          } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
              $data['emailError'] = 'introduce el formato correcto';
          } else {
              //Comprobar si el email existe
              if ($this->userModel->findUserByEmail($data['email'])) {
                  $data['emailError'] = 'este email ya existe';
              }
          }

          if (empty($data['telephone'])) {
              $data['phoneError'] = 'Introduzca su telefono de contacto';
          }

          if (empty($data['nif'])) {
              $data['nifError'] = 'Introduzca su DNI o pasaporte';
          }

          if (empty($data['password'])) {
              $data['passwordError'] = 'Introduzca una contrasena';
          } elseif (strlen($data['password']) < 6) {
              $data['passwordError'] = 'La contrasena debe ser minimo de 8 caracteres';
          } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'La contrasena debe tener como minimo un valor numerico';
          }

          if (empty($data['confirmPassword'])) {
              $data['confirmPasswordError'] = 'Introduzca la contrasena';
          } else {
              if ($data['password'] != $data['confirmPassword']) {
                  $data['confirmPasswordError'] = 'Las contrasenas no son iguales';
              }
          }

          // antes de crear el usuario, comprobar que no hay errores
          if (empty($data['nameError']) && empty($data['surnameError']) && empty($data['usernameError'])
              && empty($data['emailError']) && empty($data['phoneError']) && empty($data['nifError'])
              && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

              // Hash contrasena
              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              //registrar al usuario con el modelo
              if ($this->userModel->register($data)) {
                  //Redirigir al login
                  header('location: ' . env('APP_URL') . '/users/login');
              } else {
                  die('Algo ha ido mal, vuelvelo a intentar mas tarde');
              }
          }
      }
      $this->view('users/register', $data);
  }


  public function renderSchedule() {
    return view('\users\schedule');
  }

  public function renderUsername() {
    return view('\users\username');
  }

  public function editUsername() {
    /* Editar nombre de usuario */
  }

}
