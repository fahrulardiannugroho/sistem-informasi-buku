<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Member;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$borrowings = DB::table('borrowing')
												->join('member', 'borrowing.id_anggota', '=', 'member.id_anggota')
												->join('book', 'borrowing.id_buku', '=', 'book.id_buku')
												->select('borrowing.*', 'member.*', 'book.*')
												->get();
			
			$dateNow = Carbon::now();

      return view('admin.borrowing.index')->with([
				"borrowings" => $borrowings,
				"dateNow" => $dateNow
			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			$members = Member::all();
			$books = Book::all();
			$dateNow = Carbon::now()->toDateString();
			$dateNextToSeventDay = Carbon::now()->addDay(7)->toDateString();
			return view('admin.borrowing.add')->with([
				'members' => $members,
				'books' => $books,
				'dateNow' => $dateNow,
				'dateNextToSeventDay' => $dateNextToSeventDay
			]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$borrowing = new Borrowing();
			$borrowing->id_anggota = $request->id_anggota;
			$borrowing->id_buku = $request->id_buku;
			$borrowing->tanggal_pinjam = $request->tanggal_pinjam;
			$borrowing->tanggal_kembali = $request->tanggal_kembali;
			$borrowing->save();
		
			return redirect('/home/borrowings')->with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$borrowing = DB::table('borrowing')
												->join('member', 'borrowing.id_anggota', '=', 'member.id_anggota')
												->join('book', 'borrowing.id_buku', '=', 'book.id_buku')
												->select('borrowing.*', 'member.*', 'book.*')
												->where('borrowing.id_peminjaman', '=', $id)
												->get()->first();

			return view("admin.borrowing.show")->with("borrowing", $borrowing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
