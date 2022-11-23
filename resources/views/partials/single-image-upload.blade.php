<label class="{{ $required }}">
    {{ $lable_name }}
</label>
<input type="hidden" value="{{ $image_url }}">
<div class="custom-file">
    <input type="file" class="custom-file-input" id="fileImage" name="{{ $input_name }}" accept="image/*"
        onchange="imagePreview(this, '{{ $image_view_name }}', '{{ $image_error_name }}')" {{ $required }} />
    <label class="custom-file-label" for="fileImage">Choose Image/Pdf</label>
    <span class="text-warning">* PDF/Image size should be maximum 2MB.</span>
                        
</div>
<p class="text-danger" style="display: none;" id="{{ $image_error_name }}"></p>
<div style="padding-top:15px">
    @if ($image_url)
        @php 
            $string = $image_url;
            $pieces = explode('.', $string);
            $last_word = array_pop($pieces);
        @endphp
        @if($last_word == "pdf") 
            <a href="{{ $image_url }}"> Click to Open PDf</a>
        @else
            <a href="{{ $image_url }}" target="_blank">
            <img onerror="handleError(this);"src="{{ $image_url ?? '' }}" width="120px" height="150px" />
        @endif
    @else
        <img onerror="handleError(this);"id="{{ $image_view_name }}" src="" class="single-image-preview" style="display: none;" />
    @endif
</div>
