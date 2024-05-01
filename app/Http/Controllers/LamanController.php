<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Contact;
use App\Models\settingsubmenu;
use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Menggunakan facade Validator

class LamanController extends Controller
{
    public function index()
    {
        $settingsubmenu = settingsubmenu::all();
        $settingabout = about::all();
        $SettingContact = Contact::all(); 
        return view('Laman.index', compact('settingsubmenu', 'settingabout', 'SettingContact'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
            'keperluan' => 'required|string|in:training,belajar',
            'tangggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
        ]);

        // Simpan data tamu ke dalam database
        Tamu::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'keperluan' => $request->keperluan,
            'tangggal' => $request->tangggal,
            'jam' => $request->jam,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data tamu berhasil disimpan.');
    }
}
