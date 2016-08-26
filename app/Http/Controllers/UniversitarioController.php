<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class UniversitarioController extends Controller
{
    	public function index()
	{
		     //Select all records from books table via Book method
		$allBooks = Alumno::all();    //Eloquent ORM method to return all matching results
        
        //Redirecting to bookList.blade.php with $allBooks       
        return View('books.bookList', compact('allBooks'));


    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //Redirecting to addBook.blade.php 
		return view('universitarios.addUniversitario');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PublishBookRequest $requestData)
	{
        //Insert Query
        $book = new Alumno;
        $book->title= $requestData['title'];
        $book->description= $requestData['description'];
        $book->author= $requestData['author'];
        $book->save();

        //Send control to index() method where it'll redirect to bookList.blade.php
        
        //Mail::send('emails.welcome', $data, function ($message) {

        Mail::raw('Text to e-mail', function ($message) {
          $message->from('us@example.com', 'Laravel');

          $message->to('foo@example.com')->cc('bar@example.com');
        });
        return redirect()->route('book.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
