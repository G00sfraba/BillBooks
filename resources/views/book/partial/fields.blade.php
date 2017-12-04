<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title" class="col-md-4 col-xs-12 col-sm-4 control-label">Book title:</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="title" type="text" class="form-control" name="title" value="{{  $book->title ?? old('title') }}" required autofocus>

        @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('author_id') ? ' has-error' : '' }}">
    <label for="author_id" class="col-md-4 col-xs-12 col-sm-4 control-label">Select Author</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <select id="author_id" name="author_id" value="{{ $book->author_id ?? old('author_id') }}" class="form-control">                       
            @foreach ($authors as $author)
            <option value="{{$author->id}}" @if (old('author_id') == $author->id || (isset($book) && $book->author_id == $author->id)) selected="selected" @endif>{{$author->name}}</option>                       
            @endforeach                          
        </select>

        @if ($errors->has('author_id'))
        <span class="help-block">
            <strong>{{ $errors->first('author_id') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('purchased') ? ' has-error' : '' }}">
    <label for="purchased" class="col-md-4 col-xs-12 col-sm-4 control-label">Year of purchase</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="purchased" type="number" class="form-control" name="purchased" value="{{$book->purchased ?? old('purchased') }}" required >

        @if ($errors->has('purchased'))
        <span class="help-block">
            <strong>{{ $errors->first('purchased') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
    <label for="cover" class="col-md-4 col-xs-12 col-sm-4 control-label">Cover</label>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <input id="cover" type="file" class="form-control" name="cover" required >

        @if ($errors->has('cover'))
        <span class="help-block">
            <strong>{{ $errors->first('cover') }}</strong>
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

