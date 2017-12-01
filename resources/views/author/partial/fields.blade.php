<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 col-xs-12 col-sm-4 control-label">Author name:</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-md-4 col-xs-12 col-sm-4 control-label">Адрес</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required >

        @if ($errors->has('address'))
        <span class="help-block">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
        @endif
    </div>
</div>
