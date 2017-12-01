@extends('layouts.app')

@section('content')

@foreach($authors as $author)
<div class="col-md-4 col-sm-4 col-xs-12">
    @include('author.partial.widget', $author)
</div>

@endforeach


@endsection