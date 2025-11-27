<?php if (isset($component)) { $__componentOriginale8c81e736869ad8b72261906ebaa0e05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8c81e736869ad8b72261906ebaa0e05 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6"><?php echo e(__('messages.student_details')); ?></h1>

        <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
            <div class="grid grid-cols-2 gap-4">
                <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                <div>
                    <span class="font-semibold text-gray-600">ID:</span>
                    <p class="text-lg"><?php echo e($alumno->id); ?></p>
                </div>
                <?php endif; ?>
                <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                <div>
                    <span class="font-semibold text-gray-600"><?php echo e(__('messages.dni')); ?>:</span>
                    <p class="text-lg"><?php echo e($alumno->dni); ?></p>
                </div>
                <?php endif; ?>
                <div>
                    <span class="font-semibold text-gray-600"><?php echo e(__('messages.name')); ?>:</span>
                    <p class="text-lg"><?php echo e($alumno->nombre); ?></p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600"><?php echo e(__('messages.surname')); ?>:</span>
                    <p class="text-lg"><?php echo e($alumno->apellidos); ?></p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600"><?php echo e(__('messages.email')); ?>:</span>
                    <p class="text-lg"><?php echo e($alumno->email); ?></p>
                </div>
                <div>
                    <span class="font-semibold text-gray-600"><?php echo e(__('messages.birth_date')); ?>:</span>
                    <p class="text-lg"><?php echo e($alumno->f_nac->format('d/m/Y')); ?></p>
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                <?php if (! \Illuminate\Support\Facades\Blade::check('role', 'student')): ?>
                <a href="<?php echo e(route('alumnos.edit', $alumno)); ?>" class="btn btn-warning"><?php echo e(__('messages.edit')); ?></a>
                <?php endif; ?>
                <a href="<?php echo e(route('alumnos.index')); ?>" class="btn btn-secondary"><?php echo e(__('messages.back')); ?></a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8c81e736869ad8b72261906ebaa0e05)): ?>
<?php $attributes = $__attributesOriginale8c81e736869ad8b72261906ebaa0e05; ?>
<?php unset($__attributesOriginale8c81e736869ad8b72261906ebaa0e05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8c81e736869ad8b72261906ebaa0e05)): ?>
<?php $component = $__componentOriginale8c81e736869ad8b72261906ebaa0e05; ?>
<?php unset($__componentOriginale8c81e736869ad8b72261906ebaa0e05); ?>
<?php endif; ?>
<?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/alumnos/show.blade.php ENDPATH**/ ?>