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
                    <?php
                    $user = App\Models\User::where('id', $transaksi1->users_id)->get();
                    ?>
                    @foreach($user as $key => $user1)
                    <td>{{$user1->nama}}</td>
                    @endforeach
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$transaksi1->tanggal}}</td>
                </tr>
                <tr>
                    <td>Total Pembayaran</td>
                    <td>:</td>
                    <td>{{$transaksi1->total_harga}}</td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td>:</td>
                    <td>{{$transaksi1->payment}}</td>
                </tr>
                <tr>
                    <td>Status Pengiriman</td>
                    <td>:</td>
                    <td>
                        @if($transaksi1->status == 1)
                        <span class="badge bg-label-warning me-1">Di Packing</span>
                        @elseif($transaksi1->status == 2)
                        <span class="badge bg-label-primary me-1">Di Kirim</span>
                        @elseif($transaksi1->status == 3 )
                        <span class="badge bg-label-success me-1">Di Terima</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Alamat Pengiriman</td>
                    <td>:</td>
                    <td style="margin:50px">{{$transaksi1->alamat}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        @if($transaksi1->status == 3)
        <a href="{{url('/cetak_detail', $transaksi1->id)}}">
            <button type="button" class="btn btn-success ms-4">
                <span class="tf-icons bx bx-printer"></span>&nbsp; Cetak Pesanan
            </button>
        </a>
        @else
        <a href="{{url('/cetak_detail', $transaksi1->id)}}">
            <button type="button" class="btn btn-primary ms-4">
                <span class="tf-icons bx bx-edit"></span>&nbsp; Ganti Status
            </button>
        </a>
        <a href="{{route('detail.show', $transaksi1->id)}}">
            <button type="button" class="btn btn-success">
                <span class="tf-icons bx bx-printer"></span>&nbsp; Cetak Pesanan
            </button>
        </a>
        @endif
        <!-- Basic Pagination -->
        <div class="table-responsive text-nowrap">
            <table class="table mb-2 mt-2" style="font-size: 14px;">
                <thead>
                    <tr align="center">
                        <th>No.</th>
                        <th>Foto Products</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($detail as $key => $detail1)
                    <tr align="center">
                        <td>{{$key+ $detail->firstItem() }}</td>
                        <?php
                        $gallery = App\Models\ProductGallery::where('products_id', $detail1->products_id)->get();
                        ?>
                        <td>
                            <img src="{{$gallery[0]->url}}" width="70px" height="70px" />
                        </td>
                        <?php
                        $produk = App\Models\productModel::where('id', $detail1->products_id)->get();
                        ?>
                        @foreach($produk as $key => $produk1)
                        <td>{{$produk1->name}}</td>
                        @endforeach
                        <td>{{$detail1->jumlah}}</td>
                        <td>
                            <a href="{{url('detail/destroy?id='.$detail1->id.'&id_barang='.$detail1->transaksi_id)}}" onclick="notificationforDelete(event, this)" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
<form action="" id="delete-form" method="POST">
    @method('delete')
    @csrf
</form>
<script>
    function notificationforDelete(event, el) {
        event.preventDefault();
        swal.fire({
            title: "Apakah Anda Yakin Menghapus Data Ini?",
            icon: "warning",
            closeOnClickOutside: false,
            showCancelButton: true,
            confirmButtonText: 'Iya',
            confirmButtonColor: '#6777ef',
            cancelButtonText: 'Batal',
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.value) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        });
    }
</script>