<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hari',
    ];

    public function submitAbsen($token,$day)
    {

        // $today = Carbon::now();
        // $dates = ["1" => '2023-09-12', "2" =>'2023-09-13', "3" =>'2023-09-14', "4" =>'2023-09-15'];
        // $now = $today->format('Y-m-d');


        // $hari = 0;
        // foreach ($dates as $index => $date) {
        //     if($now == $date){
        //         $hari = $index;
        //     }
        // }

        $tokens = Token::where('hari', $day)->get();


        if($tokens[0]["token"] == $token){
            Absen::create([
                'user_id' => auth()->user()->id,
                'hari' => $day,
            ]);
        }

        return [
            'status' => 1
        ];
    }

    public function getAbsenUserToday($day)
    {
        $data = $this->where('user_id',auth()->user()->id)
                     ->where('hari', $day)
                     ->first();

        return $data;
    }

    public function getAbsenAll()
    {
        $user = new UserModel();

        $users = $user->where('role',2)
                      ->get()
                      ->toArray();

        $data = [];
        foreach($users as $key => $value){
            $data[$key] = $value;
            $data[$key]['absens'][1] = DB::select('SELECT * FROM absens WHERE user_id = '.$value['id'].' AND DATE(created_at) = "2023-08-12"');
            $data[$key]['absens'][2] = DB::select('SELECT * FROM absens WHERE user_id = '.$value['id'].' AND DATE(created_at) = "2023-08-13"');
            $data[$key]['absens'][3] = DB::select('SELECT * FROM absens WHERE user_id = '.$value['id'].' AND DATE(created_at) = "2023-08-14"');
            $data[$key]['absens'][4] = DB::select('SELECT * FROM absens WHERE user_id = '.$value['id'].' AND DATE(created_at) = "2023-08-15"');
        }

        // $data = DB::select('SELECT * FROM users LEFT JOIN absens ON users.id = absens.user_id WHERE role = "2"');

        // echo "<pre>";
        // var_dump($data);die;
        return $data;
    }

    public function getTokenToday(){
        
    }
}
