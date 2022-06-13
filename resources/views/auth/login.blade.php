<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Inicia sesión</h1>
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/login" method="POST">
                        @csrf
                        <div class="mb-4">
                        
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="text" placeholder="Email">
                        </div>
                        <div class="mb-6">
                        
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Contraseña">
                        </div>
                        <div class="flex items-center justify-between">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                        
                        </div>
                    </form>

                    @if (isset($error))

                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">Error al iniciar sesión</span>
                        </div>
                        
                    @endif

                </div>

        
                

                <div class="text-grey-dark mt-6">
                    No tienes cuenta?
                    <a class="no-underline border-b border-blue text-blue" href="../register">
                        Créate una
                    </a>
                </div>
        </div>
</div>
</body>
</html>



<!-- <form action="/login" method="POST">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form> -->