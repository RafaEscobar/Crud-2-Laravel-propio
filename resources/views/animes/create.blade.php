@extends('layouts.plantilla')

@section('title', 'Creación de registro')
    
@section('content')
<div class="w-full flex justify-center">
    <div class="w-6/12">
        <h1 class="text-3xl mb-8">Crear un nuevo registro:</h1>
            <form action="{{route('animes.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid sm:grid-cols-1 md:gap-6">
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none dark:text-black dark:border-gray-600  focus:outline-none focus:border-blue-600 peer" placeholder=" " required />
                      <label for="nombre" class=" absolute text-sm dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                  </div>
                  <div class="relative z-0 w-full mb-6 group">
                      <input type="number" name="capitulos" id="capitulos" class="block py-2.5 px-0 w-full bg-transparent border-0 border-b-2 appearance-none dark:text-black dark:border-gray-600  focus:outline-none focus:border-blue-600 peer" placeholder=" " required />
                      <label for="capitulos" class=" absolute text-sm dark:text-gray-400 duration-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número de capitulos</label>
                  </div>
                </div>
                <div id="element" style="display:none;">
                    <div class="w-full mb-6">
                        <img id="imgSelect" alt="img" class="w-72 h-48 rounded-full m-auto">
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="file_path" class="flex flex-col items-center justify-center w-80 h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-white hover:bg-gray-100 dark:border-black dark:hover:border-gray-500 dark:hover:bg-blue-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm dark:text-black"><span class="font-semibold">Da clic</span> para seleccionar el archivo de imagen</p>
                            <p class="text-xs dark:text-black">SVG, PNG, JPG or GIF (MAX. 1000x720px)</p>
                        </div>
                        <input name="file_path" id='file_path' type="file" class="hidden" />
                    </label>
                </div>
                <div class="w-full flex justify-center mt-4">
                    <button type="submit" class="text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                        Crear registro
                    </button>
                </div> 
              </form>
        </div>
        <script>

    const $file_path = document.querySelector("#file_path"),
    $imgSelect = document.querySelector("#imgSelect");

    // Escuchar cuando cambie
    $file_path.addEventListener("change", () => {
      // Los archivos seleccionados, pueden ser muchos o uno
      const archivos = $file_path.files;
      // Si no hay archivos salimos de la función y quitamos la imagen
      if (!archivos || !archivos.length) {
        $imgSelect.src = "";
        return;
      }
      // Ahora tomamos el primer archivo, el cual vamos a previsualizar
      const primerArchivo = archivos[0];
      // Lo convertimos a un objeto de tipo objectURL
      const objectURL = URL.createObjectURL(primerArchivo);
      // Y a la fuente de la imagen le ponemos el objectURL
      $imgSelect.src = objectURL;
      document.getElementById("element").style.display = "block";

    });
        </script>
    </div>
@endsection



