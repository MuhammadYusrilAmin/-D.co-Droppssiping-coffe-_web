@extends('layout.default')
@section('title', 'Dashboard')
@section('dashboard', 'active')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
         <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/dipacking.png')}}" alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Produk Belum Dikirim</span>
                            <?php
                            $produkBK = App\Models\transaksiModel::where('status', 1)->count();
                            ?>
                            <h3 class="card-title mb-2">{{$produkBK}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/produk.png')}}" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span>Produk</span>
                            <?php
                            $produk = App\Models\productModel::all()->count();
                            ?>
                            <h3 class="card-title mb-2">{{$produk}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/user.png')}}" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">User</span>
                            <?php
                            $user = App\Models\User::all()->count();
                            ?>
                            <h3 class="card-title mb-2">{{$user}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('assets/img/icons/unicons/transaksi.png')}}" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="d-block mb-1">Pendapatan</span>
                            <?php
                            $transaksi = App\Models\transaksiModel::sum('total_harga');
                            ?>
                            <h3 class="card-title text-nowrap mb-2">Rp. {{ number_format($transaksi, 0, ".", ".")}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Total Order</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Total Revenue -->
@endsection