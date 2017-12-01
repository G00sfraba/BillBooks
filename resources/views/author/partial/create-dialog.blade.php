<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h1>Add New Author</h1>
</div>
<div class="modal-body">
    <div class="">

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <form id="author-modal-form" class="form-horizontal" role="form" method="POST" action="/ajax/author/add-author">
            {{ csrf_field() }}

            @include('author.partial.fields')

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button id="btn-submit" type="button" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>
