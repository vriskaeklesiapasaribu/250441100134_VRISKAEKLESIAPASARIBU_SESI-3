<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    private function daftarSewa()
    {
        return [
            [
                'id' => '1',
                'platnomor' => 'BK2314L',
                'merek' => 'Scoopy',
                'jenis' => 'Yamaha'
            ],
        ];
    }
}