<form method="POST" action="<?php echo e(route('password.email')); ?>">
    <?php echo csrf_field(); ?>

    <div>
        <label for="email"><?php echo e(__('Email')); ?></label>
        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
        <button type="submit">
            <?php echo e(__('Send Password Reset Link')); ?>

        </button>
    </div>
</form>
<?php /**PATH C:\Users\galih agung raharjo\Documents\github\Getlink_New_GALIH\resources\views/forgot_password/password.blade.php ENDPATH**/ ?>