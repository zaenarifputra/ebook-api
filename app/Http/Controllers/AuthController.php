<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120236,
            'Name' => 'Zaenarif Putra Ainurdin',
            'Phone' => '08156560071',
            'Class' => 'XII RPL 7'
        ];
    }

    public function author(){
        return [
            'Name' => 'Zaenarif Putra',
            'Date_Of_Brith' => ' 23 Januari 2005',
            'Place_Of_Brith' => 'Banyumas',
            'Gender' => 'Laki - Laki',
            'Email' => 'put@gmail.com',
            'Hp' => 6208156560071
        ];
    }
}


