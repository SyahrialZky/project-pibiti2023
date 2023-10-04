<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role', '!=', 1);

        if($request->search){
            $users->where('name', 'like', '%' . $request->search . '%');
        }

        $users = $users->get();

        return view("admin.ListUser")->with("user", $users);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();

        if($user){
           User::where("id", $id)->update([
                'role' => 2
            ]);
            return redirect()->route('users.view');
        }
    }

    public function unverification($id)
    {
        $user = User::where('id', $id)->first();

        if($user){
           User::where("id", $id)->update([
                'role' => 0
            ]);
            return redirect()->route('users.view');
        }
    }
}
