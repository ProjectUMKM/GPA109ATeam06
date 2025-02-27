<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;

class contactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Data Wajib diisi',
            'email.required' => 'Data Wajib diisi',
            'message.required' => 'Data Wajib diisi',
        ]);

        $saveContactUs = new contactUs();
        $saveContactUs->name  = $request->name;
        $saveContactUs->email  = $request->email;
        $saveContactUs->message = $request->message;
        $saveContactUs->save();

        return redirect('/')->with(
            'success',
            'Data berhasil ditambahkkan'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
