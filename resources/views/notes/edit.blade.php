@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center w-full h-screen px-4">
    <div class="registro-usuario w-full max-w-4xl p-8 overflow-hidden">
        <!-- Título -->
        <h2 class="text-3xl font-bold mb-6 text-white text-center tracking-wide">Editar Usuario</h2>

        @if ($errors->any())
            <ul class="mb-6">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('note.update', $note->id) }}">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-2 gap-6">

                <!-- Nombre -->
                <div>
                    <label for="title" class="block mb-1 font-medium">Nombre</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}" placeholder="Ingrese nombre" class="w-full px-4 py-2 rounded-md" />
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Edad -->
                <div>
                    <label for="edad" class="block mb-1 font-medium">DPI</label>
                    <input type="text" name="edad" id="edad" value="{{ old('edad', $note->edad) }}" placeholder="Ingrese edad" class="w-full px-4 py-2 rounded-md" />
                    @error('edad')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Dirección -->
                <div>
                    <label for="direccion" class="block mb-1 font-medium">Dirección</label>
                    <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $note->direccion) }}" placeholder="Ingrese dirección" class="w-full px-4 py-2 rounded-md" />
                    @error('direccion')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Teléfono -->
                <div>
                    <label for="telefono" class="block mb-1 font-medium">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $note->telefono) }}" placeholder="Ingrese teléfono" class="w-full px-4 py-2 rounded-md" />
                    @error('telefono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Monto -->
                <div>
                    <label for="abono" class="block mb-1 font-medium">Abono</label>
                    <input type="text" name="abono" id="abono" value="{{ old('abono #2', $note->abono) }}" placeholder="Ingrese el Abono" class="w-full px-4 py-2 rounded-md" />
                    @error('abono')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label for="abonose" class="block mb-1 font-medium">Abono 2</label>
                    <input type="text" name="abonose" id="abono2" value="{{ old('abonose', $note->abonose) }}" placeholder="Ingrese el Abono #2" class="w-full px-4 py-2 rounded-md" />
                    @error('abonose')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Turno -->
                <div class="col-span-2">
                    <label for="turno" class="block mb-1 font-medium">Turno</label>
                    <select name="turno" id="turno" class="w-full px-4 py-2 rounded-md">
                        <option value="" disabled>-- Selecciona un turno --</option>
                        <option value="mañana" {{ old('turno', $note->turno)=='mañana'?'selected':'' }}>Mañana</option>
                        <option value="tarde" {{ old('turno', $note->turno)=='tarde'?'selected':'' }}>Tarde</option>
                        <option value="noche" {{ old('turno', $note->turno)=='noche'?'selected':'' }}>Noche</option>
                    </select>
                    @error('turno')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descripción -->
                <div class="col-span-2">
                    <label for="description" class="block mb-1 font-medium">Descripción</label>
                    <input type="text" name="description" id="description" value="{{ old('description', $note->description) }}" placeholder="Ingrese descripción" class="w-full px-4 py-2 rounded-md" />
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Botones -->
            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('note.index') }}" class="btn">Regresar</a>
                <input type="submit" value="Actualizar Usuario" class="btn" />
            </div>
        </form>
    </div>
</div>

<style>
/* Fondo de pantalla más claro */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background: linear-gradient(135deg, #77abeb 0%, #d9ecff 100%);
}

/* Animación de aparición suave */
.registro-usuario {
    transform: translateY(20px);
    opacity: 0;
    border-radius: 1.5rem;
    background: #0d3b66; /* fondo sólido del formulario */
    border: 1px solid rgba(255,255,255,0.2);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
    animation: fadeInUp 0.8s forwards;
}

@keyframes fadeInUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* Títulos y labels blancos */
.registro-usuario h2,
.registro-usuario label {
    color: white;
}

/* Inputs y select oscuros con borde azul visible */
.registro-usuario input,
.registro-usuario select {
    color: white;
    background-color: rgba(0,0,0,0.3);
    border: 1px solid #0ea5e9;
    transition: all 0.3s ease;
    border-radius: 0.5rem;
}

/* Placeholder gris claro */
.registro-usuario input::placeholder,
.registro-usuario select::placeholder {
    color: #cbd5e1;
}

/* Focus en inputs con resplandor azul intenso */
.registro-usuario input:focus,
.registro-usuario select:focus {
    outline: none;
    border-color: #38bdf8;
    box-shadow: 0 0 12px rgba(59, 130, 246, 0.7);
}

/* Botones con degradado azul */
.registro-usuario .btn {
    position: relative;
    overflow: hidden;
    color: white;
    font-weight: 600;
    padding: 0.5rem 1.5rem;
    border-radius: 0.5rem;
    background: linear-gradient(to right, #0ea5e9, #38bdf8);
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

/* Efecto de brillo en hover */
.registro-usuario .btn::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
    transform: rotate(45deg) scale(0);
    transition: transform 0.5s;
}

.registro-usuario .btn:hover::after {
    transform: rotate(45deg) scale(1);
}

.registro-usuario .btn:hover {
    background: linear-gradient(to right, #06b6d4, #0ea5e9);
}

/* Rebote en click del botón */
.registro-usuario input[type="submit"]:active {
    transform: scale(0.95);
}
</style>
@endsection
