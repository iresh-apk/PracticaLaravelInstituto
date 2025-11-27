<header class="bg-header h-header text-white flex justify-between items-center">
    <div class="flex items-center">
        <img src="<?php echo e(asset('./images/logo.png')); ?>" alt="logo" class="h-17 m-5 max-h-full">
    </div>
    <h1 class="text-4xl font-bold"><?php echo e(__('messages.app_name')); ?></h1>
    <div class="flex items-center space-x-2 mr-4">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-sm btn-neutral">
                <?php
                    $langs = ['es' => 'Español', 'en' => 'English', 'fr' => 'Français'];
                ?>
                <?php echo e($langs[app()->getLocale()] ?? 'English'); ?>

                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-32">
                <li><a href="<?php echo e(route('lang.switch', 'es')); ?>" class="text-gray-800">Español</a></li>
                <li><a href="<?php echo e(route('lang.switch', 'en')); ?>" class="text-gray-800">English</a></li>
                <li><a href="<?php echo e(route('lang.switch', 'fr')); ?>" class="text-gray-800">Français</a></li>
            </ul>
        </div>
        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-sm bg-white text-black hover:bg-gray-200"><?php echo e(__('messages.login')); ?></a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-sm bg-gray-300 text-black hover:bg-gray-400"><?php echo e(__('messages.register')); ?></a>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
            <span class="text-lg font-medium"><?php echo e(auth()->user()->name); ?></span>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-sm bg-gray-300 text-black hover:bg-gray-400"><?php echo e(__('messages.logout')); ?></button>
            </form>
        <?php endif; ?>
    </div>
</header><?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/components/layouts/header.blade.php ENDPATH**/ ?>