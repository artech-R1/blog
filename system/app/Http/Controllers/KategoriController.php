<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class KategoriController extends Controller
{

    function index()
    {
        $data['list_Kategori'] = Kategori::all();
        return view('admin.kategori', $data);
    }

    function create()
    {
        return view('admin.createKategori');
    }

    function store()
    {
        $Kategori = new Kategori;
        $Kategori->nama = request('nama');
        $Kategori->brand = request('brand');
        $Kategori->beratbersih = request('beratbersih');
        $Kategori->hargamin = request('hargamin');

        $Kategori->save();
        return redirect('kategoriAdmin')->with('success', 'Data berhasil disimpan');
    }

    function show(Kategori $kategoriAdmin)
    {
        $data['kategoriAdmin'] = $kategoriAdmin;
        return view('admin.showKategori', $data);
    }

    function edit(Kategori $kategoriAdmin)
    {
        $data['kategoriAdmin'] = $kategoriAdmin;
        return view('admin.editKategori', $data);
    }

    function update(Kategori $kategoriAdmin)
    {

        $kategoriAdmin->nama = request('nama');
        $kategoriAdmin->brand = request('brand');
        $kategoriAdmin->beratbersih = request('beratbersih');
        $kategoriAdmin->hargamin = request('hargamin');
        $kategoriAdmin->save();
        return redirect('kategoriAdmin')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Kategori $kategoriAdmin)
    {
        $kategoriAdmin->delete();
        return redirect('kategoriAdmin')->with('danger', 'Data berhasil hapus');;
    }
}
