<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{

    function index()
    {
        $data['list_produk'] = Produk::all();
        return view('admin.produk', $data);
    }

    function create()
    {
        return view('admin.createProduk');
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
        return redirect('admin/produkAdmin')->with('success', 'Data berhasil disimpan');
    }

    function show(Produk $produkAdmin)
    {
        $data['produkAdmin'] = $produkAdmin;
        return view('admin.showProduk', $data);
    }

    function edit(Produk $produkAdmin)
    {
        $data['produkAdmin'] = $produkAdmin;
        return view('admin.editProduk', $data);
    }

    function update(Produk $produkAdmin)
    {
        $produkAdmin->nama = request('nama');
        $produkAdmin->stok = request('stok');
        $produkAdmin->harga = request('harga');
        $produkAdmin->berat = request('berat');
        $produkAdmin->deskripsi = request('deskripsi');
        $produkAdmin->save();
        return redirect('admin/produkAdmin')->with('warning', 'Data berhasil edit');;
    }

    function destroy(Produk $produkAdmin)
    {
        $produkAdmin->delete();
        return redirect('admin/produkAdmin')->with('danger', 'Data berhasil hapus');;
    }

    function filter()
    {
        $nama = request('nama');
        $stok = explode(',', request('stok'));
        $nama1['nama'] = $nama;
        $stok1['stok'] = request('stok');
        $Hargamin['harga_min'] = $harga_min = request('harga_min');
        $Hargamax['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->wherein('stok', $stok)->wherebetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::wherein('stok', $stok)->get();
        // $data['list_produk'] = Produk::wherebetween('harga', [$harga_min, $harga_max])->get();



        return view('admin.produk', $data);
    }
}
