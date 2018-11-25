<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-sm-3 control-label">{{ 'Phone' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $complain->phone or ''}}" required>
        {!! $errors->first('phone', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('complain') ? 'has-error' : ''}}">
    <label for="complain" class="col-sm-3 control-label">{{ 'Complain' }}</label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="message" id="message" value="{{ $complain->message or ''}}">{{ $complain->message or ''}}</textarea>
        {!! $errors->first('complain', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('thana_id') ? 'has-error' : ''}}">
    <label for="thana" class="col-sm-3 control-label">{{ 'thana' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a thana" name="thana_id" id="thana">
            @foreach($thana as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('thana_id', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fari_id') ? 'has-error' : ''}}">
    <label for="Fari" class="col-sm-3 control-label">{{ 'Fari' }}</label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a fari" name="fari_id" id="fari">
            @foreach($fari as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('fari_id', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    <label for="img" class="col-sm-3 control-label">{{ 'Image' }}</label>
    <div class="col-sm-9">
        <input type="file" id="img" name="img">
        {!! $errors->first('img', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('audio') ? 'has-error' : ''}}">
    <label for="audio" class="col-sm-3 control-label">{{ 'Audio' }}</label>
    <div class="col-sm-9">
        <input type="file" id="audio" name="audio">
        {!! $errors->first('audio', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}">
    <label for="video" class="col-sm-3 control-label">{{ 'Video' }}</label>
    <div class="col-sm-9">
        <input type="file" id="video" name="video">
        {!! $errors->first('video', '<p class="error help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
