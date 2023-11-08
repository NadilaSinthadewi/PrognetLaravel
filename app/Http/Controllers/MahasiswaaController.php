<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswaa;
use Illuminate\Http\Request;

class MahasiswaaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswaa::all();
        return view('list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswaa = new Mahasiswaa;
        $mahasiswaa->nim = $request->nim;
        $mahasiswaa->fullname = $request->fullname;
        $mahasiswaa->nickname = $request->nickname;
        $mahasiswaa->jeniskelamin = $request->jeniskelamin;
        $mahasiswaa->email = $request->email;
        $mahasiswaa->prodi = $request->prodi;
        $mahasiswaa->tgllahir = $request->tgllahir;
        $mahasiswaa->hobi = $request->hobi;
        $mahasiswaa->save();
        return redirect('/mahasiswaa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswaa $mahasiswaa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswaa $mahasiswaa)
    {
        return view('edit',compact('mahasiswaa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswaa $mahasiswaa)
    {
        $mahasiswaa->nim = $request->nim;
        $mahasiswaa->fullname = $request->fullname;
        $mahasiswaa->nickname = $request->nickname;
        $mahasiswaa->jeniskelamin = $request->jeniskelamin;
        $mahasiswaa->email = $request->email;
        $mahasiswaa->prodi = $request->prodi;
        $mahasiswaa->tgllahir = $request->tgllahir;
        $mahasiswaa->hobi = $request->hobi;
        $mahasiswaa->save();
        return redirect('/mahasiswaa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswaa $mahasiswaa)
    {
        $mahasiswaa->delete();
        return redirect('/mahasiswaa');
    }
}
