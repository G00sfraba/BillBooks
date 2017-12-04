<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Book::$rules);

        if ($validator->fails()) {

            Input::flashExcept('password');
            $result['view'] = View('book.partial.create-dialog')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'))
                    ->render();
        } else {
            $book = new Book(Input::all());
            if (Input::hasFile('cover')) {
                $file = Input::file('cover');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->cover->move(public_path('covers'), $fileName);

                $book->cover = $fileName;
            }
            $book->save();

            $result['status'] = 1;
            $result['bookId'] = $book->id;
            $result['message'] = 'add.book.success';
        }
        print json_encode($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
        $book = Book::findOrFail($id);

        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Book::$rules);

        if ($validator->fails()) {
            Input::flashExcept('password');
            $result['view'] = View('author.partial.edit-dialog')
                    ->withErrors($validator)
                    ->with('author', $book)
                    ->withInput(Input::except('password'))
                    ->render();
        } else {
            if (Input::hasFile('cover')) {
                $file = Input::file('cover');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->cover->move(public_path('covers'), $fileName);

                $book->cover = $fileName;
            }
            $book->title = Input::get('title');
            $book->author_id = Input::get('author_id');
            $book->purchased = Input::get('purchased');
            $book->notes = Input::get('notes');
            $book->save();

            $result['status'] = 1;
            $result['book'] = $book->id;
            $result['message'] = 'update.book.success';
        }

        print json_encode($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Book::destroy($id);

        $result['status'] = 1;
        $result['orderItemId'] = $id;
        $result['message'] = 'delete.book.success';

        print json_encode($result);
    }

    public function getModal($modal, $id = null, Request $request) {
        $viewData = _buildViewData();
        $request->session()->forget('message');

        if (isset($id)) {
            $viewData['book'] = Book::findOrFail($id);
            print json_encode(View('book.partial.' . $modal)->with('book', $viewData)->render());
        } else {
            print json_encode(View('book.partial.' . $modal)->render());
        }
    }

    private function _buildViewData() {
        $viewData = null;
        $viewData['authors'] = Author::getAuthors();

        return $viewData;
    }

}
