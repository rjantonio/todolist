<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Etiqueta</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    

<div class="flex items-center justify-center p-12">
  <div class="mx-auto w-full max-w-[550px]">
    <form action="/nuevaEtiqueta" method="POST">
    @csrf
      <div class="mb-5">
        <label
          for="etiqueta"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Titulo
        </label>
        <input
          type="text"
          name="etiqueta"
          id="etiqueta"
          placeholder="Titulo"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="titulo"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Color
        </label>
        <input
          type="text"
          name="color"
          id="color"
          placeholder="Color (formato #000FFF)"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
      </div>
    </form>
  </div>
</div>


</body>
</html>