<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class UserProdukController extends Controller
{

    function index()
    {
        $data['list_produk'] = Produk::all();
        return view('users.beranda', $data);
    }

    function create()
    {
        return view('users.createProduk');
    }

    function store()
    {
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();
        return redirect('produkUser')->with('success', 'Data berhasil disimpan');
    }

    function show(Produk $produkUser)
    {
        $data['produkUser'] = $produkUser;
        return view('users.showProduk', $data);
    }

    function edit(Produk $produkUser)
    {
        $data['produkUser'] = $produkUser;
        return view('users.editProduk', $data);
    }

    function update(Produk $produkUser)
    {
        $produkUser->nama = request('nama');
        $produkUser->stok = request('stok');
        $produkUser->harga = request('harga');
        $produkUser->berat = request('berat');
        $produkUser->deskripsi = request('deskripsi');
        $produkUser->save();
        return redirect('produkUser')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Produk $produkUser)
    {
        $produkUser->delete();
        return redirect('produkUser')->with('danger', 'Data berhasil hapus');;
    }
}
