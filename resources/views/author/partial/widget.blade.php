<div class="col-md-12 text-center widget">
    <div class="widget-btns">
        <a href="/author/{{$author->id}}/" class="btn-author-books">
            <i class="fa fa-book" 
               aria-hidden="true" 
               title="Books" 
               data-toggle="popover" 
               data-placement="bottom" 
               data-trigger="hover" 
               data-content="Open your books collection from {{$author->name}}"> {{App\Book::authorBooksCount($author->id)}}</i>
        </a>
        <a class="btn-edit-author" author='{{$author->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-pencil"  
               aria-hidden="true" title="Edit" 
               data-toggle="popover" 
               data-placement="bottom" 
               data-trigger="hover" 
               data-content="Edit the infromation about {{$author->name}}"></i>
        </a>
        <a class="btn-delete-author" author='{{$author->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-trash-o"  
               aria-hidden="true" 
               title="Delete" 
               data-toggle="popover" 
               data-placement="bottom" 
               data-trigger="hover" 
               data-content="Delete this author and all of the books associated with {{$author->name}}"></i>
        </a>
        <div class="clearfix"></div>
    </div>
    <h3>{{$author->name}}</h3>
    <div class="notes" 
         title="Notes" 
         data-toggle="popover" 
         data-placement="top" 
         data-trigger="hover" 
         data-content="{{$author->notes}}">{{$author->notes}}</div>    

</div>