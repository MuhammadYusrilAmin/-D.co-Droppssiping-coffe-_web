@extends('layout.default')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Update Profile</h5>
            <!-- Account -->
            <div class="card-body">
                <form id="formAccountSettings" action="{{route('user.update',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid  @enderror" id="basic-icon-default-nama" value="{{$user->nama}}" placeholder="Tegar Karunia" autofocus name="nama" value="{{old('nama')}}" aria-describedby="basic-icon-default-nama2" />

                            @error('nama')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="lastName" class="form-label">Email</label>
                            <input type="email" id="basic-icon-default-email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" placeholder="admin@example.com" autofocus name="email" value="{{old('email')}}" aria-label="admin@example.com" aria-describedby="basic-icon-default-email2" />
                            @error('email')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Username</label>
                            <input type="text" id="basic-icon-default-username" class="form-control @error('username') is-invalid @enderror" value="{{$user->username}}" placeholder="admin" aria-label="admin" name="username" value="{{old('username')}}" aria-describedby="basic-icon-default-username2" />
                            @error('username')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="organization" class="form-label">Nomor Telepon</label>
                            <input type="hidden" name="id_akses" value="{{$user->id_akses}}">
                            <input type="text" class="form-control @error('no_telp') is-invalid  @enderror" id="basic-icon-default-name" value="{{$user->no_telp}}" placeholder="085xxxxxxxxx" name="no_telp" value="{{old('no_telp')}}" aria-describedby="basic-icon-default-no_telp2" />

                            @error('no_telp')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="submit" class="btn btn-primary me-2" value="Update">
                        <a href="{{route('home')}}" type="reset" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
</div>
</div>
<!-- / Content -->
@endsection