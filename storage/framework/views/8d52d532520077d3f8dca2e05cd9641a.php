<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__('messages.login_title')); ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f0f0f0; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-box { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h1 { text-align: center; margin-bottom: 30px; color: #333; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input[type="email"], input[type="password"] { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
        input:focus { outline: none; border-color: #007bff; }
        .btn { width: 100%; padding: 12px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        .btn:hover { background: #0056b3; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
        .links { text-align: center; margin-top: 20px; }
        .links a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="login-box">
        <h1><?php echo e(__('messages.login_title')); ?></h1>
        
        <?php if($errors->any()): ?>
            <div class="error">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email"><?php echo e(__('messages.email')); ?></label>
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
            </div>
            <div class="form-group">
                <label for="password"><?php echo e(__('messages.password')); ?></label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn"><?php echo e(__('messages.enter')); ?></button>
        </form>
        <div class="links">
            <a href="<?php echo e(route('register')); ?>"><?php echo e(__('messages.no_account')); ?></a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\iresh\laravel\laravel\LaravelIreshVenugopal\instituto\resources\views/auth/login.blade.php ENDPATH**/ ?>