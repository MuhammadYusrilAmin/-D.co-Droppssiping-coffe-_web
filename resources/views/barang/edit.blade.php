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
                <form action="{{route('barang.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-name">Nama Barang</label>
                        <div class="col-sm-10 ">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text @error('name') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid  @enderror" value="{{ $product->name }}" id="basic-icon-default-name" placeholder="Kopi Bubuk" aria-label="Kopi Bubuk" name="name" value="{{old('name')}}" aria-describedby="basic-icon-default-name2" />

                            </div>
                            @error('name')
                            <p class="invalid-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-stok">Stok</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-stok2" class="input-group-text @error('stok') error-icon @enderror"><i class="bx bx-box"></i></span>
                                <input type="text" id="basic-icon-default-stok" class="form-control @error('stok') is-invalid @enderror" value="{{ $product->stok }}" placeholder="100" aria-label="100" name="stok" value="{{old('stok')}}" aria-describedby="basic-icon-default-stok2" />
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
                                <input type="text" id="basic-icon-default-harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $product->harga }}" placeholder="12000" name="harga" value="{{old('harga')}}" aria-label="12000" aria-describedby="basic-icon-default-harga2" />
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
                                    @if($product->tags == 1 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1" selected>Kopi</option>
                                    <option value="2">Kopi Bubuk</option>
                                    <option value="3">Biji Kopi</option>
                                    <option value="4">Kopi Arabica</option>
                                    <option value="5">Kopi Robusta</option>
                                    @elseif($product->tags == 2 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Kopi</option>
                                    <option value="2" selected>Kopi Bubuk</option>
                                    <option value="3">Biji Kopi</option>
                                    <option value="4">Kopi Arabica</option>
                                    <option value="5">Kopi Robusta</option>
                                    @elseif($product->tags == 3 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Kopi</option>
                                    <option value="2">Kopi Bubuk</option>
                                    <option value="3" selected>Biji Kopi</option>
                                    <option value="4">Kopi Arabica</option>
                                    <option value="5">Kopi Robusta</option>
                                    @elseif($product->tags == 4 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Kopi</option>
                                    <option value="2">Kopi Bubuk</option>
                                    <option value="3">Biji Kopi</option>
                                    <option value="4" selected>Kopi Arabica</option>
                                    <option value="5">Kopi Robusta</option>
                                    @elseif($product->tags == 5 )
                                    <option value="">Pilih Jenis Barang</option>
                                    <option value="1">Kopi</option>
                                    <option value="2">Kopi Bubuk</option>
                                    <option value="3">Biji Kopi</option>
                                    <option value="4">Kopi Arabica</option>
                                    <option value="5" selected>Kopi Robusta</option>
                                    @endif
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
                                    @if($category1->id == $product->categories_id)
                                    <option value="{{$category1->id}}" selected>{{$category1->name}}</option>
                                    @else
                                    <option value="{{$category1->id}}">{{$category1->name}}</option>
                                    @endif
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
                                <textarea id="basic-icon-default-deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" placeholder="Deskripsi Barang" aria-label="Deskripsi Barang" aria-describedby="basic-icon-default-deskripsi2">{{ $product->deskripsi }}</textarea>
                            </div>
                            @error('deskripsi')
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