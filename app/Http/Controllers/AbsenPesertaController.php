<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Tugas;
use App\Models\TugasUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsenPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::now();
        $dates = ["1" => '2023-09-12', "2" =>'2023-09-13', "3" =>'2023-09-14', "4" =>'2023-09-15'];
        $now = $today->format('Y-m-d');


        $hari = 0;
        foreach ($dates as $index => $date) {
            if($now == $date){
                $hari = $index;
            }
        }

        return redirect('peserta/day/'.$hari);

        // $global = \GlobalFunc::instance();

        // $menu = $global->getMenu(2);

        // $model = new Absen();

        // $absen_today = $model->getAbsenUserToday();

        // $tugasHariIni = Tugases::where('hari', date('Y-m-d'))->first();

        // return view('absen-peserta.index', [
        //     'menu' => $menu,
        //     'absen_today' => $absen_today
        // ]);
    }

    public function day($day)
    {
        $global = \GlobalFunc::instance();

        $menu = $global->getMenu(2);

        $model = new Absen();

        $absen_today = $model->getAbsenUserToday($day);

        $tugasHariIni = TugasUser::where('hari', $day)->first();

        return view('absen-peserta.index', [
            'menu' => $menu,
            'absen_today' => $absen_today,
            'tugasHariIni' => $tugasHariIni,
            'day' => $day
        ]);
    }

    public function submitAbsen(Request $request, $day)
    {
        $model = new Absen();
        $token = $request->token;
        $response = $model->submitAbsen($token, $day);

        if ($response['status'] == 1) {
            return redirect()->to('peserta/day/' . $day)->with('success', 'Absen berhasil!');
        } else {
            return redirect()->to('peserta/day/' . $day)->with('warning', 'Absen gagal!');
        }
    }

    public function submitTugas(Request $request,$day)
    {
        $model = new Absen();

        // var_dump($request->token);die;

        $url1 = $request->input('url1');
        $url2 = $request->input('url2');
        $url3 = $request->input('url3');

        $tugasHariIni = Tugas::where('hari', $day)->first();

        if ($tugasHariIni) {
            $tugasHariIni->delete();
        }

        // Simpan tugas baru ke dalam database
        Tugas::create([
            'user_id' => auth()->user()->id,
            'url1' => $url1,
            'url2' => $url2,
            'url3' => $url3,
            'hari' => $day,
        ]);

        return redirect('peserta/day/'.$day)->with('success', 'Tugas berhasil disimpan.');

        // $response = $model->submit();

        // if($response['status'] == 1){
        //     return redirect('peserta')->with('success', 'Absen berhasil!');;
        // }else{
        //     return redirect('peserta')->with('warning', 'Absen gagal!');;
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Absence $Absence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absence $Absence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absence $Absence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absence $Absence)
    {
        //
    }
}
