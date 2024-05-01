<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function contac()
    {
        $SettingContact = Contact::all();
        return view('dashboard.SettingContact', compact('SettingContact'));
    }


    public function create2()
    {
        return view('dashboard.SettingContactCreate');
    }

    public function store2(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'header' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        // Simpan data baru ke dalam database
        Contact::create([
            'header' => $request->header,
            'title' => $request->title,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('contac')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit2($id)
    {
        // Retrieve the data for editing
        $data = Contact::findOrFail($id);

        // Pass the data to the edit view
        return view('dashboard.SettingContactEdit', compact('data'));
    }



    public function update2(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'header' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        // Find the record to update
        $data = Contact::findOrFail($id);

        // Update the other fields
        $data->header = $request->header;
        $data->title = $request->title;
        $data->phone = $request->phone;
        $data->email = $request->email;

        // Save the updated data
        $data->save();

        // Redirect back with success message
        return redirect()->route('contac')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete2($id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();

        return redirect()->route('about')->with('success', 'Data berhasil dihapus!');
    }

}
