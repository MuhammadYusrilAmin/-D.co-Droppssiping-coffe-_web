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
        <h4>Data User Pengguna D.co(Dropshiper Coffe)</h4>
    </center>
    <p>Tanggal : <?= hari_ini() ?></p>
    <table class='table table-bordered '>
        <thead>
            <tr align="center">
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Username</th>
                <th>No Telpon</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($user as $user1)
            <tr align="center">
                <td>{{$i++}}</td>
                <td>{{$user1->nama}}</td>
                <td>{{$user1->email}}</td>
                <td>{{$user1->username}}</td>
                <td>{{$user1->no_telp}}</td>
                <td>
                    @if($user1->id_akses == 1)
                    Admin
                    @elseif($user1->id_akses == 2) Reseller
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>