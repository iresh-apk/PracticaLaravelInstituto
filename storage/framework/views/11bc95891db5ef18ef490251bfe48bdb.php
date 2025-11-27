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
        <div class="flex gap-2 mb-6">
            <?php if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher')): ?>
                <a href="<?php echo e(route('alumnos.create')); ?>" class="btn btn-primary"><?php echo e(__('messages.create_student')); ?></a>
            <?php endif; ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-warning"><?php echo e(__('messages.back')); ?></a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success mb-4">
                <span><?php echo e(session('success')); ?></span>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr class="text-gray-600">
                        <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                        <th class="font-normal">ID</th>
                        <?php endif; ?>
                        <th class="font-normal"><?php echo e(__('messages.name')); ?></th>
                        <th class="font-normal"><?php echo e(__('messages.birth_date')); ?></th>
                        <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                        <th class="font-normal"><?php echo e(__('messages.dni')); ?></th>
                        <?php endif; ?>
                        <th class="font-normal"><?php echo e(__('messages.email')); ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border-b border-gray-200">
                            <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                            <td class="text-gray-700"><?php echo e($alumno->id); ?></td>
                            <?php endif; ?>
                            <td class="text-blue-600"><?php echo e($alumno->nombre); ?> <?php echo e($alumno->apellidos); ?></td>
                            <td class="text-gray-700"><?php echo e($alumno->f_nac->format('Y-m-d')); ?></td>
                            <?php if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('teacher'))): ?>
                            <td class="text-gray-700"><?php echo e($alumno->dni); ?></td>
                            <?php endif; ?>
                            <td class="text-blue-600"><?php echo e($alumno->email); ?></td>
                            <td class="flex gap-4 items-center">
                                <?php if(auth()->user()->hasRole('admin')): ?>
                                    <a href="<?php echo e(route('alumnos.edit', $alumno)); ?>" class="text-gray-500 hover:text-gray-700" title="Editar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                    <form action="<?php echo e(route('alumnos.destroy', $alumno)); ?>" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar este alumno?')" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-gray-500 hover:text-gray-700" title="Eliminar">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                <?php endif; ?>
                                <a href="<?php echo e(route('alumnos.show', $alumno)); ?>" class="text-blue-600 hover:text-blue-800"><?php echo e(__('messages.view')); ?></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4"><?php echo e(__('messages.no_students')); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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
<?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/alumnos/index.blade.php ENDPATH**/ ?>