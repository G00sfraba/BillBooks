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
        'name' => 'required',
    );
    private $errors;

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);

        $this->user_id = Auth::user()->id;
    }

    public function hasAuthors() {
        return Author::where('user_id', Auth::user()->id)
                        ->count();
    }

    public static function getAuthors() {
        return Author::select('name', 'notes', 'id')
                        ->where('user_id', Auth::user()->id)
                        ->get();
    }

    public static function getAuthorName($id) {
        $result = Author::findOrFail($id);        
        return $result->name;
    }

}
