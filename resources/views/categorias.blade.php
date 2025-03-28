@extends('layouts.app')

@section('content')
    <!-- Encabezado con título y enlace "Volver" -->
    <div class="flex justify-between items-center mb-6 px-4">
        <h1 class="text-2xl font-medium text-gray-800">
            Elige una categoría
        </h1>
        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800">
            Volver
        </a>
    </div>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">
        @foreach($categorias as $categoria)
            <a href="{{ route('subcategorias.index', ['categoria' => $categoria->id_categoria]) }}">
                <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[200px] p-4 rounded cursor-pointer">
                    <img class="h-[130px] w-full object-cover rounded" src="{{ $categoria->imagen_url }}" alt="{{ $categoria->nombre }}">
                    <p class="text-center mt-3 font-medium text-gray-800">{{ $categoria->nombre }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
