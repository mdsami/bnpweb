<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-sm-3 control-label">{{ ' Name' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="{{ $area->name or ''}}" required>
        {!! $errors->first('name', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-sm-3 control-label">{{ 'Address' }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="address" id="address" value="{{ $fari->address or ''}}">{{ $area->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('division_id') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ 'Division' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" name="division_id" id="division" required title="please select a Division">
            @foreach($division as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('division', '<p class="error help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
