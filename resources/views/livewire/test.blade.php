<div id="tabla-wrapper">

    <!-- ÁREA DONDE SÍ SE DETECTA EL CLIC PARA DESELECCIONAR -->
    <div id="tabla-area">

        <!-- CONTENEDOR CON SCROLL -->
        <div id="tabla-scroll" class="max-h-[867px] overflow-y-auto border border-gray-700 rounded-lg">

            <table id="notasTable" class="w-full text-sm text-left text-white border-collapse">

                <!-- ENCABEZADO FIJO -->
                <thead class="text-xs uppercase text-center bg-gray-900 text-white sticky top-0 z-20">
                    <tr>
                        <th class="px-2 py-4 border border-gray-300 bg-gray-900">ID</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Nombre</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">DPI</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Teléfono</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Dirección</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Abono #1</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Abono #2</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Total</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Turno</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Descripción</th>
                        <th class="px-8 py-4 border border-gray-300 bg-gray-900">Imprimir</th>
                    </tr>
                </thead>

                <tbody class="bg-gray-800 text-white">
                    @foreach ($notas as $nt)
                    <tr class="border-b border-gray-300 hover:bg-gray-700 cursor-pointer
                        {{ $selectedNoteId === $nt->id ? 'bg-blue-600' : '' }}"
                        wire:click="select({{ $nt->id }})">

                        <td class="px-2 py-4 border border-gray-300 font-medium">{{ $nt->codigo }}</td>
                        <td class="px-8 py-4 border border-gray-300 font-medium">{{ $nt->title }}</td>
                        <td class="px-8 py-4 border border-gray-300">{{ $nt->edad }}</td>
                        <td class="px-8 py-4 border border-gray-300">{{ $nt->telefono }}</td>
                        <td class="px-8 py-4 border border-gray-300">{{ $nt->direccion }}</td>
                        <td class="px-8 py-4 border border-gray-300">Q{{ number_format($nt->abono, 2) }}</td>
                        <td class="px-8 py-4 border border-gray-300">Q{{ number_format($nt->abonose, 2) }}</td>
                        <td class="px-8 py-4 border border-gray-300">Q{{ number_format($nt->abono + $nt->abonose, 2) }}</td>
                        <td class="px-8 py-4 border border-gray-300">{{ $nt->turno }}</td>
                        <td class="px-8 py-4 border border-gray-300">{{ $nt->description }}</td>

                        <td class="px-8 py-4 border border-gray-300 text-center">
                            <button class="print-btn text-blue-400 hover:text-blue-200 text-xl"
                                data-url="{{ route('note.imprimir', $nt->id) }}" title="Imprimir">
                                🖨️
                            </button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    <!-- CINTA NEGRA Y BOTONES -->
    @if($selectedNoteId)
        <div class="cinta-negra"></div>

        <div class="fixed bottom-2 right-2 z-50 flex gap-2 justify-end">
            <a href="{{ route('note.edit', $selectedNoteId) }}"
                class="px-3 py-1 bg-blue-600 text-white text-xs rounded hover:bg-blue-700">
                Editar
            </a>

            <button onclick="confirmDelete(event, {{ $selectedNoteId }})"
                class="px-3 py-1 bg-red-600 text-white text-xs rounded hover:bg-red-700">
                Eliminar
            </button>

            <button onclick="exportTableToExcel('notas.xlsx')"
                class="px-3 py-1 bg-green-600 text-white text-xs rounded hover:bg-green-700">
                Exportar
            </button>
        </div>
    @endif

</div>


<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>

<script>

function confirmDelete(event, noteId) {
    event.preventDefault();
    Swal.fire({
        title: '¿Deseas eliminar este Usuario?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            @this.call('delete', noteId);
        }
    });
}

function exportTableToExcel(filename) {
    const table = document.getElementById('notasTable');
    const wb = XLSX.utils.table_to_book(table, { sheet: "Archivo" });
    XLSX.writeFile(wb, filename);
}

// Botón Imprimir
document.querySelectorAll('.print-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const url = this.dataset.url;
        window.open(url, '_blank');
    });
});

// DESELECCIONAR AL HACER CLIC FUERA DE LA TABLA
document.addEventListener('click', function(event) {
    const tabla = document.getElementById('tabla-area');

    if (!tabla.contains(event.target)) {
        @this.set('selectedNoteId', null);
    }
});

</script>
