<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(Request $request)
    {
        $materi = Materi::query();
        return view("admin.ListMateri")->with("materi", $materi);
    }

    public function create()
    {
        return view('admin.BuatMateri');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',

        ]);

        $data = [
            'urlmateri' => $request->urlmateri,
            'judul' => $request->judul,
            'hari' => $request->hari

        ];
        Materi::create($data);
        return redirect()->route('materi.view')->with('success', 'Materi berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        // $query = Materi::where("id", $id)->first();
        // return view("admin.UpdateMateri")->with("query", $query);
        $materi = Materi::where("id", $id)->first();
        // dd($materi->id);
        return view('admin.UpdateMateri', ['materi' => $materi]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'hari' => 'required',


        ], [
            'hari.required' => 'tanggal Wajib di isi',

        ]);


        $data = [
            'urlmateri' => $request->urlmateri,
            'judul' => $request->judul,
            'hari' => $request->hari
        ];


        Materi::where("id", $id)->update($data);
        return redirect()->route('materi.view')->with('success', 'Materi berhasil diupdate!');
    }

    public function delete(string $id)
    {

        Materi::where("id", $id)->delete();
        return redirect()->route('materi.view')->with("success", "MATERI TELAH BERHASIL DI HAPUS");
    }
}
