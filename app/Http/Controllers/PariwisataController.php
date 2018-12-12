<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pariwisata as Pariwisata;
use Auth;
use App\Comment as Comment;
use PDF;

class PariwisataController extends Controller
{
    public function index()
    {
    	$data['pariwisata'] = Pariwisata::all();
    	return view ('Pariwisata.index')->with($data);
    }

    public function create()
    {
    	$data['pariwisata'] = Pariwisata::all();
    	return view ('Pariwisata.create');
    }

    public function save(Request $r)
    {
    	$file = $r->file('foto');
    	$pariwisata = new Pariwisata;
    	$pariwisata->namatempat = $r->input('namatempat');
    	$pariwisata->kategori = $r->input('kategori');
    	$pariwisata->alamat = $r->input('alamat');
    	$pariwisata->haribuka = $r->input('haribuka');
    	$pariwisata->jambuka = $r->input('jambuka');
    	$pariwisata->jamtutup = $r->input('jamtutup');
    	$pariwisata->deskripsi = $r->input('deskripsi');
    	$pariwisata->foto = $file->getClientOriginalName();
        $file->move('foto/', $file->getClientOriginalName());
    	$pariwisata->save();

    	return redirect(url('pariwisata/datatable'));
    }

    public function edit($id)
    {
    	$data['pariwisata'] = Pariwisata::find($id);
    	return view ('Pariwisata.edit')->with($data);
    }

    public function update(Request $r)
    {
    	$file = $r->file('foto');
    	$edit = Pariwisata::find($r->input('id'));
    	$edit->namatempat = $r->input('namatempat');
    	$edit->kategori = $r->input('kategori');
    	$edit->alamat = $r->input('alamat');
    	$edit->haribuka = $r->input('haribuka');
    	$edit->jambuka = $r->input('jambuka');
    	$edit->jamtutup = $r->input('jamtutup');
    	$edit->deskripsi = $r->input('deskripsi');
    	 if (isset($file)) {
    	$edit->foto = $file->getClientOriginalName();
        $file->move('foto/', $file->getClientOriginalName());
        }
    	$edit->save();

    	return redirect(url('pariwisata/datatable'));
    }

    public function delete($id)
    {
    	$pariwisata = Pariwisata::find($id);
    	$pariwisata->delete();
    	return redirect(url('pariwisata/datatable'));

    }

    public function detail($id)
    {
        $data = array(
            'pariwisata' => Pariwisata::find($id)
        );
        $pariwisata = Pariwisata::find($id);
        return view('Pariwisata.detail', compact('pariwisata'));
    }

    public function datatable()
    {
        $data['pariwisata'] = Pariwisata::all();
        return view ('Pariwisata.datatable')->with($data);
    }

    public function pdfall()
    {
        $data['pariwisata'] = Pariwisata::all();
        $pdf = PDF::loadview('Pariwisata.laporan',$data);
        return $pdf->download('LaporanPariwisata.pdf');
    }
}
