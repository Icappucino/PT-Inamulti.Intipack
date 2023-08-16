<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Recruitment;


class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan semua job career
        $recruitmentList = DB::table('recruitment')->get();
        return view('recruitment.index',compact('recruitmentList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // mengarahkan ke halaman form
        return view('recruitment.posting');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses input foto diri
        if ($request->hasFile('foto_diri')) {
            $fileFoto = $request->nama . '.' . $request->file('foto_diri')->getClientOriginalExtension();
            $request->file('foto_diri')->move(public_path('img'), $fileFoto);
        } else {
            $fileFoto = '';
        }


        if ($request->hasFile('foto_ktp')) {
            $fileKtp = $request->nama . '.' . $request->file('foto_ktp')->getClientOriginalExtension();
            $request->file('foto_ktp')->move(public_path('img'), $fileKtp);
        } else {
            $fileKtp = '';
        }

        // Proses input file PDF (Ijazah)
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $fileIjazah = $request->nama . '.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move(public_path('pdf'), $fileIjazah);
        } else {
            $fileIjazah = '';
        }

        // Proses input file PDF (Cv)
        if ($request->hasFile('pdf_cv')) {
            $pdfCv = $request->file('pdf_cv');
            $fileCv = $request->nama . '_cv.' . $pdfCv->getClientOriginalExtension();
            $pdfCv->move(public_path('pdf'), $fileCv);
        } else {
            $fileCv = '';
        }

        // Proses input file PDF (Skkb)
        if ($request->hasFile('pdf_skkb')) {
            $pdfSkkb = $request->file('pdf_skkb');
            $fileSkkb = $request->nama . '_skkb.' . $pdfSkkb->getClientOriginalExtension();
            $pdfSkkb->move(public_path('pdf'), $fileSkkb);
        } else {
            $fileSkkb = '';
        }

        // Proses input file PDF (Npwp)
        // Proses input file PDF (NPWP)
        if ($request->hasFile('pdf_npwp')) {
            $pdfNpwp = $request->file('pdf_npwp');
            $fileNpwp = $request->nama . '_npwp.' . $pdfNpwp->getClientOriginalExtension();
            $pdfNpwp->move(public_path('pdf'), $fileNpwp);
        } else {
            $fileNpwp = '';
        }

        // Menambahkan data ke tabel recruitment
        DB::table('recruitment')->insert([
            'nama_recruitment' => $request->nama,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan,
            'no_telp' => $request->nomor,
            'email' => $request->email,
            'foto_diri' => $fileFoto,
            'foto_ktp' => $fileKtp,
            'ijazah' => $fileIjazah,
            'cv' => $fileCv,
            'skkb' => $fileSkkb,
            'npwp' => $fileNpwp,
        ]);
        return redirect('/Beranda');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menampilkan detail id
        $recruitmentList = DB::table('recruitment')
        ->where('id_recruitment','=',$id)->get();
    return view('recruitment.show', compact('recruitmentList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // diarahkan ke halaman edit data
            $data = DB::table('recruitment')
            ->where('id_recruitment','=',$id)->get();
        return view('recruitment.form_edit',compact('data'));
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
        // Proses input foto KTP
        if ($request->hasFile('ktp')) {
            $fileKtp = $request->nama . '.' . $request->ktp->extension();
            $request->ktp->move(public_path('img'), $fileKtp);
        } else {
            $fileKtp = '';
        }
        // Proses input file PDF (Ijazah)
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $fileIjazah = $request->nama . '.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move(public_path('pdf'), $fileIjazah);
        } else {
            $fileIjazah = '';
        }
        // Proses input file PDF (Cv)
        if ($request->hasFile('pdf_cv')) {
            $pdfCv = $request->file('pdf_cv');
            $fileCv = $request->nama . '_cv.' . $pdfCv->getClientOriginalExtension();
            $pdfCv->move(public_path('pdf'), $fileCv);
        } else {
            $fileCv = '';
        }
        // Proses input file PDF (Skkb)
        if ($request->hasFile('pdf_skkb')) {
            $pdfSkkb = $request->file('pdf_skkb');
            $fileSkkb = $request->nama . '_skkb.' . $pdfSkkb->getClientOriginalExtension();
            $pdfSkkb->move(public_path('pdf'), $fileSkkb);
        } else {
            $fileSkkb = '';
        }
        // Proses input file PDF (Npwp)
        if ($request->hasFile('pdf_npwp')) {
            $pdfNpwp = $request->file('pdf_npwp');
            $fileNpwp = $request->nama . '_npwp.' . $pdfNpwp->getClientOriginalExtension();
            $pdfNpwp->move(public_path('pdf'), $fileNpwp);
        } else {
            $fileNpwp = '';
        }
            // Memperbarui data di tabel recruitment berdasarkan id
    DB::table('recruitment')
        ->where('id', $id)
        ->update([
            'nama_recruitment' => $request->nama,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan,
            'no_telp' => $request->nomor,
            'email' => $request->email,
            'foto_diri' => $fileFoto,
            'foto_ktp' => $fileKtp,
            'ijazah' => $fileIjazah,
            'cv' => $fileCv,
            'skkb' => $fileSkkb,
            'npwp' => $fileNpwp,
    ]);
    // Redirect atau lakukan tindakan lain setelah pembaruan
    return redirect()->route('/Recruitment');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data
        DB::table('recruitment')->where('id_recruitment',$id)->delete();
        return redirect('/Recruitment');
    }

}


