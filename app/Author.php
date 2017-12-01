<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Author extends Model {

    protected $table = 'authors';
    protected $fillable = [
        'name', 'notes', 'user_id',
    ];

       
    public static $rules = array(
        'name' => 'required|unique:authors',
    );
    
    private $errors;

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);

        $this->user_id = Auth::user()->id;
    }
    
    public function hasAuthors(){        
        return  Author::where('user_id',Auth::user()->id )->count();
    }

}
