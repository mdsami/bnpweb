<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-sm-3 control-label">{{ ' Name' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="{{ $fari->name or ''}}" required>
        {!! $errors->first('name', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ ' Phone' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $fari->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-sm-3 control-label">{{ 'Address' }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="address" id="address" value="{{ $fari->address or ''}}">{{ $fari->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('oc') ? 'has-error' : ''}}">
    <label for="oc" class="col-sm-3 control-label">{{ ' OC' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="oc" type="text" id="oc" value="{{ $fari->oc or ''}}" required>
        {!! $errors->first('oc', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('long') ? 'has-error' : ''}}">
    <label for="oc" class="col-sm-3 control-label">{{ ' Longitude' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="long" type="text" id="long" value="{{ $fari->long or ''}}" required>
        {!! $errors->first('long', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
    <label for="lat" class="col-sm-3 control-label">{{ ' Latitude' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="lat" type="text" id="lat" value="{{ $fari->lat or ''}}" required>
        {!! $errors->first('lat', '<p class="error help-block">:message</p>') !!}
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
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select an area" name="area_id" id="area" required>
            @foreach($area as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('area', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zone_id') ? 'has-error' : ''}}">
    <label for="district" class="col-sm-3 control-label">{{ 'Zone' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a zone" name="zone_id" id="zone" required>
            @foreach($zone as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('zone_id', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('district_id') ? 'has-error' : ''}}">
    <label for="district" class="col-sm-3 control-label">{{ 'District' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a district" name="district_id" id="district" required>
            @foreach($district as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('district_id', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('thana_id') ? 'has-error' : ''}}">
    <label for="thana" class="col-sm-3 control-label">{{ 'thana' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a thana" name="thana_id" id="thana" required>
            @foreach($thana as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('thana_id', '<p class="error help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
