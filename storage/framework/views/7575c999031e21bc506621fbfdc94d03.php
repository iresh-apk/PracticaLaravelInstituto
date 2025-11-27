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
        
        <div class="mb-6 flex items-center gap-4">
            <span class="text-gray-600"><?php echo e(__('messages.welcome')); ?>, <strong><?php echo e(auth()->user()->name); ?></strong></span>
            <span class="badge badge-primary badge-lg">
                <?php echo e(__('messages.role')); ?>: <?php echo e(__('messages.role_' . (auth()->user()->getRoleNames()->first() ?? 'student'))); ?>

            </span>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card bg-gradient-to-br from-gray-700 to-gray-900 text-white shadow-xl rounded-2xl overflow-hidden">
                <div class="card-body p-6">
                    <h2 class="card-title text-xl font-bold text-yellow-400"><?php echo e(__('messages.student_management')); ?></h2>
                    <p class="text-sm text-gray-300"><?php echo e(__('messages.student_management_desc')); ?></p>
                    <div class="flex justify-between items-end mt-4">
                        <img src="https://img.freepik.com/free-vector/group-students-concept-illustration_114360-7638.jpg" alt="Estudiantes" class="h-28 rounded-lg">
                        <a href="<?php echo e(route('alumnos.index')); ?>" class="btn btn-primary btn-sm"><?php echo e(__('messages.view_students')); ?></a>
                    </div>
                </div>
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


<?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/dashboard.blade.php ENDPATH**/ ?>