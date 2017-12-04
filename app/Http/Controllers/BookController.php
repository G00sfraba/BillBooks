<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class BookController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

    public function store(Request $request) {
        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Book::$rules);

        if ($validator->fails()) {

            Input::flashExcept('password');
            $result['view'] = View('book.partial.create-dialog', $this->_buildViewData())
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

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $viewData = $this->_buildViewData();
        $result['status'] = 0;
        $validator = Validator::make(Input::all(), Book::$rules);

        if ($validator->fails()) {
            Input::flashExcept('password');
            $result['view'] = View('book.partial.edit-dialog')
                    ->withErrors($validator)
                    ->with('book', $book)
                    ->with('authors', $viewData['authors'])
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

    public function destroy($id) {
        Book::destroy($id);

        $result['status'] = 1;
        $result['orderItemId'] = $id;
        $result['message'] = 'delete.book.success';

        print json_encode($result);
    }

    public function getModal($modal, $id = null, Request $request) {
        $viewData = $this->_buildViewData();
        $request->session()->forget('message');

        if (isset($id)) {
            $viewData['book'] = Book::findOrFail($id);
            print json_encode(View('book.partial.' . $modal)
                                    ->with('book', $viewData['book'])
                                    ->with('authors', $viewData['authors'])
                                    ->render());
        } else {
            print json_encode(View('book.partial.' . $modal)
                                    ->with('authors', $viewData['authors'])
                                    ->render());
        }
    }

    public function searchByTitle() {
        $input = Input::all();
        return view('book.dash-list', ['books' => Book::searchByTitle($input['search'])]);
    }

    private function _buildViewData() {
        $viewData = null;
        $viewData['authors'] = Author::getAuthors();
        return $viewData;
    }

}
