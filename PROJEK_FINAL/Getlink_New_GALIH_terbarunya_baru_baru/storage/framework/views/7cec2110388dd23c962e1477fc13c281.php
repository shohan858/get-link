<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>"/>
    <script defer src="<?php echo e(asset('assets/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/jquery.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('assets/summernote/summernote-lite.css')); ?>" />
</head>
<body>
    

<center>
                <?php if($background->type_background == 'color'): ?>
        <div class="bungkus" style='background: <?php echo e($background->background); ?>'>
        <?php else: ?>
            <div class="bungkus"
                style="background-image: url('<?php echo e(asset('microsite/background/' . $background->background)); ?>')">
    <?php endif; ?>
    <?php $non_bungkus = ''; ?>
    <?php $kolom2 = ''; ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $code = $i['code']; ?>
        <?php $html = str_replace('src="microsite/medsos', 'src="' . asset('microsite/medsos/'), $i['code']); ?>
        <?php if($i['id'] === 9): ?>
            <?php $kolom2 .= str_replace('src="microsite/konten', 'src="' . asset('microsite/konten/'), $i['code']); ?>
        <?php else: ?>
            <?php $non_bungkus .= $html; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if (!empty($kolom2)) : ?>
    <?php $non_bungkus .= '<div class="bungkus-anak" id="bungkus-template-konten">' . $kolom2 . '</div>'; ?>
    <?php endif; ?>
    <?php echo $non_bungkus; ?>

              </center>

              </body>
</html><?php /**PATH D:\get_new_2\Getlink_New_GALIH_terbarunya_baru\resources\views/microsite/index.blade.php ENDPATH**/ ?>