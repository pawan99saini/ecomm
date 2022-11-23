
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <?php echo e(trans('global.create')); ?>

            <?php echo e(trans('cruds.attribute.title_singular')); ?>

            <a class="btn btn-secondary float-right" href="<?php echo e(route('admin.attributes.index')); ?>">
                <?php echo e(trans('global.back')); ?>

            </a>
        </div>

        <div class="card-body">
            <form method="POST" class="form-row" id="attributes-form" action="<?php echo e(route('admin.attributes.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group col-6">
                    <label class="required" for="name"><?php echo e(trans('cruds.attribute.fields.name')); ?></label>
                    <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text" name="name"
                        id="name" value="<?php echo e(old('name', '')); ?>" required>
                    <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                    <span class="help-block"><?php echo e(trans('cruds.attribute.fields.name_helper')); ?></span>
                </div>

                <div class="form-group col-6">
                    <label class="required"><?php echo e(trans('cruds.attribute.fields.status')); ?></label>
                    <select class="form-control <?php echo e($errors->has('status') ? 'is-invalid' : ''); ?>" name="status"
                        id="status" required>
                        <option value disabled <?php echo e(old('status', null) === null ? 'selected' : ''); ?>>
                            <?php echo e(trans('global.pleaseSelect')); ?></option>
                        <?php $__currentLoopData = App\Models\Attribute::STATUS_SELECT; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(old('status', 1) == $key ? 'selected' : ''); ?>>
                                <?php echo e($label); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('status')): ?>
                        <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                    <?php endif; ?>
                    <span class="help-block"><?php echo e(trans('cruds.attribute.fields.status_helper')); ?></span>
                </div>

                <div class="form-group col-6">
                    <label for="description"><?php echo e(trans('cruds.attribute.fields.description')); ?></label>
                    <textarea class="form-control <?php echo e($errors->has('description') ? 'is-invalid' : ''); ?>"
                        name="description" id="description"><?php echo old('description'); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                    <span class="help-block"><?php echo e(trans('cruds.attribute.fields.description_helper')); ?></span>
                </div>

                

                <div class="form-group col-6" id="value-container">
                    <label class="required" for="values">
                        <?php echo e(trans('cruds.attributeValue.fields.value')); ?>

                    </label>
                    <div class="row" >
                       <div class="col-10">
                         <input type="text" class="form-control" id="values" name="values[]" value="">
                       </div>
                       <div class="col-1">
                           
                       </div>
                       <div class="col-1">
                        <button class="btn btn-primary add-btn" type="button">
                            <i class="fa fa-plus"></i>
                        </button>
                       </div>
                    </div>
                    <?php if($errors->has('values')): ?>
                        <span class="text-danger"><?php echo e($errors->first('values')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group text-right col-12">
                    <button class="btn btn-success" id="submit-btn" type="submit">
                        <?php echo e(trans('global.save')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function(){
            var value_html = `<div class="row mt-2" >
                       <div class="col-10">
                         <input type="text" class="form-control"  name="values[]" value="">
                       </div>
                       <div class="col-1">
                           <button class="btn btn-danger minus-btn"  type="button">
                               <i class="fa fa-minus"></i>
                           </button>
                       </div>
                       <div class="col-1">
                        <button class="btn btn-primary add-btn" type="button">
                            <i class="fa fa-plus"></i>
                        </button>
                       </div>
                    </div>`;
            $(document).on('click','.add-btn', function(e){
                e.preventDefault();
                $(this).remove();
                $(document).find('#value-container').append(value_html);
            })

            $(document).on('click','.minus-btn', function(e){
                e.preventDefault();
                var count = 0;
                var i = 0;
                $('#value-container').find('.row').each(function(){
                    count++;
                })

                count = count-1;
                

                $('#value-container').find('.row').each(function(){
                    i++;
                    if(i === count){
                        $(this).children('.col-1').eq(1).html(`
                          <button class="btn btn-primary add-btn">
                            <i class="fa fa-plus"></i>
                          </button>
                        `);
                    }
                })
                $(this).closest('.row').remove();
                
            })

            $(document).on('submit','#create-form', function(e){
                e.preventDefault();
                var error = false;
                $('#value-container').find('.row').each(function(){
                    var value = $(this).find('input').val();
                    if(value === ''){
                        error = true;
                    }
                    
                })

                if(error)
                {
                    alert('Please fille all values parameters, or remove it');
                }
                else{
                    $('#create-form')[0].submit();
                }
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '<?php echo e(route('admin.attributes.storeCKEditorImages')); ?>',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                                e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '<?php echo e($attribute->id ?? 0); ?>');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }
            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
        $(document).on('click', '#submit-btn', function(e) {
        e.preventDefault();
        var error = true;
        var formError = false;

        var name = $(document).find('#name').val();
        if (name == '') {
            toast_alert('Name');
            formError = true;
            return;
        }
        var status = $(document).find('#status').val();
        if (status == '') {
            toast_alert('status');
            formError = true;
            return;
        }
        var values = $(document).find('#values').val();
        if (values == '') {
            toast_alert('values');
            formError = true;
            return;
        }
        if (!formError) {
            document.getElementById("attributes-form").submit();
            }
        });
        function toast_alert(title = '') {
            toastr.warning('Warning!', `${title} field are required!`, {
                positionClass: 'toast-top-center',
                iconClass: 'toast-warning',
            });
            return;
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\ecomm\resources\views/admin/attributes/create.blade.php ENDPATH**/ ?>