

<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-center w-full h-screen px-4">
    <div class="registro-usuario w-full max-w-4xl p-8 overflow-hidden">
        <!-- Título blanco -->
        <h2 class="text-3xl font-bold mb-6 text-white text-center tracking-wide">Registro de Usuario</h2>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
            <ul class="mb-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="text-red-500"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <form method="POST" action="<?php echo e(route('note.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-2 gap-6">

                <!-- Campos -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = ['title'=>'Nombre','edad'=>'DPI','direccion'=>'Dirección','telefono'=>'Teléfono','abono'=> 'Abono', 'abonose'=> 'Abono 2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field=>$label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <label for="<?php echo e($field); ?>" class="block mb-1 font-medium"><?php echo e($label); ?></label>
                    <input type="text" name="<?php echo e($field); ?>" id="<?php echo e($field); ?>" placeholder="Ingrese <?php echo e(strtolower($label)); ?>" value="<?php echo e(old($field)); ?>" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = [$field];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <!-- Turno -->
                <div class="col-span-2">
                    <label for="turno" class="block mb-1 font-medium">Turno</label>
                    <select name="turno" id="turno" class="w-full px-4 py-2 rounded-md">
                        <option value="" disabled selected>-- Selecciona un turno --</option>
                        <option value="mañana" <?php echo e(old('turno')=='mañana'?'selected':''); ?>>Mañana</option>
                        <option value="tarde" <?php echo e(old('turno')=='tarde'?'selected':''); ?>>Tarde</option>
                        <option value="noche" <?php echo e(old('turno')=='noche'?'selected':''); ?>>Noche</option>
                    </select>
                </div>

                <!-- Descripción -->
                <div class="col-span-2">
                    <label for="description" class="block mb-1 font-medium">Descripción</label>
                    <input type="text" name="description" id="description" placeholder="Ingrese descripción" value="<?php echo e(old('description')); ?>" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

            </div>

            <!-- Botones -->
            <div class="flex items-center justify-between mt-8">
                <a href="<?php echo e(route('note.index')); ?>" class="btn">Regresar</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Asistente IT 2\Documents\crudLivewire prueba login\resources\views/notes/create.blade.php ENDPATH**/ ?>