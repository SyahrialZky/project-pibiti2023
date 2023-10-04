<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TugasAdmin;
use Illuminate\Http\Request;

class TugasAdminController extends Controller
{
    public function index()
    {
        $tugas = TugasAdmin::all();
        return view("admin.ListTugas")->with("tugas", $tugas);
    }

    public function create()
    {
        return view('admin.BuatTugas');
    }

    public function store(Request $request)
    {
        {
            $request->validate([
                'hari' => 'required',
    
    
            ],[
                'hari.required' => 'tanggal Wajib di isi',
    
            ]);
    
            $data = [
                'urltugas' => $request->urltugas,
                'judul' => $request->judul,
                'hari' => $request->hari
    
            ];

            TugasAdmin::create($data);
            return redirect()->route('TugasAdmin.Index')->with('success', 'Materi berhasil ditambahkan!');
        }
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {        
       
    
    }

    public function delete(string $id)
    {
        TugasAdmin::where("id", $id)->delete();
        return redirect("TugasAdmin/Index")->with("success", "TUGAS TELAH BERHASIL DI HAPUS");
        
    }
}
