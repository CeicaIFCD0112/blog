<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formulario
        </h2>
    </x-slot>
    <div class="container">
        <h1>Enviar Formulario</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('formulario.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="+34.xxxxxxxx" value="{{ old('telefono') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>  
</x-app-layout>
