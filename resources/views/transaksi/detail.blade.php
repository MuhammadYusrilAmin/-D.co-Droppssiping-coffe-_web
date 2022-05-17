@extends('layout.default')
@section('title', 'Data transaksi')
@section('transaksi', 'active')
@section('content')
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Detail Pesanan</h4>
    <div class="table-responsive text-nowrap">
        <table class="table table-borderless mb-2" style="font-size: 14px;">
            @foreach($transaksi as $key => $transaksi1)
            <tbody>
                <tr>
                    <td style="width: 15%;">Nama Customer</td>
                    <td style="width: 3%;">:</td>
                    <td>{{$transaksi1->id}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$transaksi1->tanggal}}</td>
                </tr>
                <tr>
                    <td>Total Pembayaran</td>
                    <td>:</td>
                    <td>{{$transaksi1->total_pembayaran}}</td>
                </tr>
                <tr>
                    <td>Jenis Pengiriman</td>
                    <td>:</td>
                    <td>{{$transaksi1->jenis_pengiriman}}</td>
                </tr>
                <tr>
                    <td>Status Pengiriman</td>
                    <td>:</td>
                    <td>
                        @if($transaksi1->status == 1)
                        <span class="badge bg-label-warning me-1">Di Packing</span>
                        @elseif($transaksi1->status == 2)
                        <span class="badge bg-label-primary me-1">Di Kirim</span>
                        @elseif($transaksi1->status == 3)
                        <span class="badge bg-label-success me-1">Di Terima</span>

                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Alamat Pengeriman</td>
                    <td>:</td>
                    <td style="margin:50px">{{$transaksi1->alamat}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <a href="{{route('transaksi.edit', $transaksi1->id_transaksi)}}">
            <button type="button" class="btn btn-primary ms-4">
                <span class="tf-icons bx bx-edit"></span>&nbsp; Ganti Status
            </button>
        </a>
        <a href="{{route('detail.show', $transaksi1->id_transaksi)}}">
            <button type="button" class="btn btn-success">
                <span class="tf-icons bx bx-printer"></span>&nbsp; Cetak Pesanan
            </button>
        </a>
        <!-- Basic Pagination -->
        <div class="table-responsive text-nowrap">
            <table class="table mb-2 mt-2" style="font-size: 14px;">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Jenis Pembayaran</th>
                        <th>Pengiriman</th>
                        <th>Total Pembayaran</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($detail as $key => $detail1)
                    <tr align="center">
                        <td>{{$key+ $detail->firstItem() }}</td>
                        <td>
                            <img src="{{asset('assets/img/barang/'.$detail1->foto_barang)}}" width="50px" height="50px" class="rounded-circle" />
                        </td>
                        <td>{{$detail->nama_barang}}</td>
                        <td>{{$detail->harga}}</td>
                        <td>{{$detail->jumlah}}</td>
                        <td>{{$detail->total_harga}}</td>
                        <td>
                            <a href="{{route('detail.show', $transaksi1->id_transaksi)}}">
                                <button type="button" class="btn btn-icon btn-warning"><i class="bx bx-detail me-1"></i></button>
                            </a>
                            <a href="{{route('transaksi.edit', $transaksi1->id_transaksi)}}">
                                <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation" style="margin-left: 20px;">
                <ul class=" pagination">
                    <li class="page-item">

                    </li>
                </ul>
            </nav>

            <!--/ Basic Pagination -->
        </div>
    </div>
</div>
@endsection