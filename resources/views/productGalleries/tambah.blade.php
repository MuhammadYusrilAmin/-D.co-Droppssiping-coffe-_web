@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')
<?php
$id = $_GET['id'];
?>
<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Tambah Foto Barang</h4>
            </div>
            <div class="card-body" style="padding-bottom:20%;">
                <form action="{{route('productGalleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-url">Foto Barang</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-url2" class="input-group-text @error('files') error-icon @enderror"><i class='bx bxs-image-add'></i></span>
                                <input type="hidden" name="id" value="{{ $id }}">
                                <input multiple accept="image/*" value="{{ old('files') }}" name="files[]" type="file" class="form-control @error('files') is-invalid  @enderror" id="basic-icon-default-url" placeholder="Gallery Files" aria-describedby="basic-icon-default-url2" />

                            </div>
                            @error('files')
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