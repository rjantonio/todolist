<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@php 
    use App\Http\Controllers\HomeController;

    $etiquetas = HomeController::getEtis();

    $usuario = Session::get('usuario');

@endphp

    <body class="bg-gray-700 ">
    <div class="flex min-h-screen items-center justify-center">

    <form action="/nueva/{{ $usuario['idusu']}}/"  method="POST">
    @csrf
        <div class="min-h-1/2 bg-gray-900  border border-gray-900 rounded-2xl">

            <div class="mx-4 sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-16 font-semibold text-gray-500 flex-col">
            
                <h1 class="text-white text-6xl">Nueva Tarea</h1>

                <br/>

                    <input class="w-full p-2 bg-gray-900 rounded-md  border border-gray-700 focus:border-blue-700"
                        placeholder="Titulo" type="text" name="titulo" id="titulo">
                    <input class="w-full p-2 bg-gray-900 rounded-md border border-gray-700 " placeholder="Descripción"
                        type="text" name="texto" id="texto">
                    
                    <select multiple="multiple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="etiquetas[]" id="etiquetas">

                        @foreach ($etiquetas as $etiqueta) 
                        
                                <option value="{{ $etiqueta->etiqueta; }}">{{ $etiqueta->etiqueta; }}</option>
                            
                        @endforeach
                        
                    </select>


                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>


                
                
            </div>


        </div>
        </form>
    </div>


</body>
</body>
</html>