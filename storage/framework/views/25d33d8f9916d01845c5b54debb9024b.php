<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-screen flex flex-col">

    <?php if (isset($component)) { $__componentOriginal508dd3e42d353d46f68538c5a8e15cd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5)): ?>
<?php $attributes = $__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5; ?>
<?php unset($__attributesOriginal508dd3e42d353d46f68538c5a8e15cd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508dd3e42d353d46f68538c5a8e15cd5)): ?>
<?php $component = $__componentOriginal508dd3e42d353d46f68538c5a8e15cd5; ?>
<?php unset($__componentOriginal508dd3e42d353d46f68538c5a8e15cd5); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $attributes = $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $component = $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>

    <main class="bg-main text-black flex-grow">
        <?php echo e($slot); ?>

    </main>

    <?php if (isset($component)) { $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $attributes = $__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__attributesOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68)): ?>
<?php $component = $__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68; ?>
<?php unset($__componentOriginal2851f1e47c9108aacbab05e6d2ec4a68); ?>
<?php endif; ?>
</body>
</html><?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/components/layouts/layout.blade.php ENDPATH**/ ?>