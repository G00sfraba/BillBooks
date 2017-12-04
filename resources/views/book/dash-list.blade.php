@extends('layouts.app')

@section('content')

@foreach($books as $book)
<div class="col-md-4 col-sm-4 col-xs-12">
    @include('book.partial.widget', $book)
</div>

@endforeach


@endsection