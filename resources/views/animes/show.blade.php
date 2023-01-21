@extends('layouts.plantilla')

@section('title', 'Registro: ')
    
@section('content')
    <h1 class="text-3xl mb-8">Detalles del anime: {{$registro->nombre}}</h1>
    <div class="w-full flex justify-center ">
        <div href="#" class=" grid-cols-1 bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-2/3">
            <div class="w-full flex justify-center">
                <img class="" src="/imgs/{{$registro->file_path}}" alt="Logo del anime">
            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$registro->nombre}}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Número de capitulos: {{$registro->capitulos}}</p>
            </div>
        </div>
    </div>
@endsection