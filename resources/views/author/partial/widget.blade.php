<div class="col-md-12 text-center widget">
    <h3>{{$author->name}}</h3>
    <div>{{$author->notes}}</div>
    Num of books:  
    <div class="widget-btns">
        <a class="btn-author-books" author='{{$author->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-book" 
               aria-hidden="true" 
               title="Books" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Open your books collection from {{$author->name}}"></i>
        </a>
        <a class="btn-edit-author" author='{{$author->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-pencil"  
               aria-hidden="true" title="Edit" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Edit the infromation about {{$author->name}}"></i>
        </a>
        <a class="btn-delete-author" author='{{$author->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-trash-o"  
               aria-hidden="true" 
               title="Delete" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Delete this author and all of the books associated with {{$author->name}}"></i>
        </a>
        <div class="clearfix"></div>
    </div>
</div>