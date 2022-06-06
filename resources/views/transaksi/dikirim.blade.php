@extends('layout.default')
@section('title', 'Data transaksi')
@section('transaksi', 'active')
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Data Transaksi</h4>
    <ul class="nav nav-pills flex-column flex-md-row mb-3 ms-4">
        <li class="nav-item ml-2">
            <a class="nav-link" href="{{route('transaksi.show', 1)}}">Di Packing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('transaksi.show', 2)}}">Di Kirim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('transaksi.show', 3)}}">Di Terima</a>
        </li>
    </ul>
    <div class="table-responsive text-nowrap">
        <table class="table mb-2" style="font-size: 14px;">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    <th>Total Pembayaran</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($transaksi as $key => $transaksi1)
                <tr align="center">
                    <td>{{$key+ $transaksi->firstItem() }}</td>
                    <?php
                    $user = App\Models\User::where('id', $transaksi1->users_id)->get();
                    ?>
                    @foreach($user as $key => $user1)
                    <td>{{$user1->nama}}</td>
                    @endforeach
                    <td>{{$transaksi1->tanggal}}</td>
                    <td>{{$transaksi1->payment}}</td>
                    <td>{{$transaksi1->biaya_pengiriman}}</td>
                    <td><span class="badge bg-label-primary me-1">Di Kirim</span></td>
                    <td>
                        <a href="{{route('detail.show', $transaksi1->id)}}">
                            <button type="button" class="btn btn-icon btn-warning"><i class="bx bx-detail me-1"></i></button>
                        </a>
                        <a href="{{route('transaksi.edit', $transaksi1->id)}}">
                            <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Basic Pagination -->
        <nav aria-label="Page navigation" style="margin-left: 20px;">
            <ul class=" pagination">
                <li class="page-item">
                    {{ $transaksi->links() }}
                </li>
            </ul>
        </nav>

        <!--/ Basic Pagination -->
    </div>
</div>
</div>
@endsection