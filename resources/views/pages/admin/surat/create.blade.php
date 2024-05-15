@extends('layout.main')

@section('title', 'Halaman Surat Jalan')
@section('content')


@section('content')
<form action="/surat" method="POST">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Surat Jalan</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">                            
                            <input type="text" class="form-control" name="nama" id="nama" value="Nama Pelanggan" disabled>                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">                            
                            <input type="text" class="form-control" name="telp" id="telp" value="Nomor telp" disabled>                            
                        </div>
                    </div>
                </div>
                <div class="form-group">                            
                    <input type="text" class="form-control" name="produk" id="produk" value="produk" disabled>                            
                </div>           
                <div class="form-group">                    
                    <input type="text" class="form-control" name="alamat" id="alamat" value="alamat" disabled>
                </div>    
                <div class="form-group">                    
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi pelanggan" disabled></textarea>      
                </div>    
                <div class="form-group">                    
                    <input type="text" class="form-control" name="status" id="status" value="status" disabled>
                </div>
                <div class="form-group">
                    <label for="ongkos">Ongkos Kirim</label>
                    <input type="number" min="0"class="form-control" name="ongkos" id="ongkos" placeholder="Masukkan ongkos Kirim">
                    @error('ongkos')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror        
                </div>
                <div class="form-group">
                    <label>Tanggal Pengiriman</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date" class="form-control" id="date" name="date">
                    </div>                    
                  </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Masukan deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukan deskripsi"></textarea>      
                    @error('deskripsi')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                  
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
