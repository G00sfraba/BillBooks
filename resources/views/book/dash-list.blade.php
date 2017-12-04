@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                   <div class="panel-body">
                    <h4>Books List</h4>   
                    @if(!$books->isEmpty())
                        @foreach ($books as $key => $book)                            
                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="">
                                    @include('book.partial.widget', $book)
                                </div>
                            </div>       
                        @endforeach  
                    @else
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                 Nope, you don't have any books yet.
                            </div>
                        </div>
                    @endif   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection