<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class CalisController extends Controller
{
    public function index(){
        $calis = Daftar::all();
        return view('calis.index',compact(['calis']));
    }

    public function create()
    {
        return view('calis.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Daftar::create($request->except(['_token','submit']));
        return redirect('/calis');
    }
    public function edit($id)
    {
        $calis = Daftar::find($id);
        return view('calis.edit',compact(['calis']));
    }
    public function update($id, Request $request)
    {
        $calis = Daftar::find($id);
        $calis->update($request->except(['_token','submit']));
        return redirect('/calis');
    }
    public function destroy($id)
    {
        $calis = Daftar::find($id);
        $calis->delete();
        return redirect('/calis');
    }
}
