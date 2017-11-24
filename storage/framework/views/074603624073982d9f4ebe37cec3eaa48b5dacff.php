<?php $__env->startComponent('mail::message'); ?>
This is demo welcome

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Get Started
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::table'); ?>

<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
