<?php $__env->startSection('nama'); ?>
    Create Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Create Post</h2>
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
      <form action="<?php echo e(route('post.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="nama">Nama :</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="nip">Nip:</label>
          <textarea name="nip" class="form-control" id="nip" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea name="alamat" class="form-control" id="alamat" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
    <form action="/upload-file" method="POST" enctype="multipart/formdata"> 
  <?php echo csrf_field(); ?>
  <input type="file" name="berkas"> 
  <input type="submit" value="Unggah"> 
</form>

</div>
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Febrian Yudho\Desktop\laravel-crud-system-master\resources\views/pages/post/create.blade.php ENDPATH**/ ?>