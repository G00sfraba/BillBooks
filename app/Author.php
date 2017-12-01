<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    protected $table = 'authors';
    protected $fillable = [
        'name', 'notes', 'user_id'
    ];
    
    public static $_rules = array(
        'name' => 'required|unique:authors',
    );
    
    private $errors;

}
