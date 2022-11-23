<select class="form-select custome-form-select citySelect" id="validationCustom05" name="city">
    <option selected="" disabled="" value="">Choose...</option>
    @foreach($cities as $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
</select>