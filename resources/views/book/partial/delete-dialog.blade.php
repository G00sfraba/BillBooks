<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h1>Are you sure?</h1>
</div>
<div class="modal-body">
    <div class="">
        <form id="book-modal-form" class="form-horizontal" role="form" method="POST" action="/ajax/book/delete-book/{{$book->id}}"> 
            {{ csrf_field() }}
            <h2>You are going to delete the following record:</h2>
            @include('book.partial.widget',$book)
            <div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left"  data-dismiss="modal">No, Cancel</button>
                <button id="btn-submit" type="button" class="btn btn-success">Yes, Delete</button>
            </div>
        </form>
    </div>
</div>
