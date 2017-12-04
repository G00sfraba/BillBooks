<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model {

    protected $table = 'books';
    protected $fillable = [
        'author_id', 'user_id', 'title', 'purchased', 'cover', 'notes',
    ];
    public static $rules = array(
        'title' => 'required',
        'author_id' => 'required',
        'purchased' => 'required|integer',
        'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    );
    private $errors;

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);

        $this->user_id = Auth::user()->id;
    }

    public function hasBooks() {
        return Book::where('user_id', Auth::user()->id)
                        ->count();
    }

    public static function getBooks() {
        return Book::select('author_id', 'user_id', 'title', 'purchased', 'cover', 'notes', 'id')
                        ->where('user_id', Auth::user()->id)
                        ->get();
    }

    public static function getBooksByAuthor($authorId) {
        return Book::select('author_id', 'user_id', 'title', 'purchased', 'cover', 'notes', 'id')
                        ->where('author_id', $authorId)
                        ->get();
    }

}
