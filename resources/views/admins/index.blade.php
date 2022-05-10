@extends('layouts.app')
@section('content')

<div class="container-login">
  <div class="wrapper-login">
    <div class="box" style="margin: auto; display: grid; grid-template-columns: auto auto auto auto auto auto auto; align-items: start; justify-content: space-between;">

      <div class="card" >
          <div class="card-body">
              <h5 class="card-title">Cursos</h5>
              <p class="card-text">Gestiona los cursos</p>

              <button class ='btn'>
              <a href="{{ URL('/courses/index') }}">Entrar</a>
              </button>
          </div>
      </div>

      <div class="card" >
          <div class="card-body">
              <h5 class="card-title">Profesores</h5>
              <p class="card-text">Gestiona los profesores</p>

              <button class ='btn'>
              <a href="{{ URL('/teachers/index') }}">Entrar</a>
              </button>
          </div>
      </div>

      <div class="card" >
          <div class="card-body">
              <h5 class="card-title">Horarios</h5>
              <p class="card-text">Gestiona los horarios</p>

              <button class ='btn'>
              <a href="{{ URL('/schedules/index') }}">Entrar</a>
              </button>

          </div>
      </div>

    </div>
  </div>
</div>

<div class="container-login">
  <div class="wrapper-login">
    <div class="box" style="margin: auto; display: grid; grid-template-columns: auto auto auto auto auto auto auto; align-items: start; justify-content: safe center;">
        
      <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Clases</h5>
            <p class="card-text">Gestiona las clases</p>

            <button class ='btn'>
            <a href="{{ URL('/classes/index') }}">Entrar</a>
            </button>

        </div>
      </div>          
      <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Matriculaciones</h5>
            <p class="card-text">Gestiona las matriculaciones</p>

            <button class ='btn'>
            <a href="{{ URL('/enrollments/index') }}">Entrar</a>
            </button>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection