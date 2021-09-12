<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

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
			$this->validate($request, [
				'file' => 'image|mimes:jpeg,png,jpg|max:1024'
			]);
			
			if ($request->file('file')) {
				$file = $request->file('file');
				$nama_file = time()."_".$file->getClientOriginalName();
	
				// folder tempat  file diupload
				$tujuan_upload = 'data_file';
				$file->move($tujuan_upload,$nama_file);
			} else {
				$nama_file = 'default.png';
			}

			$book = new Book();
			$book->judul_buku = $request->judul_buku;
			$book->penulis = $request->penulis;
			$book->penerbit = $request->penerbit;
			$book->stok_buku = $request->stok_buku;
			$book->kategori = $request->kategori;
			$book->gambar_buku = $nama_file;
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
			
			$file = $request->file('file');
			$nama_file = time()."_".$file->getClientOriginalName();

			// folder tempat  file diupload
			$tujuan_upload = 'data_file';
			$file->move($tujuan_upload,$nama_file);
			
			$book = Book::find($id);
			$book->judul_buku = $request->judul_buku;
			$book->penulis = $request->penulis;
			$book->penerbit = $request->penerbit;
			$book->stok_buku = $request->stok_buku;
			$book->kategori = $request->kategori;
			$book->gambar_buku = $nama_file;
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

		public function print_books()
		{
			$books = Book::all();
			$dateNow = Carbon::now()->format('d, M Y');
 
    	$pdf = PDF::loadView('admin.books.books_pdf',[
				'books' => $books,
				'dateNow' => $dateNow
			]);
    	return $pdf->stream('laporan-daftar-buku.pdf');
		}
}
