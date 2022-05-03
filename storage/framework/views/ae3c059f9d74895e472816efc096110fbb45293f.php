

<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Slider</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('admin', app()->getLocale())); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('allSlider', app()->getLocale())); ?>">Slider</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12">
    <div class="card p-4">
    <form action="<?php echo e(route('updateSlider', ['language' => app()->getLocale(), 'id' => $slider->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="SliderEditTitleEn">Title En</label>
            <input type="text" name="title_en" id="SliderEditTitleEn" maxlength="100" class="form-control" value="<?php echo e($slider->title_en); ?>" placeholder="Title En">
        </div>
        <div class="form-group">
            <label for="SliderEditTitleRu">Title Ru</label>
            <input type="text" name="title_ru" id="SliderEditTitleRu" maxlength="100" class="form-control" value="<?php echo e($slider->title_ru); ?>" placeholder="Title Ru">
        </div>
        <div class="form-group">
            <label for="SliderEditDescrEn">Description En</label>
            <input type="text" name="description_en" id="SliderEditDescrEn" maxlength="255" class="form-control" value="<?php echo e($slider->description_en); ?>" placeholder="Description En">
        </div>
        <div class="form-group">
            <label for="SliderEditDescrRu">Description Ru</label>
            <input type="text" name="description_ru" id="SliderEditDescrRu" maxlength="255" class="form-control" value="<?php echo e($slider->description_ru); ?>" placeholder="Description Ru">
        </div>
        <div class="form-group">
            <label for="SliderEditImage">Image</label>
            <input type="file" name="image" id="SliderEditImage" class="form-control">
            <img src="<?php echo e(asset('storage/slider/'.$slider->image)); ?>" id="blah" class="m-auto d-block" width="200" alt="">
        </div>
        <button type="submit" class="btn btn-success m-auto d-block">Update Slider</button>
    </form>
  </div>
</div>
</div>
<!--Row-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
      SliderEditImage.onchange = evt => {
        const [file] = SliderEditImage.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\kovrik2\resources\views/admin/slider/edit-slider.blade.php ENDPATH**/ ?>