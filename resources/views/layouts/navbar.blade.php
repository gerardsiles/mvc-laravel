<nav class="top-nav">
    <ul>
      <li>
        <a href="{{ URL('/') }}">Home</a>
      </li>
      <li>
        <a href="{{ URL('/admins/index') }}">Administracion</a>
      </li>
      <li>
        <a href="{{ URL('/users/schedule') }}">Horarios</a>          
      </li>
      <li>
        <a href="{{ URL('/users/index') }}">Perfil</a>
      </li>
      <li class="btn-login">
        <a href="{{ URL('/users/login') }}">Login</a>
      </li>
    </ul>
</nav>