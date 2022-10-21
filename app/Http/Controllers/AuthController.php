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
}
