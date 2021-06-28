<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<?php $__env->startSection('title'); ?>
Description
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Post Description</h2>
        </div>
        <div class="col-md-6">
            <div class="float-right">
                <a href="<?php echo e(route('post.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <br><br>
            <div class="post-title">
                <strong>Nomer Kendaraan: </strong> <?php echo e($post ?? ''->nopol); ?>

            </div>
            <br>
            <div class="post-description">
                <strong>Merk Kendaraan: </strong> <?php echo e($post ?? ''->merk); ?>

            </div>
            <br>
            <div class="post-description">
                <strong>Tipe Kendaraan: </strong> <?php echo e($post ?? ''->tipe); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-crud-system-master\resources\views/print.blade.php ENDPATH**/ ?>
