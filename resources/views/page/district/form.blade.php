<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-sm-3 control-label">{{ ' Name' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="{{ $district->name or ''}}" required>
        {!! $errors->first('name', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-sm-3 control-label">{{ 'Address' }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="address" id="address" value="{{ $district->address or ''}}">{{ $district->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('division_id') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ 'Division' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a Division" name="division_id" id="division" required>
            @foreach($division as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('division', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ 'Area' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a area" name="area_id" id="area" required>
            @foreach($area as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('area', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zone_id') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ 'Zone' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a zone" name="zone_id" id="zone" required>
            @foreach($zone as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('zone', '<p class="error help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
