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
<div
  class="hero h-full"
  style="background-image: url(https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1920);"
>
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-2xl">
      <h1 class="mb-5 text-5xl font-bold"><?php echo e(__('messages.welcome_title')); ?></h1>
      <p class="mb-5 text-lg">
        <?php echo e(__('messages.welcome_description')); ?>

      </p>
      <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-lg"><?php echo e(__('messages.access_system')); ?></a>
      <?php else: ?>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary btn-lg"><?php echo e(__('messages.go_dashboard')); ?></a>
      <?php endif; ?>
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

<?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/main.blade.php ENDPATH**/ ?>