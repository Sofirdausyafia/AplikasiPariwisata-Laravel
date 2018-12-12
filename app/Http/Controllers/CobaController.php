<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba as Coba;

class CobaController extends Controller
{
    public function index()
    {
    	$data['coba'] = Coba::all();
    	return view ('Coba.index')->with($data);
    }

    public function create()
    {
    	$data['coba'] = Coba::all();
    	return view ('Coba.create');
    }

    public function save(Request $r)
    {
    	$coba = new Coba;
    	$coba->nama = $r->input('nama');
    	$coba->deskripsi = $r->input('deskripsi');
    	$coba->alamat = $r->input('alamat');
    	$coba->save();

    	return redirect(url('coba'));
    }

    public function edit($id)
    {
    	$data['coba'] = Coba::find($id);
    	return view ('Coba.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$edit = Coba::find($r->input('id'));
    	$edit->nama = $r->input('nama');
    	$edit->deskripsi = $r->input('deskripsi');
    	$edit->alamat = $r->input('alamat');
    	$edit->save();

    	return redirect(url('coba'));
    }

    public function delete($id)
    {
    	$coba = Coba::find($id);
    	$coba->delete();
    	return redirect(url('coba'));

    }
}
