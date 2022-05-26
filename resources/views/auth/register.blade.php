@extends('layout.login')
@section('title', 'Register')
@section('login')
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand left-content-center" style="height:12vh; width:50%; margin-left:25%; ">
            <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">w
                    <img src="{{asset('assets/img/favicon/icon2.png')}}" width="35%" style="margin:0;" alt="">
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <p class="mb-4" style="margin-top: -3vh;;">Please sign-in to your account and start the adventure</p>

        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf

            <div class=" input-group input-group-merge mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-nama2" class="input-group-text @error('nama') error-icon @enderror"><i class="bx bxs-user"></i></span>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama" placeholder="Tegar Karunia" autofocus />
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text  @error('email') error-icon @enderror"><i class="bx bxs-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="admin@example.com" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-username2" class="input-group-text @error('username') error-icon @enderror"><i class="bx bxs-user"></i></span>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" name="username" placeholder="admin" autofocus />
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">No Telpon</label>
                    <a href="auth-forgot-password-basic.html">
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-no_telp2" class="input-group-text @error('no_telp') error-icon @enderror"><i class="bx bxs-phone"></i></span>
                    <input type="number" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" name="no_telp" placeholder="085xxxxxxxxx" aria-describedby="no_telp" />
                    @error('no_telp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <span class="input-group-text  @error('password') error-icon @enderror"><i class="bx bxs-lock-alt"></i></span>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Confirm Password</label>
                    <a href="auth-forgot-password-basic.html">
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-namabarang2" class="input-group-text"><i class="bx bxs-lock-alt"></i></span>
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-chocolate d-grid w-100" type="submit">Sign Up</button>
            </div>
        </form>

        <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{url('/login')}}">
                <span style="color: #CC7937;">Sign in instead</span>
            </a>
        </p>
    </div>
</div>
@endsection