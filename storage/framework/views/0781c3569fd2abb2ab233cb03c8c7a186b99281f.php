<label class="<?php echo e($required); ?>">
    <?php echo e($lable_name); ?>

</label>
<input type="hidden" value="<?php echo e($image_url); ?>">
<div class="custom-file">
    <input type="file" class="custom-file-input" id="fileImage" name="<?php echo e($input_name); ?>" accept="image/*"
        onchange="imagePreview(this, '<?php echo e($image_view_name); ?>', '<?php echo e($image_error_name); ?>')" <?php echo e($required); ?> />
    <label class="custom-file-label" for="fileImage">Choose Image/Pdf</label>
    <span class="text-warning">* PDF/Image size should be maximum 2MB.</span>
                        
</div>
<p class="text-danger" style="display: none;" id="<?php echo e($image_error_name); ?>"></p>
<div style="padding-top:15px">
    <?php if($image_url): ?>
        <?php 
            $string = $image_url;
            $pieces = explode('.', $string);
            $last_word = array_pop($pieces);
        ?>
        <?php if($last_word == "pdf"): ?> 
            <a href="<?php echo e($image_url); ?>"> Click to Open PDf</a>
        <?php else: ?>
            <a href="<?php echo e($image_url); ?>" target="_blank">
            <img onerror="handleError(this);"src="<?php echo e($image_url ?? ''); ?>" width="120px" height="150px" />
        <?php endif; ?>
    <?php else: ?>
        <img onerror="handleError(this);"id="<?php echo e($image_view_name); ?>" src="" class="single-image-preview" style="display: none;" />
    <?php endif; ?>
</div>
<?php /**PATH C:\wamp64\www\ecomm\resources\views/partials/single-image-upload.blade.php ENDPATH**/ ?>