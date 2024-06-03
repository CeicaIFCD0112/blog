<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Formulario
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1>Calendario de Eventos</h1>

        <form id="eventForm" action="{{ route('calendario.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
            <div class="mb-3">
                <label for="nombre_actividad" class="form-label">Nombre de la Actividad</label>
                <input type="text" class="form-control" id="nombre_actividad" name="nombre_actividad" required>
            </div>
            <div class="mb-3">
                <label for="nombre_participante" class="form-label">Nombre del Participante</label>
                <input type="text" class="form-control" id="nombre_participante" name="nombre_participante" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary" id="submitBtn">Agregar Evento</button>
        </form>

        <h2>Lista de Eventos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nombre de la Actividad</th>
                    <th>Nombre del Participante</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->fecha }}</td>
                    <td>{{ $event->hora }}</td>
                    <td>{{ $event->nombre_actividad }}</td>
                    <td>{{ $event->nombre_participante }}</td>
                    <td>{{ $event->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const form = document.getElementById('eventForm');
            const submitBtn = document.getElementById('submitBtn');

            form.addEventListener('submit', (e) => {
                submitBtn.disabled = true;
            });

            form.addEventListener('input', (e) => {
                submitBtn.disabled = false;
            });
        });
    </script>
</x-app-layout>
