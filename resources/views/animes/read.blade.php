@extends('layouts.plantilla')

@section('title', 'Listado de registros')

@section('content')
    <h1>Listado de registros de animes</h1>
    <div class="relative overflow-x-auto">
      <table class="border-collapse border border-gray-800 w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-900 uppercase dark:text-gray-700">
              <tr>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      Nombre
                  </th>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      # Capitulos 
                  </th>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      Imagen
                  </th>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      Editar
                  </th>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      Eliminar
                  </th>
                  <th scope="col" class="px-6 py-3 border border-gray-800 border-x-2 border-y-2">
                      Mostrar
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($registros as $fila)
              <tr class="bg-white dark:bg-gray-800">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-gray-700 border-x-2 border-y-2">
                    {{$fila->nombre}}
                  </th>
                  <td class="px-6 py-4 border-gray-700 border-x-2 border-y-2 text-center">
                    {{$fila->capitulos}}
                  </td>
                  <td class="px-6 py-4 border-gray-700 border-x-2 border-y-2 flex justify-center">
                    <img src="/imgs/{{$fila->file_path}}" width="200">
                  </td>
                  <td class="px-6 py-4 border-gray-700 border-x-2 border-y-2 text-center">
                    <a href="{{route('animes.update', $fila->id)}}" class="font-medium hover:underline">Actualizar</a>
                  </td>
                  <td class="px-6 py-4 border-gray-700 border-x-2 border-y-2 text-center">
                    <button type="submit">Eliminar</button>
                  </td>
                  <td class="px-6 py-4 border-gray-700 border-x-2 border-y-2 text-center">
                    <a href="{{route('animes.show', $fila->id)}}" class="font-medium hover:underline">Mostrar</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
@endsection




