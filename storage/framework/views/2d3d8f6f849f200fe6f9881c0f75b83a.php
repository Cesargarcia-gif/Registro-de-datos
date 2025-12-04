

<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-center w-full h-screen px-4">
    <div class="registro-usuario w-full max-w-4xl p-8 overflow-hidden">
        <!-- Título -->
        <h2 class="text-3xl font-bold mb-6 text-white text-center tracking-wide">Editar Usuario</h2>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
            <ul class="mb-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="text-red-500"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <form method="POST" action="<?php echo e(route('note.update', $note->id)); ?>">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="grid grid-cols-2 gap-6">

                <!-- Nombre -->
                <div>
                    <label for="title" class="block mb-1 font-medium">Nombre</label>
                    <input type="text" name="title" id="title" value="<?php echo e(old('title', $note->title)); ?>" placeholder="Ingrese nombre" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['title'];
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

                <!-- Edad -->
                <div>
                    <label for="edad" class="block mb-1 font-medium">DPI</label>
                    <input type="text" name="edad" id="edad" value="<?php echo e(old('edad', $note->edad)); ?>" placeholder="Ingrese edad" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['edad'];
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

                <!-- Dirección -->
                <div>
                    <label for="direccion" class="block mb-1 font-medium">Dirección</label>
                    <input type="text" name="direccion" id="direccion" value="<?php echo e(old('direccion', $note->direccion)); ?>" placeholder="Ingrese dirección" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['direccion'];
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

                <!-- Teléfono -->
                <div>
                    <label for="telefono" class="block mb-1 font-medium">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo e(old('telefono', $note->telefono)); ?>" placeholder="Ingrese teléfono" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['telefono'];
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

                <!-- Monto -->
                <div>
                    <label for="abono" class="block mb-1 font-medium">Abono</label>
                    <input type="text" name="abono" id="abono" value="<?php echo e(old('abono #2', $note->abono)); ?>" placeholder="Ingrese el Abono" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['abono'];
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


                <div>
                    <label for="abonose" class="block mb-1 font-medium">Abono 2</label>
                    <input type="text" name="abonose" id="abono2" value="<?php echo e(old('abonose', $note->abonose)); ?>" placeholder="Ingrese el Abono #2" class="w-full px-4 py-2 rounded-md" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['abonose'];
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

                <!-- Turno -->
                <div class="col-span-2">
                    <label for="turno" class="block mb-1 font-medium">Turno</label>
                    <select name="turno" id="turno" class="w-full px-4 py-2 rounded-md">
                        <option value="" disabled>-- Selecciona un turno --</option>
                        <option value="mañana" <?php echo e(old('turno', $note->turno)=='mañana'?'selected':''); ?>>Mañana</option>
                        <option value="tarde" <?php echo e(old('turno', $note->turno)=='tarde'?'selected':''); ?>>Tarde</option>
                        <option value="noche" <?php echo e(old('turno', $note->turno)=='noche'?'selected':''); ?>>Noche</option>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['turno'];
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

                <!-- Descripción -->
                <div class="col-span-2">
                    <label for="description" class="block mb-1 font-medium">Descripción</label>
                    <input type="text" name="description" id="description" value="<?php echo e(old('description', $note->description)); ?>" placeholder="Ingrese descripción" class="w-full px-4 py-2 rounded-md" />
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Asistente IT 2\Documents\crudLivewire prueba login\resources\views/notes/edit.blade.php ENDPATH**/ ?>