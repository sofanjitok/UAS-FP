<?php $__env->startSection('title'); ?>
	Edit Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Edit Post</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="<?php echo e(route('post.index')); ?>" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	<?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-error" role="alert">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
			<form action="<?php echo e(route('post.update', ['post' => $post->id])); ?>" method="POST">
				<?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input type="text" required class="form-control" id="nama" name="nama" value="<?php echo e($post->nama); ?>">
				</div>
				<div class="form-group">
					<label for="nip">NIP:</label>
					<textarea name="nip" class="form-control" id="nip" rows="5" required><?php echo e($post->nip); ?></textarea>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat:</label>
					<textarea name="alamat" class="form-control" id="alamat" rows="5" required><?php echo e($post->alamat); ?></textarea>
				</div>
				<div class="form-group">
				<label for="status">Select post status</label>
				<select class="form-control" id="status" name="status">
					<option value="pending" <?php if($post->status == 'pending'): ?> selected <?php endif; ?>>Draft</option>
					<option value="completed" <?php if($post->status == 'completed'): ?> selected <?php endif; ?>>Publised</option>
				</select>
				</div>
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Febrian Yudho\Desktop\laravel-crud-system-master\resources\views/pages/post/edit.blade.php ENDPATH**/ ?>