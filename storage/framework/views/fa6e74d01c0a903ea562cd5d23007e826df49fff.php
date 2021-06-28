<?php $__env->startSection('nama'); ?>
My Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>My Post</h2>
        </div>
        <div class="col-md-6">
            <div class="float-right">
                <a href="http://127.0.0.1:8000/pdf" class="btn btn-primary"><i class="fa fa-plus"></i>Cetak Data</a>
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
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nomer Kendaraan</th>
                <th>Merk Kendaraan</th>
                <th>Tipe Kendaraan</th>
                <th>Posted Date</th>
                <th>Updated</th>
                <th>Action</th>
              </tr>
        </thead>
        <tbody>
          <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
              <th><?php echo e($post->nopol); ?></th>
              <td><?php echo e($post->merk); ?></td>
              <td><?php echo e($post->tipe); ?></td>
              <td><?php echo e($post->created_at); ?></td>
              <td><?php echo e($post->updated); ?></td>
              <td>
                <div class="action_btn">
                  <div class="action_btn">
                    <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-warning btn-sm my-button">Edit</a>
                  </div>
                  <div class="action_btn margin-left-10">
                    <form action="<?php echo e(route('post.destroy', $post->id)); ?>" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    <form action="/upload-file" method="POST" enctype="multipart/formdata">
  <?php echo csrf_field(); ?>
  <input type="file" name="berkas">
  <input type="submit" value="Unggah">
</form>

                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
              <td colspan="4"><center>No post found</center></td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
       
       <?php echo e($posts->appends(Request::all())->links()); ?>

        </div>
    </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projectlaravel\UAS_FP\resources\views//pages/post/view.blade.php ENDPATH**/ ?>