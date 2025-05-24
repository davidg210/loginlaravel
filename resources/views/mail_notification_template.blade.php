<body>
  <div class="container">
    <div class="header">
      <h1>Hola, {{ $user->name }}. Bienvenido a {{ config('app.name') }}!</h1>
    </div>
    <div class="message">
      <p>Gracias por registrarte. Solo falta un paso para activar tu cuenta.</p>
      <p>Haz clic en el siguiente botón para confirmar tu correo electrónico:</p>
      <p style="text-align: center;">
        <a href="{{ url('/users/active/account/'.$token) }}" class="btn">Confirmar cuenta</a>
      </p>
    </div>
    <div class="footer">
      Si no solicitaste este correo, puedes ignorarlo.<br>
      &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
    </div>
  </div>
</body>
