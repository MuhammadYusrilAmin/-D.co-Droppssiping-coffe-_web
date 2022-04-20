@extends('layout.default')
@section('title', 'Data User')
@section('user', 'active')
@section('content')
<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Tambah Data User</h4>
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-name">Nama Lengkap</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text @error('name') error-icon @enderror"><i class="bx bxs-user"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror" id="basic-icon-default-name" placeholder="Tegar Karunia" name="name" value="{{old('name')}}" aria-describedby="basic-icon-default-name2" />

                            </div>
                            @error('name')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text  @error('email') error-icon @enderror"><i class="bx bxs-envelope"></i></span>
                                <input type="email" id="basic-icon-default-email" class="form-control @error('email') is-invalid @enderror" placeholder="admin@example.com" name="email" value="{{old('email')}}" aria-label="admin@example.com" aria-describedby="basic-icon-default-email2" />
                            </div>
                            @error('email')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-username">Username</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-username2" class="input-group-text @error('username') error-icon @enderror"><i class="bx bxs-user"></i></span>
                                <input type="text" id="basic-icon-default-username" class="form-control @error('username') is-invalid @enderror" placeholder="admin" aria-label="admin" name="username" value="{{old('username')}}" aria-describedby="basic-icon-default-username2" />
                            </div>
                            @error('username')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-password">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text  @error('password') error-icon @enderror"><i class="bx bxs-lock-alt"></i></span>
                                <input type="password" id="basic-icon-default-password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" value="{{old('password')}}" aria-label="12000" aria-describedby="basic-icon-default-password2" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-message">Akses</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2 " class="input-group-text   @error('id_akses') error-icon @enderror "><i class='bx bxs-user'></i></span>
                                <select class="form-select   @error('id_akses') is-invalid @enderror" id="exampleFormControlSelect1" aria-label="Default select example" name="id_akses" value="{{old('id_akses')}}">
                                    <option value="">Pilih Akses Akun</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Reseller</option>
                                </select>
                            </div>
                            @error('id_akses')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection