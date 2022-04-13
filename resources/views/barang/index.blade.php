@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Data Barang</h4>
    <a href="{{route('barang.tambah')}}">
        <button type="button" class="btn btn-primary ms-4 mb-3"><i class='bx bx-plus-circle'></i> Tambah</button>
    </a>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>stok</th>
                    <th>Harga/pcs</th>
                    <th>Foto</th>
                    <th>Jenis Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr align="center">
                    @foreach($barang as $key => $barang1)
                    <td>{{$key+1}}</td>
                    <td>{{$barang1->nama_barang}}</td>
                    <td>{{$barang1->stok}}</td>
                    <td>{{$barang1->harga}}</td>
                    <td style="width: 10%;">
                        <img src="{{asset('assets/img/barang/'.$barang1->foto)}}" style="width: 60px;" class="rounded-circle" />
                    </td>
                    <td>{{$barang1->jenis_barang}}</td>
                    <td>
                        <a href="">
                            <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i></button>
                        </a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection