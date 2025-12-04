@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center w-full h-screen px-4">
    <div class="registro-usuario w-full max-w-4xl p-8 overflow-hidden">
        <!-- Título blanco -->
        <h2 class="text-3xl font-bold mb-6 text-white text-center tracking-wide">Registro de Usuario</h2>

        @if ($errors->any())
            <ul class="mb-6">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('note.store') }}">
            @csrf
            <div class="grid grid-cols-2 gap-6">

                <!-- Campos -->
                @foreach (['title'=>'Nombre','edad'=>'DPI','direccion'=>'Dirección','telefono'=>'Teléfono','abono'=> 'Abono', 'abonose'=> 'Abono 2'] as $field=>$label)
                <div>
                    <label for="{{ $field }}" class="block mb-1 font-medium">{{ $label }}</label>
                    <input type="text" name="{{ $field }}" id="{{ $field }}" placeholder="Ingrese {{ strtolower($label) }}" value="{{ old($field) }}" class="w-full px-4 py-2 rounded-md" />
                    @error($field)
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                @endforeach

                <!-- Turno -->
                <div class="col-span-2">
                    <label for="turno" class="block mb-1 font-medium">Turno</label>
                    <select name="turno" id="turno" class="w-full px-4 py-2 rounded-md">
                        <option value="" disabled selected>-- Selecciona un turno --</option>
                        <option value="mañana" {{ old('turno')=='mañana'?'selected':'' }}>Mañana</option>
                        <option value="tarde" {{ old('turno')=='tarde'?'selected':'' }}>Tarde</option>
                        <option value="noche" {{ old('turno')=='noche'?'selected':'' }}>Noche</option>
                    </select>
                </div>

                <!-- Descripción -->
                <div class="col-span-2">
                    <label for="description" class="block mb-1 font-medium">Descripción</label>
                    <input type="text" name="description" id="description" placeholder="Ingrese descripción" value="{{ old('description') }}" class="w-full px-4 py-2 rounded-md" />
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Botones -->
            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('note.index') }}" class="btn">Regresar</a>
                <input type="submit" value="Registrar Usuario" class="btn" />
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

/* Flecha blanca en select */
.registro-usuario select {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3csvg width='10' height='5' viewBox='0 0 10 5' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M0 0L5 5L10 0H0Z' fill='white'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 10px 5px;
    appearance: none;
}
</style>
@endsection
