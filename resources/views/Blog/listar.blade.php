<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lista de Blogs</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f1f5f9;
      margin: 0;
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #2d3748;
      font-size: 32px;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    thead {
      background-color: #e2e8f0;
    }

    th, td {
      padding: 16px 20px;
      text-align: left;
      border-bottom: 1px solid #cbd5e0;
      font-size: 15px;
    }

    th {
      color: #1a202c;
      font-weight: 600;
    }

    td {
      color: #2d3748;
      vertical-align: top;
    }

    tr:hover {
      background-color: #f0faff;
    }

    a.action-link {
      text-decoration: none;
      color: #fff;
      background-color: #3182ce;
      padding: 8px 14px;
      border-radius: 6px;
      font-weight: 500;
      font-size: 14px;
      margin-right: 8px;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    a.action-link:hover {
      background-color: #2b6cb0;
    }

    a.delete-link {
      background-color: #e53e3e;
    }

    a.delete-link:hover {
      background-color: #c53030;
    }

    .create-button {
      text-align: center;
      margin-top: 40px;
    }

    .create-button a {
      text-decoration: none;
      background-color: #38a169;
      color: white;
      padding: 14px 28px;
      border-radius: 10px;
      font-size: 17px;
      font-weight: 600;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    .create-button a:hover {
      background-color: #2f855a;
    }
  </style>
</head>
<body>
  <h1>Lista de Blogs</h1>

  <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Contenido</th>
        <th>Usuario</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($blogs as $blog)
        <tr>
          <td>{{ $blog->title }}</td>
          <td>{{ $blog->content }}</td>
          <td>{{ $blog->user->name }}</td>
          <td>
            <a href="/posts/eliminar/{{ $blog->id }}" rel="noopener" class="action-link delete-link">🗑️ Eliminar</a>
          </td>
          <td>
            <a href="/posts/{{ $blog->id }}/edit" rel="noopener" class="action-link">✏️ Editar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="create-button">
    <a href="{{ route('posts.create') }}">➕ Crear nuevo</a>
  </div>
</body>
</html>

