<select class="form-select" name="service_id" id="basicSelect">
    @foreach($services as $serve)
        <option value="{{$serve->service_id}}">{{$serve->name}}</option>
    @endforeach
</select>
