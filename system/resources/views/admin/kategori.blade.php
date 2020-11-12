@extends('admin.baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                    <a href="{{url('kategoriAdmin/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Brand</th>
                            <th>Harga Minimal</th>
                        </thead>
                        <tbody>
                            <tr> @foreach($list_Kategori as $kategoriAdmin)
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('kategoriAdmin', $kategoriAdmin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{url('kategoriAdmin', $kategoriAdmin->id)}}/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        @include('template.action.delete', ['url' => url('kategoriAdmin', $kategoriAdmin->id)])
                                    </div>
                                </td>

                                <td>{{$kategoriAdmin->nama}}</td>
                                <td>{{$kategoriAdmin->brand}}</td>
                                <td>{{$kategoriAdmin->hargamin}}</td>
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