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
        'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                        ->orderBy('purchased', 'desc')
                        ->get();
    }

    public static function searchByTitle($title) {
        return Book::where('title', 'LIKE', '%' . $title . '%')
                        ->orderBy('purchased', 'desc')
                        ->get();
    }

    public static function getBooksByAuthor($authorId) {
        return Book::select('author_id', 'user_id', 'title', 'purchased', 'cover', 'notes', 'id')
                        ->where('author_id', $authorId)
                        ->orderBy('purchased', 'desc')
                        ->get();
    }

    public static function authorBooksCount($id) {
        return Book::where('author_id', $id)
                        ->count();
    }

}
