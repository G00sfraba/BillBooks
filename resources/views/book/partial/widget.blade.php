<div class="col-md-12 text-center widget">
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
        <a class="btn-delete-book" book='{{$book->id}}'>
            <i class="fa fa-calendar"  
               aria-hidden="true" 
               title="Year" 
               data-toggle="popover" 
               data-placement="top" 
               data-trigger="hover" 
               data-content="Year of purchase {{$book->purchased}}"> {{$book->purchased}}</i>
        </a>
        <div class="clearfix"></div>
    </div>
    <h3>{{$book->title}}</h3>
    <div>{{App\Author::getAuthorName($book->author_id)}}</div> 
    <img src="{{URL::asset('/covers/'.$book->cover)}}" class="book-cover">
    <div class="notes" 
         title="Notes" 
         data-toggle="popover" 
         data-placement="top" 
         data-trigger="hover" 
         data-content="{{$book->notes}}">{{$book->notes}}</div>   
    <div class="clearfix"></div>
</div>