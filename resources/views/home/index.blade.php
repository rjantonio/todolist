<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <!-- @auth

    <p>Bienvenido {{auth()->user()->email}}, estás autenticado</p>

    @endauth

    @guest

    <p>Para ver el contenido <a href="/login">Inicia sesión</a></p>

    @endguest -->


    @php

    use App\Http\Controllers\HomeController;
    use App\Models\Tarea;

    
    

    $usuario = Session::get('usuario');

    //var_dump ($usuario['idusu']);


    $tareas = HomeController::getTar($usuario['idusu']);
  

    @endphp

    <div id="arriba" style="display: flex;justify-content: space-between;margin: 2.5vh;font-size: 2.5vh;">

        <h1 >Bienvenido {{ $usuario['nombre']}}</h1>

        <div style="float: right;">
            <a class="no-underline border-b border-blue text-blue" href="../login">
                Cerrar Sesión
            </a>
        </div>

    </div>


    <div id="medio" style="display: flex;margin: 2.5vh;font-size: 1.8vh;">
        <a class="no-underline border-b border-blue text-blue" style="margin-right:10px"href="/nueva">
            Nueva tarea
        </a>
        <a class="no-underline border-b border-blue text-blue" href="/gestiona">
            Gestionar etiquetas
        </a>
    </div>
    
    

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tareas
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Completa
                </th>
                <th scope="col" class="px-6 py-3">
                    Etiquetas
                </th>
                <th scope="col" class="px-6 py-3">
                    Editar
                </th>
                <th scope="col" class="px-6 py-3">
                    Borrar
                </th>
                <th scope="col" class="px-6 py-3">
                    Finalizada
                </th>
            </tr>
        </thead>
        <tbody>

        @foreach ($tareas as $tarea) 

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ $tarea->titulo }}
                </th>
                <td class="px-6 py-4">
                    {{ $tarea->fecha }}
                </td>
                <td class="px-6 py-4">
                    @php
                    
                    if ($tarea->completa==0) {

                        @endphp 
                        <span style="color:red">No completada</span>
                        @php
                    } else {
                        @endphp
                        <span style="color:green">Completada</span>
                        @php
                    }


                    @endphp
                </td>
                <td class="px-6 py-4">
                    {{ $tarea->titulo }}

                    

                </td>
                <td class="px-6 py-4">
                    @php

                    if ($tarea->completa==0) {

                        @endphp <a href="/editar/{{ $tarea->titulo }}" class="no-underline border-b border-blue text-blue">Editar</a>

                        @php

                    }

                    @endphp
                </td>
                <td class="px-6 py-4">
                    <a href="/borrar/{{ $tarea->titulo }}" class="no-underline border-b border-blue text-blue">Borrar</a>
                </td>
                <td class="px-6 py-4">
                    <!-- <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Finalizada
                    </button> -->
                    <a href="/finalizar/{{ $tarea->titulo }}" class="no-underline border-b border-blue text-blue">Finalizar</a>
                </td>
            </tr>

        @endforeach
            

        </tbody>
    </table>
</div>




</body>
</html>