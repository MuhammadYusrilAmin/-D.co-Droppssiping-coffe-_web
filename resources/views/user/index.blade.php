@extends('layout.default')
@section('title', 'Data User')
@section('user', 'active')
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <h4 class="card-header fw-bold py-3 mb-2 mt-2">Data User</h4>
    <a href="{{route('user.create')}}">
        <button type="button" class="btn btn-success ms-4 mb-3" style="background-color: #02C80A;"><i class='bx bx-plus-circle'></i> Tambah</button>
    </a>
    <div class="table-responsive text-nowrap">
        <table class="table mb-2">
            <thead>
                <tr align="center">
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($user as $index => $user1)
                <tr align="center">
                    <td>{{$index + $user->firstItem() }}</td>
                    <td>{{$user1->name}}</td>
                    <td>{{$user1->email}}</td>
                    <td>{{$user1->username}}</td>
                    <td>
                        @if($user1->id_akses == 1)
                        <span class="badge bg-label-primary me-1">Admin</span>
                        @elseif($user1->id_akses == 2) <span class="badge bg-label-warning me-1">Reseller</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('user.edit',$user1->id)}}">
                            <button type="button" class="btn btn-icon btn-primary"><i class="bx bx-edit-alt me-1"></i></button>
                        </a>
                        <a href="{{route('user.destroy',$user1->id)}}" onclick="notificationforDelete(event, this)" class="btn btn-icon btn-danger"> <i class="bx bx-trash-alt"></i>
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
                    {{ $user->links() }}
                </li>
            </ul>
        </nav>
        <!--/ Basic Pagination -->
    </div>
</div>
</div>

<!--/ Basic Bootstrap Table -->

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
@endsection