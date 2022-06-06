@extends('layout.default')
@section('title', 'Data Barang')
@section('barang', 'active')
@section('content')
<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Tambah Data Barang</h4>
            </div>
            <div class="card-body">
                <form action="{{route('barang.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-name">Nama Barang</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text @error('name') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror" id="basic-icon-default-name" placeholder="Kopi Bubuk" aria-label="Kopi Bubuk" name="name" value="{{old('name')}}" aria-describedby="basic-icon-default-name2" />
                            </div>
                            @error('name')
                            <p class="invalid-text">nama barang tidak boleh kosong</p>
                            @enderror
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-stok">Stok</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-stok2" class="input-group-text @error('stok') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" id="basic-icon-default-stok" class="form-control @error('stok') is-invalid @enderror" placeholder="100" aria-label="100" name="stok" value="{{old('stok')}}" aria-describedby="basic-icon-default-stok2" />
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
                                <input type="text" id="basic-icon-default-harga" class="form-control @error('harga') is-invalid @enderror" placeholder="12000" name="harga" value="{{old('harga')}}" aria-label="12000" aria-describedby="basic-icon-default-harga2" />
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
                                    <option value="">Pilih Tags Barang</option>
                                    <option value="1">Kopi</option>
                                    <option value="2">Kopi Bubuk</option>
                                    <option value="3">Biji Kopi</option>
                                    <option value="4">Kopi Arabica</option>
                                    <option value="5">Kopi Robusta</option>
                                </select>
                            </div>
                            @error('tags')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-message">Kategori Barang</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2 " class="input-group-text   @error('categories_id') error-icon @enderror "><i class='bx bx-package'></i></span>
                                <select class="form-select   @error('categories_id') is-invalid @enderror" id="exampleFormControlSelect1" aria-label="Default select example" name="categories_id" value="{{old('categories_id')}}">
                                    <option value="">Pilih Kategori Barang</option>
                                    @foreach($category as $key => $category1)
                                    <option value="{{$category1->id}}">{{$category1->name}}</option>
                                    @endforeach
                                </select>
                                <a href="{{url('/productCategories')}}" class="btn btn-primary">Tambah Jenis Barang</a>
                            </div>
                            @error('categories_id')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-deskripsi">Deskripsi Barang</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-deskripsi2" class="input-group-text  @error('deskripsi') error-icon @enderror"><i class="bx bx-task"></i></span>
                                <textarea id="basic-icon-default-deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" placeholder="Deskripsi Barang" aria-label="Deskripsi Barang" aria-describedby="basic-icon-default-deskripsi2"></textarea>
                            </div>
                            @error('deskripsi')
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