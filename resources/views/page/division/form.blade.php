<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-sm-3 control-label">{{ ' Division Name' }}</label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="{{ $division->name or ''}}" required>
        {!! $errors->first('name', '<p class="error help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
