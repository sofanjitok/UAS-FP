<?php $__env->startSection('title'); ?>
Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6 table-responsive">
    		<h2>POSTS</h2>
        </div>
        
          <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
              <td colspan="4"><center>No data found</center></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Febrian Yudho\Desktop\laravel-crud-system-master\resources\views//pages/index.blade.php ENDPATH**/ ?>