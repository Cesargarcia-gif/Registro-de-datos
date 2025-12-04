<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Session::has('success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Creado Exitosamente',
    confirmButtonColor: '#3085d6'
});
</script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Session::has('danger')): ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Eliminado Exitosamente',
    confirmButtonColor: '#d33'
});
</script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Asistente IT 2\Documents\crudLivewire prueba login\resources\views/layouts/_partials/message.blade.php ENDPATH**/ ?>