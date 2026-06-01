<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Libro</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Georgia', serif; background: #f5f0e8; color: #2c2c2c; padding: 2rem; }
        h1 { font-size: 1.8rem; margin-bottom: 1.5rem; color: #c0392b; }
        .card { background: white; padding: 2rem; border-radius: 8px; max-width: 480px; box-shadow: 0 2px 8px rgba(0,0,0,.1); }
        .warning { background: #fdecea; border: 1px solid #f5c6cb; border-radius: 4px; padding: 1rem; margin-bottom: 1.5rem; }
        .libro-info { margin-bottom: 1.5rem; }
        .libro-info p { margin-bottom: .4rem; }
        .libro-info strong { color: #5a2d0c; }
        .btn { padding: .6rem 1.4rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; text-decoration: none; display: inline-block; }
        .btn-danger   { background: #c0392b; color: white; }
        .btn-secondary { background: #999; color: white; margin-left: .5rem; }
    </style>
</head>
<body>
    <h1>Eliminar libro</h1>
    <div class="card">
        <div class="warning">
            ¿Estás seguro de que deseas eliminar este libro? Esta acción no se puede deshacer.
        </div>

        <div class="libro-info">
            <p><strong>Título:</strong> {{ $libro->titulo }}</p>
            <p><strong>Autor:</strong> {{ $libro->autor }}</p>
            <p><strong>Año:</strong> {{ $libro->año }}</p>
        </div>

        <form action="{{ route('libros.destroy', $libro) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
        </form>
        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</body>
</html>