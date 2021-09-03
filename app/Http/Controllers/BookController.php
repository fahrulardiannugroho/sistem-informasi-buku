<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$books = Book::all();
      return view('admin.books.index')->with("books", $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$book = new Book();
			$book->judul_buku = $request->judul_buku;
			$book->penulis = $request->penulis;
			$book->penerbit = $request->penerbit;
			$book->stok_buku = $request->stok_buku;
			$book->kategori = $request->kategori;
			$book->save();
		
			return redirect('/home/books')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$book = Book::find($id);
			return view("admin.books.show")->with("book", $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			$book = Book::find($id);
			return view("admin.books.edit")->with("book", $book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$book = Book::find($id);
			$book->judul_buku = $request->judul_buku;
			$book->penulis = $request->penulis;
			$book->penerbit = $request->penerbit;
			$book->stok_buku = $request->stok_buku;
			$book->kategori = $request->kategori;
			$book->update();
		
			return redirect('/home/books')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
			$book = Book::find($id);
  		$book->delete();

      return redirect('home/books')->with('success', 'data berhasil dihapus');
    }
}
