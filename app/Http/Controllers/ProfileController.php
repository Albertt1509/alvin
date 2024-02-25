<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('admin.pages.profile.create',compact('profiles'));
    }
    public function store(Request $request){
       $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar
            'narasi' => 'required',
        ]);
            $gambarPath = $request->file('gambar')->store('profiles', 'public');

            Profile::create([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'gambar' => $gambarPath, 
            'narasi' => $request->narasi,
        ]);
        return redirect()->back()->with('success', 'Profil berhasil disimpan.');
    }
    public function show(Profile $profile){
        $profiles =  Profile::get();
        return view('admin.pages.profile.show',compact('profiles'));
    }
    public function edit(Profile $profile){
        return view('admin.pages.profile.update',compact('profile'));
    }
public function update(Request $request, Profile $profile)
{
    $request->validate([
        'judul' => 'required',
        'nama' => 'required',
        'tanggal' => 'required|date',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah validasi untuk gambar agar bersifat opsional
        'narasi' => 'required',
    ]);

    $updateData = [
        'judul' => $request->judul,
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'narasi' => $request->narasi,
    ];

    // Periksa apakah ada gambar baru yang diunggah
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama
        Storage::disk('public')->delete($profile->gambar);

        // Simpan gambar baru
        $gambarPath = $request->file('gambar')->store('profiles', 'public');
        $updateData['gambar'] = $gambarPath;
    }

    // Perbarui data profil
    $profile->update($updateData);

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
}

    public function delete (Profile $profile){
    Storage::disk('public')->delete($profile->gambar);
    $profile ->delete();
    if($profile){
        return redirect()->back()->with('success', 'Profil berhasil dihapus.');
    }
    else {
        Log::error("Gagal memperbarui profil.");
        return back()->with('error', 'Gagal menghapus profil.');
    }
}
}