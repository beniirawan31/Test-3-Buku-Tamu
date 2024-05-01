<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\settingsubmenu;
use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the count of guests per month for the current year
        $guestsPerMonth = Tamu::select(
            DB::raw("COUNT(*) as count"),
            DB::raw("MONTH(tangggal) as month")
        )
        ->whereYear('tangggal', date('Y'))
        ->groupBy(DB::raw("MONTH(tangggal)"))
        ->orderBy(DB::raw("MONTH(tangggal)"))
        ->get();
        // Initialize labels for all months
        $labels = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        // Initialize data for all months with count 0
        $data = array_fill(0, 12, 0);

        // Update data for months where guests are present
        foreach ($guestsPerMonth as $guest) {
            $data[$guest->month - 1] = $guest->count;
        }

        // Additional data for the second chart
        $labels2 = $labels;
        $data2 = $data; // You can replace this with data specific to the second chart

        return view('dashboard.index', compact('labels', 'data', 'labels2', 'data2'));
    }


    public function setting(){
        $settingsubmenu = settingsubmenu::all();
        return view('dashboard.setting', compact('settingsubmenu'));
    }


    public function create()
    {
        return view('dashboard.settingcreate');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $request->validate([
            'icon' =>'image|max:8192|mimes:png,jpg',
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
        settingsubmenu::create([
            'icon' => $photoFileName, // Menggunakan 'gambar/' karena sudah di dalam direktori public
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('setting')->with('success', 'Data berhasil ditambahkan!');
    }


    public function edit($id)
    {
        // Retrieve the data for editing
        $data = settingsubmenu::findOrFail($id);

        // Pass the data to the edit view
        return view('dashboard.settingedit', compact('data'));
    }



    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'icon' => 'image|max:8192|mimes:png,jpg',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);

        // Find the record to update
        $data = settingsubmenu::findOrFail($id);

        // Handle file upload if an image is provided
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $photoFileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/photos', $photoFileName); // Store the photo in the 'storage/app/public/photos' directory
            $data->icon = $photoFileName; // Update the icon field
        }

        // Update the other fields
        $data->title = $request->title;
        $data->deskripsi = $request->deskripsi;

        // Save the updated data
        $data->save();

        // Redirect back with success message
        return redirect()->route('setting')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $data = settingsubmenu::findOrFail($id);
        $data->delete();

        return redirect()->route('setting')->with('success', 'Data berhasil dihapus!');
    }



}
