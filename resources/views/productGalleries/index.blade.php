@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')
<?php
$id = $_GET['id'];
?>
<!-- Basic Bootstrap Table -->
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Galleries Product</h4>
    <a href="{{url('productGalleries/create?id='. $id)}}">
        <button type="button" class="btn btn-success ms-4 mb-3" style="background-color: #02C80A;"><i class='bx bx-plus-circle'></i> Tambah</button>
    </a>
    <div class="table-responsive text-nowrap">
        <table class="table mb-2">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($gallery as $key => $gallery1)
                <tr align="center">
                    <td>{{$key + $gallery->firstItem()}}</td>
                    <td>
                        <img src="{{$gallery1->url}}" width="70px" height="70px" />
                    </td>
                    <td>
                        <a href="{{route('productGalleries.destroy',$gallery1->id)}}" onclick="notificationforDelete(event, this)" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i>
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
                    {{ $gallery->links() }}
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