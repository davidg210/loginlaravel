<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Blog</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f0f4f8, #ffffff);
      margin: 0;
      padding: 0;
    }

    .form-container {
      background-color: #ffffff;
      max-width: 600px;
      margin: 80px auto;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #2c3e50;
      font-size: 28px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #34495e;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 20px;
      border: 1px solid #ced4da;
      border-radius: 10px;
      font-size: 16px;
      background-color: #fefefe;
      transition: border 0.3s ease;
    }

    input[type="text"]:focus,
    textarea:focus {
      border-color: #3498db;
      outline: none;
    }

    button {
      background-color: #3498db;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #2c80b4;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Crear Blog</h1>
    <form action="{{ route('posts.store') }}" method="POST">
      @csrf
      <label for="title">Título:</label>
      <input type="text" id="title" name="title" required>

      <label for="content">Contenido:</label>
      <textarea id="content" name="content" rows="6" required></textarea>

      <button type="submit">Guardar</button>
    </form>
  </div>
</body>
</html>
