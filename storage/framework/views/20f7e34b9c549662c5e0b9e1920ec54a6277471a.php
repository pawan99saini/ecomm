


<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            Import
            <a class="btn btn-secondary float-right" href="<?php echo e(route('admin.products.index')); ?>">
                <?php echo e(trans('global.back')); ?>

            </a>
        </div>

        <div class="card-body">
        <form action="<?php echo e(route('admin.products.import')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="col-md-3">
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
</div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="<?php echo e(route('admin.products.sample')); ?>">Export data</a>
        </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecomm\resources\views/admin/products/import-export.blade.php ENDPATH**/ ?>