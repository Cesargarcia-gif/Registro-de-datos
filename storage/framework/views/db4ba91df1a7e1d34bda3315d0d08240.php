
<?php $__env->startSection('content'); ?>

<div class="header">
    <div class="header-left">
        <a href="<?php echo e(route('note.create')); ?>" class="btn-crear">Crear nuevo usuario</a>

        <form action="<?php echo e(route('note.index')); ?>" method="GET" class="form-buscar">
            <input type="text" name="buscar" placeholder="🔍 Buscar por Nombre..." value="<?php echo e(request('buscar')); ?>">
            <button type="submit">Buscar</button>
        </form>
    </div>
 <br>
    <div class="header-right">
        
    </div>
</div>

<div style="position: absolute; top: 20px; right: 20px; z-index: 1000; display: flex; gap: 10px; align-items: center;">

    <button 
        onclick="confirmarVaciado()" 
        class="logout-circle" 
        title="Vaciar listado"
        style="background: #073047;">
        
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
            stroke="currentColor" style="width: 22px; height: 22px; color: white;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m-7 0h8M10 4h4m-5 0a1 1 0 011-1h4a1 1 0 011 1m-6 0h6" />
        </svg>
    </button>

    <a href="#" id="logout-button" class="logout-circle" title="Cerrar sesión">
        <svg xmlns="http://www.w3.org/2000/svg" class="logout-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5" />
        </svg>
    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

function confirmarVaciado() {
    Swal.fire({
        title: '¿Vaciar todo el listado?',
        text: "Esta acción no se puede deshacer.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3498db',
        confirmButtonText: 'Sí, vaciar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch('emptyList'); // 🔵 Ahora funciona con Livewire v3
        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    const logoutBtn = document.getElementById('logout-button');
    const logoutForm = document.getElementById('logout-form');

    logoutBtn.addEventListener('click', e => {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro que quieres cerrar sesión?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: '#3498db',
            confirmButtonText: 'Cerrar sesión',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                logoutForm.submit();
            }
        });
    });
});


window.addEventListener('list-vaciada', () => {
    Swal.fire({
        icon: 'success',
        title: '¡Listado vaciado!',
        text: 'Todos los registros han sido eliminados.',
        confirmButtonColor: '#3085d6'
    });
});
</script>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('test', []);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3163281800-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Asistente IT 2\Documents\crudLivewire prueba login\resources\views/notes/index.blade.php ENDPATH**/ ?>