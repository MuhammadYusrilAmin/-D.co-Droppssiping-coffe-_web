@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')
<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Tambah Data Kategori</h4>
            </div>
            <div class="card-body" style="padding-bottom:20%;">
                <form action="{{route('productCategories.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-name">Kategori Barang</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text @error('name') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror" id="basic-icon-default-name" placeholder="Kopi Bubuk" aria-label="Kopi Bubuk" name="name" value="{{old('name')}}" aria-describedby="basic-icon-default-name2" />

                            </div>
                            @error('name')
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