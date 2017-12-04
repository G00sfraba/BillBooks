@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-default btn-new-author" data-toggle="modal" data-target="#primaryModal">Add Author</a>
                    <a class="btn btn-default btn-new-book" data-toggle="modal" data-target="#primaryModal">Add Book</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!$authors->isEmpty())
                        @foreach ($authors as $key => $author)                            
                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="row">
                                    @include('author.partial.widget', $author)
                                </div>
                            </div>       
                        @endforeach  
                    @else
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                Please add Authors to this list!
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
