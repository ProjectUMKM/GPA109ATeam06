<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $data = User::where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('level', 'LIKE', '%' . $search . '%')
        ->paginate();

        return view('Pegawai.pegawai', compact(
            'data'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
   {}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'level' => 'required',
            ]);

            $save = new User();
            $save->name = $request->name;
            $save->email = $request->email;
            $save->password = Hash::make($request->password);
            $save->level = $request->level;
            $save->save();



            return redirect()->back()->with(
                'message',
                'Data Pegawai berhasil ditambahkan'
            );
        }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $getData = User::find($id);
        return view('Pegawai.editPegawai', compact(
            'getData',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'password' => 'nullable|min:6',
            'level' => 'nullable',
        ]);

        $updateUser = User::find($id);
        $updateUser->name = $request->name;

        if ($request->filled('email') && $request-> email != $updateUser->email) {
            $request->validate([
                'email', 'unique:users,email',
            ], [
                'email.unique' => 'Email Sudah Terdaftar'
            ]);
            $updateUser->email = $request->email;
        }

        if ($request->filled('password')) {
            $updateUser->password = Hash::make($request->password);
        }

        if ($request->filled('level')) {
            $updateUser->level = $request->level;
        }

        // untuk save
        $updateUser->save();

        return redirect('/pegawai')->with(
            'message',
            'Data Pegawai berhasil diperbarui'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $getData = User::find($id);
        $getData->delete();

        return redirect()->back()->with(
            'message',
            'Data Pegawai berhasil dihapus!!!'
        );
    }
}
