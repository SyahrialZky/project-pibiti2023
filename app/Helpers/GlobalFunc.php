<?php
namespace App\Helpers;

class GlobalFunc
{
    public $menu = [
        'admin' => [
                [
                    'title' => "Daftar Absen",
                    'url' => "/admin/absen" 
                ],
                [
                    'title' => "logout",
                    'url' => "/logout" 
                ]
        ],

        'peserta' => [
            [
                'title' => "Absen Peserta",
                'url' => "/peserta/absen" 
            ],
            [
                'title' => "logout",
                'url' => "/logout" 
            ]
        ]

    ];
    
    public function getMenu($role)
    {
        if($role == 1){
            return $this->menu['admin'];
        }else{
            return $this->menu['peserta'];
        }
    }

    //  public function startQueryLog()
    //  {
    //        \DB::enableQueryLog();
    //  }

    //  public function showQueries()
    //  {
    //       dd(\DB::getQueryLog());
    //  }

     public static function instance()
     {
         return new GlobalFunc();
     }
}