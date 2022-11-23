@extends('layouts.admin')
@push('stylesheet')
<style>


#toast-container{
    margin-top : 20px;
}

#toast-container > .toast {
  width: 500px !important;
}
</style>
@endpush
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.mapattribute.title_singular') }}
            <a class="btn btn-secondary float-right" href="{{ route('admin.map-attributes.index') }}">
                {{ trans('global.back') }}
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.map-attributes.update', [$mapAttribute->id]) }} " id="attribute-form"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="optCategory">{{ trans('cruds.mapattribute.fields.category') }}</label>
                    <input type="hidden" name="category_id" value="{{ $mapAttribute->category_id }}">
                    <select class="form-control select2 {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id_disabled" id="optCategory">
                        @foreach ($categories as $id => $entry)
                            <option value="{{ $id }}"
                                {{ old('category_id', $mapAttribute->category_id) == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('category_id'))
                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.mapattribute.fields.category_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                        for="optSubCategory">{{ trans('cruds.mapattribute.fields.subcategory') }}</label>
                    <input type="hidden" name="sub_category_id" value="{{ $mapAttribute->sub_category_id }}">
                    <select class="form-control select2 {{ $errors->has('sub_category_id') ? 'is-invalid' : '' }}"
                        name="sub_category_id_disabled" id="optSubCategory">
                        @foreach ($subcategories as $id => $entry)
                            <option value="{{ $id }}"
                                {{ old('sub_category_id', $mapAttribute->sub_category_id) == $id ? 'selected' : '' }}>
                                {{ $entry }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('subcategory_id'))
                        <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.mapattribute.fields.subcategory_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required"
                        for="optSubCategoryChild">{{ trans('cruds.mapattribute.fields.subchildcategory') }}</label>
                    <input type="hidden" name="	sub_category_child_id" value="{{ $mapAttribute->sub_category_child_id }}">
                    <select class="form-control select2 {{ $errors->has('sub_category_child_id') ? 'is-invalid' : '' }}"
                        name="sub_category_id_disabled" id="optSubCategoryChild" >
                        @foreach ($subchildcategories as $id => $entry)
                            <option value="{{ $id }}"
                                {{ old('sub_category_child_id', $mapAttribute->sub_category_child_id) == $id ? 'selected' : '' }}>
                                {{ $entry }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('sub_category_child_id'))
                        <span class="text-danger">{{ $errors->first('sub_category_child_id') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.mapattribute.fields.subcategory_helper') }}</span>
                </div>
                <div class="row">
                    <div class="form-group form-check col-md-2">
                        <input type="hidden" name="is_size" value="0">
                        <input class="form-check-input" type="checkbox" name="is_size" id="is_size" value="1"
                            {{ old('is_size', $mapAttribute->is_size) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="is_size">{{ trans('cruds.mapattribute.fields.is_size') }}</label>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="sizes">{{ trans('cruds.mapattribute.fields.size') }}</label>
                        <a class="badge badge-secondary text-light p-1" onclick="select_all_sizes()" style="cursor: pointer;display:none;" id="select_all_sizes">Select All</a>
                        <a class="badge badge-secondary text-light p-1" onclick="unselect_all_sizes()" style="cursor: pointer;display:none;" id="unselect_all_sizes">Unselect All</a>
                        <select class="form-control select2" name="sizes[]" id="sizes" multiple>
                            @foreach ($sizes as $id => $entry)
                                <option value="{{ $id }}" @if (is_array($mapAttribute->sizes) && in_array($id, $mapAttribute->sizes)) selected @endif>{{ $entry }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">{{ trans('cruds.mapattribute.fields.size_helper') }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-check col-md-2">
                        <input type="hidden" name="is_color" value="0">
                        <input class="form-check-input" type="checkbox" name="is_color" id="is_color" value="1"
                            {{ old('is_color', $mapAttribute->is_color) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="is_color">{{ trans('cruds.mapattribute.fields.is_color') }}</label>
                    </div>
                    <div class="form-group col-md-10">
                        <label for="colors">{{ trans('cruds.mapattribute.fields.color') }}</label>
                        <a class="badge badge-secondary text-light p-1" onclick="select_all_colors()" style="cursor: pointer;display:none;" id="select_all_colors">Select All</a>
                        <a class="badge badge-secondary text-light p-1" onclick="unselect_all_colors()" style="cursor: pointer;display:none;" id="unselect_all_colors">Unselect All</a>
                        <select class="form-control select2" name="colors[]" id="colors" multiple>
                            @foreach ($colors as $id => $entry)
                                <option value="{{ $id }}" @if (is_array($mapAttribute->colors) && in_array($id, $mapAttribute->colors)) selected @endif>{{ $entry }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">{{ trans('cruds.mapattribute.fields.color_helper') }}</span>
                    </div>
                </div>
                <input type="hidden" name="is_attribute" id="is_attribute" value="{{ $mapAttribute->is_attribute }}">
                @foreach ($attributes as $key => $attribute)
                    @php
                        $ischeck = 0;
                        $sattributes = [];
                        if (is_array($mapAttribute->attributes) && isset($mapAttribute->attributes[$attribute->id])) {
                            $ischeck = 1;
                            if (isset($mapAttribute->attributes[$attribute->id]['attributevalues']) && is_array($mapAttribute->attributes[$attribute->id]['attributevalues'])) {
                                $sattributes = $mapAttribute->attributes[$attribute->id]['attributevalues'];
                            }
                        }
                    @endphp
                    <div class="row">
                        <div class="form-group form-check col-md-2">
                            <input type="hidden" name="attribute[{{ $attribute->id }}]" value="0">
                            <input class="form-check-input attributes"  data-number="{{ $attribute->id }}" type="checkbox"
                                name="attributes[{{ $attribute->id }}]" value="1"
                                {{ old('attributes[$attribute->id]', $ischeck) == 1 ? 'checked' : '' }}
                                id="attribute_{{ $attribute->id }}">
                            <label class="form-check-label" for="attribute_{{ $attribute->id }}">
                                {{ $attribute->name ?? '' }}
                            </label>
                        </div>
                        <div class="form-group col-md-10">
                            <label>{{ $attribute->name ?? '' }}</label>
                            <a class="badge badge-secondary text-light p-1" onclick="select_all({{ $attribute->id }})" style="cursor: pointer;{{$ischeck ? '' : 'display:none'}};" id="select_all_{{ $attribute->id }}">Select All</a>
                            <a class="badge badge-secondary text-light p-1" onclick="unselect_all({{ $attribute->id }})" style="cursor: pointer;{{$ischeck ? '' : 'display:none'}};" id="unselect_all_{{ $attribute->id }}">Unselect All</a>
                            <select class="form-control select2"
                                name="attributes[{{ $attribute->id }}][attributevalues][]" multiple id="attributes_{{ $attribute->id }}" @if (!old('attributes[$attribute->id]', $ischeck) == 1) display:none; @endif>
                                @foreach ($attribute->attribute_values as $row)
                                    <option value="{{ $row->id }}" @if (in_array($row->id, $sattributes)) selected @endif>
                                        {{ $row->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach
                <div class="form-group">
                    <label class="required">{{ trans('cruds.size.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status"
                        id="status" required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}</option>
                        @foreach (App\Models\MapAttribute::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}"
                                {{ old('status', $mapAttribute->status) == (string) $key ? 'selected' : '' }}>
                                {{ $label }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.size.fields.status_helper') }}</span>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-warning" id="submit-btn" type="submit">
                        {{ trans('global.update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        let token = "{{ csrf_token() }}";
        let pleaseSelect = "{{ trans('global.pleaseSelect') }}";
        let subCategoryURL = "{{ route('admin.category.subCategories') }}";
    </script>

    <script>
        $(function(){
            if($('#is_size').is(':checked')) {
                $('#sizes').removeAttr( "disabled" );
                $('#select_all_sizes').show();
                $('#unselect_all_sizes').show();
              }else{
                $('#sizes').attr( "disabled",'disabled');
                $('#select_all_sizes').hide();
                $('#unselect_all_sizes').hide();
                if ($('#is_color').prop("checked")) {
                $('#is_color').trigger("click");
                }
                if ($('.attributes').prop("checked")) {
                $('.attributes').trigger("click");
                }
              }

            if($('#is_color').is(':checked')) {
                $('#colors').removeAttr( "disabled" );
                $('#sizes-message').html("")
                $('#select_all_colors').show();
                $('#unselect_all_colors').show();
                }else{
                $('#colors').attr( "disabled",'disabled');
                // $('#sizes-message').html("Please Select Size First")
                $('#select_all_colors').hide();
                $('#unselect_all_colors').hide();
            }

        });

        $('#sizes').on('change', function() {
         if (($('#sizes').val()).length>0) {
            $('#is_color').removeAttr( "disabled" );
         }
        else{
            $('#is_color').attr( "disabled",'disabled');
        }
        });
        $('#colors').on('change', function() {
         if (($(this).val()).length>0) {
            $('.attributes').removeAttr( "disabled" );
         }
        else{
            $('.attributes').attr( "disabled",'disabled');
        }
        });
        function select_all(id){
          $('#attributes_'+id+' option').prop('selected', true);
          $('#attributes_'+id).trigger("change");
        }
        function unselect_all(id){
          $('#attributes_'+id+' option').prop('selected', false);
          $('#attributes_'+id).trigger("change");
        }
        function select_all_sizes(){
          $('#sizes option').prop('selected', true);
          $('#sizes').trigger("change");
        }
        function unselect_all_sizes(){
          $('#sizes option').prop('selected', false);
          $('#sizes').trigger("change");
        }
        function select_all_colors(){
          $('#colors option').prop('selected', true);
          $('#colors').trigger("change");
        }
        function unselect_all_colors(){
          $('#colors option').prop('selected', false);
          $('#colors').trigger("change");
        }
        $(document).ready(function() {
            $('.select-all').click(function(){

            });
            $('#is_size').click(function() {
              if(this.checked) {
                $('#sizes').removeAttr( "disabled" );
                $('#select_all_sizes').show();
                $('#unselect_all_sizes').show();
              }else{
                $('#sizes').attr( "disabled",'disabled');
                $('#select_all_sizes').hide();
                $('#unselect_all_sizes').hide();
                if ($('#is_color').prop("checked")) {
                $('#is_color').trigger("click");
                }
                if ($('.attributes').prop("checked")) {
                $('.attributes').trigger("click");
                }
              }
            });
            $('#is_color').click(function() {
                // console.log();
              if(this.checked && (($('#sizes').val()).length>0)) {
                $('#colors').removeAttr( "disabled" );
                $('#sizes-message').html("")
                $('#select_all_colors').show();
                $('#unselect_all_colors').show();
              }else{
                $('#colors').attr( "disabled",'disabled');
                // $('#sizes-message').html("Please Select Size First")
                $('#select_all_colors').hide();
                $('#unselect_all_colors').hide();
              }
            });
            $('.attributes').click(function() {
                let id = $(this).attr( "data-number" );
                var myid = $(this).attr('id');
                var attributes = <?php echo json_encode($attributes); ?>;
                for(var i = 0; i < attributes.length; i++){
                    if($(`#${myid}`).is(":checked")){
                        if(parseInt(id) !== parseInt(attributes[i].id)){
                            if($(`#attribute_${attributes[i].id}`).is(":checked") && $(`#attributes_${attributes[i].id}`).val().length == 0){
                                $(`#${myid}`).prop('checked', false);
                                // alert('Please enter data in empty attribute first');
                                toastr.error('Error', 'Please enter atleast one value in checked attribute first',{
                                  positionClass: 'toast-top-center',
                                });
                                return;
                            }
                        }
                        else{
                            console.log('match');
                        }
                    }
                }

                if(this.checked && (($('#colors').val()).length>0)) {
                  $('#attributes_'+id).removeAttr( "disabled" );
                  $('#select_all_'+id).show();
                  $('#unselect_all_'+id).show();
                }else{
                  $('#attributes_'+id).attr( "disabled",'disabled');
                  $('#select_all_'+id).hide();
                  $('#unselect_all_'+id).hide();
                }
                $('#is_attribute').val("1");
            });

            $('#category_id').change(function() {
                let parent_id = $(this).val();
                $('#optSubCategoryChild').empty().append(new Option(pleaseSelect));
                if (parent_id) {
                    $.ajax({
                        url: subCategoryURL,
                        data: {
                            _token: token,
                            parent_id: parent_id,
                            exclude:1
                        },
                        method: 'POST',
                        success: function(res) {
                            $('#optSubCategory').empty().append(new Option(pleaseSelect));

                            if (res.success) {
                                res.subCategories.map((item) => {
                                    $('#optSubCategory').append(new Option(item.name, item.id));
                                });
                            } else {
                                swal({
                                    title: "Warning",
                                    text: res.message,
                                    type: "warning",
                                    timer: 3000,
                                    showConfirmButton: false
                                });
                            }
                        },
                        failure: function(status) {
                            console.log(status);
                        }
                    });
                } else {
                    $('#optSubCategory').empty().append(new Option(pleaseSelect));

                }
            });
 let pleaseSelect = "{{ trans('global.pleaseSelect') }}";
            $('#optSubCategory').change(function() {
                let parent_id = $(this).val();

                if (parent_id) {
                    $.ajax({
                        url: subCategoryURL,
                        data: {
                            _token: token,
                            parent_id: parent_id,
                            exclude:1
                        },
                        method: 'POST',
                        success: function(res) {
                            $('#optSubCategoryChild').empty().append(new Option(pleaseSelect));

                            if (res.success) {
                                res.subCategories.map((item) => {
                                    $('#optSubCategoryChild').append(new Option(item.name, item.id));
                                });
                            } else {
                                swal({
                                    title: "Warning",
                                    text: "Child Category not Exists in selected sub category",
                                    type: "warning",
                                    timer: 3000,
                                    showConfirmButton: false
                                });
                            }
                        },
                        failure: function(status) {
                            console.log(status);
                        }
                    });
                } else {
                    $('#optSubCategoryChild').empty().append(new Option(pleaseSelect));
                }
            });
        });
    $(document).on('click', '#submit-btn', function(e) {
        e.preventDefault();
        var error = true;
        var formError = false;

        var category = $(document).find('#category_id').val();
        if (category == '') {
            toast_alert('Category');
            formError = true;
            return;
        }
        var subCategory = $(document).find('#optSubCategory').val();
        if (subCategory == '') {
            toast_alert('Sub-category');
            formError = true;
            return;
        }
        var status = $(document).find('#status').val();
        if (status == '') {
            toast_alert('Status');
            formError = true;
            return;
        }
        if (!formError) {
            document.getElementById("attribute-form").submit();
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
@endsection
