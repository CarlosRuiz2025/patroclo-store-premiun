@extends('layouts.app')

@section('content')
    <!-- Encabezado con título y enlace "Volver" -->
    <div class="flex justify-between items-center mb-6 px-4">
        <h1 class="text-2xl font-medium text-gray-800">
            Subcategorías de {{ $categoria->nombre }}
        </h1>
        <a href="{{ route('categorias.index') }}" class="text-blue-600 hover:text-blue-800">
            Volver
        </a>
    </div>

    @if($subcategorias->isEmpty())
        <div class="text-center text-gray-500">
            No hay subcategorías disponibles.
        </div>
    @else
        <div class="flex flex-wrap justify-evenly mt-4 gap-4">
            @foreach ($subcategorias as $subcategoria)
                <a href="{{ route('productos.index', ['subcategoria' => $subcategoria->id_subcategoria]) }}">
                    <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[200px] p-4 rounded cursor-pointer">
                        <img class="h-[130px] w-full object-cover rounded" src="{{ $subcategoria->imagen_url }}" alt="{{ $subcategoria->nombre }}">
                        <p class="text-center mt-3 font-medium text-gray-800">{{ $subcategoria->nombre }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection
