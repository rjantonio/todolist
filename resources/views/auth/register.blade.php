<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <form action="/register" method="POST">
                    @csrf
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="nombre"
                        placeholder="Nombre" />

                    <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="apellidos"
                    placeholder="Apellidos" />

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password_confirmation"
                        placeholder="Confirm Password" />

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>


                    </form>
                    
                </div>

                <div class="text-grey-dark mt-6">
                    Ya tienes cuenta?
                    <a class="no-underline border-b border-blue text-blue" href="../login">
                        Inicia sesión
                    </a>
                </div>
            </div>
        </div>
    
</body>
</html>


<!-- <form action="/register" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="text" name="apellidos">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <input type="submit" value="Registrarse">
    </form> -->