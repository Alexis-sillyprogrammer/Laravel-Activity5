{{-- resources/views/libros/show.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Georgia', serif; background: #f5f0e8; color: #2c2c2c; padding: 2rem; }
        h1 { font-size: 2rem; margin-bottom: 1.5rem; border-bottom: 2px solid #8b4513; padding-bottom: .5rem; color: #5a2d0c; }
        .btn { padding: .5rem 1rem; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: .9rem; display: inline-block; }
        .btn-primary  { background: #8b4513; color: white; }
        .btn-warning  { background: #d4a017; color: white; }
        .btn-danger   { background: #c0392b; color: white; }
        .alert        { background: #d4edda; color: #155724; padding: .75rem 1rem; border-radius: 4px; margin-bottom: 1rem; border: 1px solid #c3e6cb; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.1); }
        th { background: #5a2d0c; color: white; padding: .75rem 1rem; text-align: left; }
        td { padding: .75rem 1rem; border-bottom: 1px solid #e8e0d0; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #faf6ef; }
        .actions { display: flex; gap: .5rem; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
    </style>
</head>
<body>
    <div class="top-bar">
        <h1>Biblioteca</h1>
        <a href="{{ route('libros.create') }}" class="btn btn-primary">+ Nuevo libro</a>
    </div>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($libros as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->año }}</td>
                <td>
                    <div class="actions">
                        <a href="{{ route('libros.edit', $libro) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('libros.confirmDelete', $libro) }}" class="btn btn-danger">Eliminar</a>
                    </div>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align:center; color:#999;">No hay libros registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>