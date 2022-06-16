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
        <h4>Data Barang D.co(Dropshiper Coffe)</h4>
    </center>
    <p>Tanggal : <?= hari_ini() ?></p>
    <table class='table table-bordered '>
        <thead>
            <tr align="center">
                <th>No.</th>
                <th>Nama Barang</th>
                <th>stok</th>
                <th>Harga/pcs</th>
                <th>Tags</th>
                <th>Kategori</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($product as $product1)
            <tr align="center">
                <td>{{$i++}}</td>
                <td>{{$product1->name}}</td>
                <td>{{$product1->stok}}</td>
                <td>{{$product1->harga}}</td>
                @if($product1->tags == 1)
                <td>Kopi</td>
                @elseif($product1->tags == 2)
                <td>Kopi Bubuk</td>
                @elseif($product1->tags == 3)
                <td>Biji Kopi</td>
                @elseif($product1->tags == 4)
                <td>Kopi Arabica</td>
                @elseif($product1->tags == 5)
                <td>Kopi Robusta</td>>
                @endif
                <td>
                    @foreach($category as $category1)
                    @if($category1->id == $product1->categories_id)
                    {{$category1->name}}
                    @endif
                    @endforeach
                </td>
                <td>
                    @if($product1->stok == 0)
                    Stok Kosong
                    @elseif($product1->stok <= 20)Stok Terbatas @elseif($product1->stok >= 21)
                        Stok Tersedia
                        @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>