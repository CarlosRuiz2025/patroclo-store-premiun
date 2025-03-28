@extends('layouts.app')

@section('content')
    <!-- Encabezado con título y enlace "Volver" -->
    <div class="flex justify-between items-center mb-6 px-4">
        <h1 class="text-2xl font-medium text-gray-800">
            Productos de {{ $subcategoria->nombre }}
        </h1>
        <a href="{{ route('subcategorias.index', ['categoria' => $subcategoria->id_categoria]) }}" 
           class="text-blue-600 hover:text-blue-800">
            Volver
        </a>
    </div>

    @if($productos->isEmpty())
        <div class="text-center text-gray-500 mt-4">
            No hay productos disponibles.
        </div>
    @else
        <div class="flex flex-wrap justify-evenly mt-4 gap-4">
            @foreach ($productos as $producto)
                <a href="{{ route('productos.show', ['producto' => $producto->id_producto]) }}">
                    <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[200px] p-4 rounded cursor-pointer">
                        <img class="h-[130px] w-full object-cover rounded" src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
                        <p class="text-center mt-3 font-medium text-gray-800">{{ $producto->nombre }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection
