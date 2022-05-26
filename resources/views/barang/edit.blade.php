@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')
<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Edit Data Barang</h4>
            </div>
            <div class="card-body">
                <form action="{{route('barang.update',$barang->id_barang)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-namabarang">Nama Barang</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-namabarang2" class="input-group-text @error('nama_barang') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" class="form-control @error('nama_barang') is-invalid  @enderror" value="{{ $barang->nama_barang }}" id="basic-icon-default-namabarang" placeholder="Kopi Bubuk" aria-label="Kopi Bubuk" name="nama_barang" value="{{old('nama_barang')}}" aria-describedby="basic-icon-default-namabarang2" />

                            </div>
                            @error('nama_barang')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-stok">Stok</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-stok2" class="input-group-text @error('stok') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" id="basic-icon-default-stok" class="form-control @error('stok') is-invalid @enderror" value="{{ $barang->stok }}" placeholder="100" aria-label="100" name="stok" value="{{old('stok')}}" aria-describedby="basic-icon-default-stok2" />
                            </div>
                            @error('stok')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-harga">Harga/pcs</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text  @error('harga') error-icon @enderror"><i class='bx bx-purchase-tag'></i></span>
                                <input type="text" id="basic-icon-default-harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $barang->harga }}" placeholder="12000" name="harga" value="{{old('harga')}}" aria-label="12000" aria-describedby="basic-icon-default-harga2" />
                            </div>
                            @error('harga')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-message">Tags</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2 " class="input-group-text   @error('tags') error-icon @enderror "><i class='bx bx-package'></i></span>
                                <select class="form-select   @error('tags') is-invalid @enderror" id="exampleFormControlSelect1" aria-label="Default select example" name="tags" value="{{old('tags')}}">
                                    @if($barang->tags == 1 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1" selected>Pupuk</option>
                                    <option value="2">Jajanan</option>
                                    <option value="3">Minuman Bubuk</option>
                                    @elseif($barang->tags == 2 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Pupuk</option>
                                    <option value="2" selected>Jajanan</option>
                                    <option value="3">Minuman Bubuk</option>
                                    @elseif($barang->tags == 3 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Pupuk</option>
                                    <option value="2">Jajanan</option>
                                    <option value="3" selected>Minuman Bubuk</option>
                                    @endif
                                </select>
                            </div>
                            @error('tags')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-deskripsi">Deskripsi Barang</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-deskripsi2" class="input-group-text  @error('deskripsi') error-icon @enderror"><i class="bx bx-task"></i></span>
                                <textarea id="basic-icon-default-deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" placeholder="Deskripsi Barang" aria-label="Deskripsi Barang" aria-describedby="basic-icon-default-deskripsi2">{{ $barang->deskripsi }}</textarea>
                            </div>
                            @error('deskripsi')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">foto</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('assets/img/barang/'.$barang->foto) }}" class="mb-2" width="70px" height="70px" alt="Image">
                            <div class="input-group input-group-merge">
                                <input type="file" class="form-control phone-mask @error('foto') is-invalid @enderror" value="{{ $barang->foto }}" name="foto" aria-describedby="basic-icon-default-phone2" />
                            </div>
                            @error('foto')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection