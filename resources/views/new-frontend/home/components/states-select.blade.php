<select class="form-select custome-form-select stateSelect" id="validationCustom05" name="state_id">
    <option selected="" disabled="" value="">Choose...</option>
    @foreach($states as $state)
        <option value="{{$state->id}}">{{$state->name}}</option>
    @endforeach
</select>