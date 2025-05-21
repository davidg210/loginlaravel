<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: #fff;
      padding: 2.5rem;
      border-radius: 1.5rem;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid #ccc;
      border-radius: 0.75rem;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      border-color: #667eea;
      outline: none;
    }

    .btn-login {
      width: 100%;
      padding: 0.9rem;
      background: #667eea;
      border: none;
      border-radius: 0.75rem;
      color: white;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-login:hover {
      background: #5a67d8;
    }

    .extra {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .extra a {
      color: #667eea;
      text-decoration: none;
    }

    .extra a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
    
  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="/login" method="POST">
        @csrf
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" placeholder="tucorreo@example.com" required />
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="********" required />
      </div>
      <button type="submit" class="btn-login">Entrar</button>
      <div class="extra">
        ¿No tienes cuenta? <a href="#">Regístrate</a>
      </div>
    </form>
  </div>
</body>
</html>
