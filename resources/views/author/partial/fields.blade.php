<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 col-xs-12 col-sm-4 control-label">Author name:</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="name" type="text" class="form-control" name="name" value="{{  $author->name ?? old('name') }}" required autofocus>

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
    <label for="notes" class="col-md-4 col-xs-12 col-sm-4 control-label">Notes</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="notes" type="text" class="form-control" name="notes" value="{{ $author->notes ?? old('notes') }}" required >

        @if ($errors->has('notes'))
        <span class="help-block">
            <strong>{{ $errors->first('notes') }}</strong>
        </span>
        @endif
    </div>
</div>
