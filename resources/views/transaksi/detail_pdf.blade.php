<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        p {
            font-size: 12px;
            margin-top: 2rem;
        }
    </style>
    <table class="table table-borderless mb-2" style="font-size: 14px;">
        @foreach($transaksi as $transaksi1)
        <tbody>
            <tr>
                <td style="width: 25%;">Nama Customer</td>
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
                    DI PACKING
                    @elseif($transaksi1->status == 2)DI KIRIM @elseif($transaksi1->status == 3)
                    DI TERIMA
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
    <table class='table table-bordered mt-2'>
        <thead>
            <tr align="center">
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $i=1 @endphp
            @foreach($detail as $key => $detail1)
            <tr align="center">
                <td>{{$i++ }}</td>
                <?php
                $produk = App\Models\productModel::where('id', $detail1->products_id)->get();
                ?>
                @foreach($produk as $key => $produk1)
                <td>{{$produk1->name}}</td>
                @endforeach
                <td>{{$detail1->jumlah}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>