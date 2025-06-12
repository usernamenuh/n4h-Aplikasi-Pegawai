<?php

namespace App\Http\Controllers;
use App\Models\pegawai;
use Database\Seeders\PegawaiSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PegawaiController extends Controller
{
    public function index()
{
    $pegawai = pegawai::with('user')->get();
    return view('pegawai.index', compact('pegawai'));
}

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
     $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'jabatan' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
     ], [
        'name.required' => 'Nama pegawai tidak boleh kosong',
        'email.required' => 'Email pegawai tidak boleh kosong',
        'email.unique' => 'Email pegawai sudah terdaftar',
        'email.email' => 'Email pegawai tidak valid',
        'jabatan.required' => 'Jabatan pegawai tidak boleh kosong',
        'alamat.required' => 'Alamat pegawai tidak boleh kosong',
        'jenis_kelamin.required' => 'Jenis kelamin pegawai tidak boleh kosong',
        'jenis_kelamin.in' => 'Jenis kelamin pegawai harus Laki-Laki atau Perempuan',
     ]);

     $new = Pegawai::create($request->all());
     $user = User::create([
        'name' => $new->name,
        'email' => $new->email,
        'password' => Hash::make('password'),
        'pegawais_id' => $new->id,
     ]);

     $new->users_id = $user->id;
     $new->save();


     return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    public function edit(String $id)
    {
        $pegawai = pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $pegawai->user->id,
            'jabatan' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        ], [
            'name.required' => 'Nama pegawai tidak boleh kosong',
            'email.required' => 'Email pegawai tidak boleh kosong',
            'email.unique' => 'Email pegawai sudah terdaftar',
            'jabatan.required' => 'Jabatan pegawai tidak boleh kosong',
            'alamat.required' => 'Alamat pegawai tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin pegawai tidak boleh kosong',
            'jenis_kelamin.in' => 'Jenis kelamin pegawai harus Laki-Laki atau Perempuan',
        ]);

        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diubah');
    }

    public function destroy(String $id)
    {
        Pegawai::destroy($id);
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus');
    }
}

