@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Data Barang</h4>
    <a href="{{route('barang.create')}}">
        <button type="button" class="btn btn-success ms-4 mb-3" style="background-color: #02C80A;"><i class='bx bx-plus-circle'></i> Tambah</button>
    </a>
    <div class="table-responsive text-nowrap">
        <table class="table mb-2">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>stok</th>
                    <th>Harga/pcs</th>
                    <th>Foto</th>
                    <th>Jenis Barang</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($barang as $key => $barang1)
                <tr align="center">
                    <td>{{$key+1}}</td>
                    <td>{{$barang1->nama_barang}}</td>
                    <td>{{$barang1->stok}}</td>
                    <td>{{$barang1->harga}}</td>
                    <td style="width: 10%;">
                        <img src="{{asset('assets/img/barang/'.$barang1->foto)}}" width="50px" height="50px" class="rounded-circle" />
                    </td>
                    <td>
                        @if($barang1->jenis_barang == 1)
                        Pupuk
                        @elseif($barang1->jenis_barang == 2)
                        Jajanan
                        @elseif($barang1->jenis_barang == 3)
                        Minuman Bubuk
                        @endif
                    </td>
                    <td>
                        @if($barang1->stok == 0)
                        <span class="badge bg-label-danger me-1">Stok Kosong</span>
                        @elseif($barang1->stok <= 20) <span class="badge bg-label-warning me-1">Stok Terbatas</span>
                            @elseif($barang1->stok >= 21)
                            <span class="badge bg-label-success me-1">Stok Tersedia</span>
                            @endif
                    </td>
                    <td>
                        <a href="{{route('barang.edit',$barang1->id_barang)}}">
                            <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                        </a>
                        <a href="{{route('barang.destroy',$barang1->id_barang)}}" onclick="notificationforDelete(event, this)" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Basic Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link">{{ $barang->links() }}</a>
                </li>
            </ul>
        </nav>
        <!--/ Basic Pagination -->
    </div>
</div>
</div>

<!--/ Basic Bootstrap Table -->
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