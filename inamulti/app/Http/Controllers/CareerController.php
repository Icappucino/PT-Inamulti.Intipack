<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan semua job career
        $careerList = DB::table('career')->get();
        return view('career.index', compact('careerList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // mengarahkan ke halaman form
        return view('career.posting');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses input foto diri
        if ($request->hasFile('foto')) {
            $fileFoto = $request->nama . '.' . $request->foto->extension();
            $request->foto->move(public_path('img'), $fileFoto);
        } else {
            $fileFoto = '';
        }
        // Proses input data
        DB::table('career')->insert(
            [
                'nama_career'=>$request->judul,
                'foto'=>$request->$fileFoto,
                'posisi_career'=>$request->posisi,
                'deskripsi_career'=>$request->deskripsi,
            ]
        );
        return redirect('/Admin-Page-Admin-Dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            // menampilkan detail id
            $careerList = DB::table('career')
            ->where('id_career','=',$id)->get();
        return view('career.show', compact('careerList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // diarahkan ke halaman edit data
            $data = DB::table('career')
            ->where('id_career','=',$id)->get();
        return view('career.form_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Proses input foto diri
        if ($request->hasFile('foto')) {
            $fileFoto = $request->nama . '.' . $request->foto->extension();
            $request->foto->move(public_path('img'), $fileFoto);
        } else {
            $fileFoto = '';
        }
        // Memperbarui data di tabel recruitment berdasarkan id
        DB::table('recruitment')
        ->where('id_career', $id)
        ->update([
            'nama_career'=>$request->nama,
            'foto'=>$request->$fileFoto,
            'posisi_career'=>$request->posisi,
            'deskripsi_career'=>$request->deskripsi,
        ]);
    // Redirect atau lakukan tindakan lain setelah pembaruan
    return redirect()->route('/Career');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data
        DB::table('career')-> where('id_career',$id)->delete();
        return redirect('/Career');
    }
}
