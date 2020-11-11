@extends('admin.baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{url('produkAdmin/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </thead>
                        <tbody>
                            <tr> @foreach($list_produk as $produkAdmin)
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('produkAdmin', $produkAdmin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{url('produkAdmin', $produkAdmin->id)}}/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        @include('template.action.delete', ['url' => url('produkAdmin', $produkAdmin->id)])
                                    </div>
                                </td>

                                <td>{{$produkAdmin->nama}}</td>
                                <td>{{$produkAdmin->harga}}</td>
                                <td>{{$produkAdmin->stok}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection