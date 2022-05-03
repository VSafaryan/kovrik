

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Terms & Conditions</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('admin', app()->getLocale())); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12">
    <div class="card p-4">
    <form action="<?php echo e(route('updateTerms', ['language' => app()->getLocale(), 'id' => $terms->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="shippingTitleEn">Text En</label>
            <textarea name="text_en" id="shippingTitleEn" class="form-control" cols="30" rows="10"><?php echo e($terms->text_en); ?></textarea>
        </div>
        <div class="form-group">
            <label for="shippingTitleRu">Text Ru</label>
            <textarea name="text_ru" id="shippingTitleRu" class="form-control" cols="30" rows="10"><?php echo e($terms->text_ru); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success m-auto d-block">Update</button>
    </form>
  </div>
</div>
</div>
<!--Row-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kovrik2\resources\views/admin/terms/index.blade.php ENDPATH**/ ?>