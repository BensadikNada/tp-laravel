<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('search')){
            $books = Book::where('titre', request('search'))->get();
        }else{
            $books= Book::all();
        }

        return view('allLayouts.index')->with(compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('allLayouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('book.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $idBook)
    {
        $book=Book::find($idBook);
        return view('books.show')->with(compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idBook)
    {
        $book=Book::find($idBook);
        return view('books.edit')->with(compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book=Book::find($id);
        $book->update($request->all());
        return redirect()->route('books.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book=Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
