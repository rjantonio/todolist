<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestiona</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

@php 
    use App\Http\Controllers\HomeController;

    $etiquetas = HomeController::getEtis();


@endphp




<div class="md:px-32 py-8 w-full">

    <div id="medio" style="display: flex;margin: 2.5vh;font-size: 2vh;">
            <a class="no-underline border-b border-blue text-blue" style="margin-right:10px"href="/home">
                Volver Atrás
            </a>
            <a class="no-underline border-b border-blue text-blue" href="/nuevaEtiqueta">
                Nueva etiqueta
            </a>
    </div>
    
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Etiquetas</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Editar</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Borrar</th>
        </tr>
      </thead>
    <tbody class="text-gray-700">
        @foreach ($etiquetas as $etiqueta)
            <tr>
                
                <td class="w-1/3 text-left py-3 px-4">
                                     
                {{ $etiqueta->etiqueta; }}
                              
                </td>
                <td class="w-1/3 text-left py-3 px-4"><a class="no-underline border-b border-blue text-blue" href="../editaEti/{{ $etiqueta->etiqueta; }}">
                        Editar
                    </a></td>
                    <td class="w-1/3 text-left py-3 px-4"><a class="no-underline border-b border-blue text-blue" href="/borraEti/{{ $etiqueta->etiqueta; }}">
                        Borrar
                    </a></td>
                    
            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>



</body>
</html>