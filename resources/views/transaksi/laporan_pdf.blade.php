<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php

function hari_ini()
{
    $hari = date("D");
    $tanggal = date("d-m-Y");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }
    return $hari_ini . ", " . $tanggal;
}

?>

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
    <center>
        <h4>Data Transaksi D.co(Dropshiper Coffe)</h4>
    </center>
    <p>Tanggal : <?= hari_ini() ?></p>
    <table class='table table-bordered '>
        <thead>
            <tr align="center">
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Pembayaran</th>
                <th>Jenis Pembayaran</th>
                <th>Total Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($transaksi as $transaksi1)
            <tr align="center">
                <td>{{$i++}}</td>
                <?php
                $user = App\Models\User::where('id', $transaksi1->users_id)->get();
                ?>
                @foreach($user as $key => $user1)
                <td>{{$user1->nama}}</td>
                @endforeach
                <td>{{$transaksi1->tanggal}}</td>
                <td>{{$transaksi1->payment}}</td>
                <td>{{$transaksi1->total_harga}}</td>
                <td>
                    @if($transaksi1->status == 1)
                    DI PACKING
                    @elseif($transaksi1->status == 2)DI KIRIM @elseif($transaksi1->status == 3)
                    DI TERIMA
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>