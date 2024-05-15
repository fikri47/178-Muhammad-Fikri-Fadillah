@extends('layout.main')

@section('title', 'Dashboard')


@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h2>Produk</h2>
            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/produk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>Pemesanan</h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="fas fa-shopping-basket"></i>
          </div>
          <a href="/pemesanan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>Surat Jalan</h3>
            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="nav-icon fas fa-copy"></i>
          </div>
          <a href="/surat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
</div>

@endsection
