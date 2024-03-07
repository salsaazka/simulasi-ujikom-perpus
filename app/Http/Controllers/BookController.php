<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBook = Book::all();
        return view('book.index', compact('dataBook'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Tambahkan validasi untuk jenis file dan ukuran maksimum
        ]);

        $image = $request->file('image');
        $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();

        $dPath = public_path('/assets/img/data/');
        $image->move($dPath, $imgName);

       Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'image' => $imgName,
            'publisher' => $request->publisher,
            'year' => $request->year,
        ]);

        return redirect()->route('book.index')->with('addBook', 'Berhasil menambahkan daftar buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataBook = Book::where('id', $id)->first();
        return view('book.edit', compact('dataBook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Perubahan validasi untuk memperbolehkan file kosong saat edit
        ]);
    
        $book = Book::find($id);
    
        if ($request->hasFile('image')) {
            if ($book->image) {
                $oldImagePath = public_path('/assets/img/data/') . $book->image;
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            // Proses upload gambar baru
            $image = $request->file('image');
            $imgName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/img/data/'), $imgName);
    
            $book->update([
                'image' => $imgName,
            ]);
        }
        $book->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'year' => $request->year,
        ]);
        return redirect('/book')->with('editBook', 'Data buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/book')->with('deleteBook', 'Data buku berhasil dihapus');
    }
}
