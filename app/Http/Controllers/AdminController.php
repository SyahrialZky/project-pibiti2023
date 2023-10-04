<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Token;
use App\Models\TugasUser;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function users(Request $request)
    {
        $user = User::where('role', '!=', 1);

        if($request->search){
            $user->where('name', 'like', '%' . $request->search . '%');
        }

        $user = $user->get();

        return view("admin.ListUser")->with("user", $user);
    }

    public function ExportUser()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function dashboard()
    {
        $user = User::where('role', '!=', 1)->get()->take(5);
        $material = Materi::all()->take(5);
        $taskCount = TugasUser::all()->count();
        $userCount = $user->count();
        $materialCount = $user->count();
        return view('admin.index', [
            'users' => $user,
            'materials' => $material,
            'taskCount' => $taskCount,
            'userCount' => $userCount,
            'materialCount' => $materialCount,
        ]);
    }

    public function BelumVerifikasi()
    {
        $user = User::where('role', 0)->get();
        return view("admin.BelumVerifikasi")->with("user", $user);
    }

    public function SudahVerifikasi()
    {
        User::where('role', 2)->get();
        // return view("admin.SudahVerifikasi")->with("user", $user);
        return redirect()->route('ListUser');
    }

    public function VerifikasiUser($id)
    {
        $user = User::where('id', $id)->first();

        if($user){
           User::where("id", $id)->update([
                'role' => 2
            ]);
            // return redirect("ListUser/BelumVerifikasi")->with("success", "user telah di verifikasi");
            return redirect()->route('ListUser');
        }
    }

    public function UnVerifikasiUser($id)
    {
        $user = User::where('id', $id)->first();

        if($user){
           User::where("id", $id)->update([
                'role' => 0
            ]);
            // return redirect("ListUser/BelumVerifikasi")->with("success", "user telah di verifikasi");
            return redirect()->route('ListUser');
        }
    }

    public function token()
    {
        $today = Carbon::today();

        $dates = ["1" => '2023-09-12', "2" => '2023-09-13', "3" => '2023-09-14', "4" => '2023-09-15']; // Contoh tanggal dalam format "ymd"
        $now = Carbon::now()->format('Y-m-d');


        $hari = 0;
        foreach ($dates as $index => $date) {
            if ($now == $date) {
                $hari = $index;
            }
        }

        $tokens = Token::where('hari', $hari)->get();

        return view('admin.token', compact('tokens'));
    }

    public function tokenAktivasi($id)
    {
        $token = Token::find($id);

        if ($token) {
            $token->update([
                'expired' => Carbon::now()->addHour(),
            ]);

            // var_dump(Carbon::now()->addHour());die;

            return redirect("token")->with('success', 'Token berhasil diaktifkan.');
            // return redirect()->route('token.index')->with('success', 'Token berhasil diaktifkan.');
        }

        return redirect("token")->with('error', 'Token tidak ditemukan.');
        // return redirect()->route('token.index')->with('error', 'Token tidak ditemukan.');
    }
}
