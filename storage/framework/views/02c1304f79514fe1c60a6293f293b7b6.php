
<?php $__env->startSection('MainContent'); ?>




<div class="row form-container">
    <div class="col-md-12" >
        <h2>Course Details <?php echo e($course->category); ?>  :</h2>
        <?php echo $course->details; ?>

    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task3\resources\views/admin/details.blade.php ENDPATH**/ ?>