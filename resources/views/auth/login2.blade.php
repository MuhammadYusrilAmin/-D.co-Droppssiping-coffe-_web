@extends('layout.login')
@section('title', 'Login')
@section('login')
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <a href="{{ route('logout') }}"></a>
        <form action="{{ route('logout') }}" id="logout" method="POST">
            @csrf
        </form>
        <script>
            swal.fire({
                title: "Fitur Ini Hanya Untuk Admin!!",
                icon: "error",
                closeOnClickOutside: false,
                showCancelButton: false,
                confirmButtonText: 'oke',
                confirmButtonColor: '#6777ef',
            }).then((result) => {
                if (result.value) {
                    $("#logout").submit();
                }
            });
        </script>
        <div class="app-brand left-content-center" style="height:12vh; width:50%; margin-left:25%; ">
            <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="{{asset('assets/img/favicon/icon2.png')}}" width="35%" style="margin:0;" alt="">
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <p class="mb-4" style="margin-top: -3vh;;">Please sign-in to your account and start the adventure</p>

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class=" mb-3">
                <label for="username" class="form-label">username</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-namabarang2" class="input-group-text"><i class="bx bxs-user"></i></span>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" id="username" name="username" placeholder="admin123" autofocus />

                    @error('username')
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
                        <small style="color: #CC7937;">Forgot Password?</small>
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-namabarang2" class="input-group-text"><i class="bx bxs-lock-alt"></i></span>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-chocolate d-grid w-100" type="submit">Sign in</button>
            </div>
        </form>
    </div>
</div>
@endsection