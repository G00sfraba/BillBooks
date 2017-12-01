<?php

namespace App\Http\Controllers;

use App\Author;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // Return create view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author) {
        // Display db record data view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author) {
        // return edit view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author) {
        // update db record based on user input
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author) {
        // Delete db record
    }

    public function getModal($modal, Request $request) {
        $request->session()->forget('message');
        print json_encode(View('author.partial.' . $modal)->render());
    }

}
