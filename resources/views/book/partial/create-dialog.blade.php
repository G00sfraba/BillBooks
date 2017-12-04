<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h1>Add New Book</h1>
</div>
<div class="modal-body">
    <div class="">

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if($authors->isEmpty())

        <DIV> Please add authors first</DIV>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>            
        </div>

        @else
        <form id="book-modal-form" class="form-horizontal" role="form" method="POST" action="/ajax/book/add-book">
            {{ csrf_field() }}

            @include('book.partial.fields')

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button id="btn-submit" type="button" class="btn btn-success">Save</button>
            </div>
        </form>
        @endif
    </div>
</div>
