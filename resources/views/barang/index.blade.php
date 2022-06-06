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
                    <th>Tags</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($product as $key => $product1)
                <tr align="center">
                    <td>{{$key + $product->firstItem()}}</td>
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
                        @foreach($category as $key => $category1)
                        @if($category1->id == $product1->categories_id)
                        {{$category1->name}}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        @if($product1->stok == 0)
                        <span class="badge bg-label-danger me-1">Stok Kosong</span>
                        @elseif($product1->stok <= 20) <span class="badge bg-label-warning me-1">Stok Terbatas</span>
                            @elseif($product1->stok >= 21)
                            <span class="badge bg-label-success me-1">Stok Tersedia</span>
                            @endif
                    </td>
                    <td>
                        <a href="{{url('productGalleries'.'?id='. $product1->id)}}">
                            <button type="button" class="btn btn-icon btn-warning"><i class="bx bx-detail me-1"></i></button>
                        </a>
                        <a href="{{route('barang.edit',$product1->id)}}">
                            <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                        </a>
                        <a href="{{route('barang.destroy',$product1->id)}}" onclick="notificationforDelete(event, this)" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i>
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
                    {{ $product->links() }}
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