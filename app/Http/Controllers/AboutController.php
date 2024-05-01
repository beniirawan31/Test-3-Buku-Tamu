<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // about
    public function about()
    {
        $settingabout = About::all();
        return view('dashboard.settingabout', compact('settingabout'));
    }


    public function create1()
    {
        return view('dashboard.settingaboutcreate');
    }

    public function store1(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'icon' => 'image|max:8192|mimes:png,jpg',
            'header' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);

        // Set path ke public/gambar
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $photoFileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/photos', $photoFileName); // Simpan foto di direktori storage/app/public/photos
        }


        // Simpan data baru ke dalam database
        about::create([
            'icon' => $photoFileName, // Menggunakan 'gambar/' karena sudah di dalam direktori public
            'header' => $request->header,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('about')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit1($id)
    {
        // Retrieve the data for editing
        $data = about::findOrFail($id);

        // Pass the data to the edit view
        return view('dashboard.settingaboutedit', compact('data'));
    }



    public function update1(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'icon' => 'image|max:8192|mimes:png,jpg',
            'header' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);

        // Find the record to update
        $data = about::findOrFail($id);

        // Handle file upload if an image is provided
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $photoFileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/photos', $photoFileName); // Store the photo in the 'storage/app/public/photos' directory
            $data->icon = $photoFileName; // Update the icon field
        }

        // Update the other fields
        $data->header = $request->header;
        $data->title = $request->title;
        $data->deskripsi = $request->deskripsi;

        // Save the updated data
        $data->save();

        // Redirect back with success message
        return redirect()->route('about')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete1($id)
    {
        $data = about::findOrFail($id);
        $data->delete();

        return redirect()->route('about')->with('success', 'Data berhasil dihapus!');
    }


}
