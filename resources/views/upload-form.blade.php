<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Formulario de Subida de Archivos</title>
 
</head>
<body>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
  
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Seleccionar archivo:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Subir Archivo</button>
    </form>
</body>
</html>