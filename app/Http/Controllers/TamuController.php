<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index()
    {
        $data = Tamu::all();
        return view('tamu.index', compact('data'));
    }
}
