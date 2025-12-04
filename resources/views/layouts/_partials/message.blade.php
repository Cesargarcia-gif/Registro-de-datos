@if (Session::has('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Creado Exitosamente',
    confirmButtonColor: '#3085d6'
});
</script>
@endif

@if (Session::has('danger'))
<script>
Swal.fire({
    icon: 'error',
    title: 'Eliminado Exitosamente',
    confirmButtonColor: '#d33'
});
</script>
@endif
