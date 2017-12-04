<div class="col-md-12 text-center widget">
    <h3>{{$book->title}}</h3>
    <div>{{$book->author_id}}</div>
    <div>Purchased: {{$book->purchased}}</div>
    <img src="{{URL::asset('/covers/'.$book->cover)}}" class="book-cover">
    <div class="notes" 
         title="Notes" 
         data-toggle="popover" 
         data-placement="top" 
         data-trigger="hover" 
         data-content="{{$book->notes}}">{{$book->notes}}</div>    

    <div class="widget-btns">
        <a class="btn-edit-book" book='{{$book->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-pencil"  
               aria-hidden="true" title="Edit" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Edit the infromation about {{$book->title}}"></i>
        </a>
        <a class="btn-delete-book" book='{{$book->id}}' data-toggle="modal" data-target="#primaryModal">
            <i class="fa fa-trash-o"  
               aria-hidden="true" 
               title="Delete" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Delete this book {{$book->title}}"></i>
        </a>
        <div class="clearfix"></div>
    </div>
</div>