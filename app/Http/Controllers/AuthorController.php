<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AuthorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // Display authors list
    }

    public function store(Request $request) {

        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Author::$rules);

        if ($validator->fails()) {

            Input::flashExcept('password');
            $result['view'] = View('author.partial.create-dialog')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'))
                    ->render();
        } else {
            $author = new Author(Input::all());

            $author->save();

            $result['status'] = 1;
            $result['authorId'] = $author->id;
            $result['message'] = 'add.author.success';
        }
        print json_encode($result);
    }

//    public function show(Author $author) {
//        // Display db record data view
//    }

    public function update($id) {
        $author = Author::findOrFail($id);

        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Author::$rules);

        if ($validator->fails()) {
            Input::flashExcept('password');
            $result['view'] = View('author.partial.edit-dialog')
                    ->withErrors($validator)
                    ->with('author', $author)
                    ->withInput(Input::except('password'))
                    ->render();
        } else {
            $author->name = Input::get('name');
            $author->notes = Input::get('notes');
            $author->save();

            $result['status'] = 1;
            $result['author'] = $author->id;
            $result['message'] = 'update.author.success';
        }

        print json_encode($result);
    }

    public function destroy($id) {
        Author::destroy($id);

        $result['status'] = 1;
        $result['orderItemId'] = $id;
        $result['message'] = 'delete.author.success';

        print json_encode($result);
    }

    public function getModal($modal, $id = null, Request $request) {
        $request->session()->forget('message');

        if (isset($id)) {
            $author = Author::findOrFail($id);
            print json_encode(View('author.partial.' . $modal)
                                    ->with('author', $author)
                                    ->render());
        } else {
            print json_encode(View('author.partial.' . $modal)
                                    ->render());
        }
    }

    public function displayBooks($author_id) {
        return view('book.dash-list', ['books' => Book::getBooksByAuthor($author_id)]);
    }

}
