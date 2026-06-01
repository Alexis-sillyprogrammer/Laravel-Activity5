<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Georgia', serif; background: #f5f0e8; color: #2c2c2c; padding: 2rem; }
        h1 { font-size: 1.8rem; margin-bottom: 1.5rem; color: #5a2d0c; }
        .card { background: white; padding: 2rem; border-radius: 8px; max-width: 500px; box-shadow: 0 2px 8px rgba(0,0,0,.1); }
        label { display: block; margin-bottom: .3rem; font-weight: bold; font-size: .9rem; color: #5a2d0c; }
        input { width: 100%; padding: .6rem .8rem; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 1.2rem; font-size: 1rem; }
        input:focus { outline: none; border-color: #8b4513; }
        .btn { padding: .6rem 1.4rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; text-decoration: none; display: inline-block; }
        .btn-primary { background: #8b4513; color: white; }
        .btn-secondary { background: #999; color: white; margin-left: .5rem; }
        .error { color: #c0392b; font-size: .85rem; margin-top: -.9rem; margin-bottom: .8rem; }
    </style>
</head>
<body>
    <h1>Registrar nuevo libro</h1>
    <div class="card">
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf

            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}" placeholder="Nombre del Libro">
            @error('titulo') <p class="error">{{ $message }}</p> @enderror

            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" value="{{ old('autor') }}" placeholder="Autor">
            @error('autor') <p class="error">{{ $message }}</p> @enderror

            <label for="año">Año de publicación</label>
            <input type="number" id="año" name="año" value="{{ old('año') }}" placeholder="Año">
            @error('año') <p class="error">{{ $message }}</p> @enderror

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('libros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>