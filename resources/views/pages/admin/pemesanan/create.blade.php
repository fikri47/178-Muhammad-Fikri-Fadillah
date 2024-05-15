@extends('layout.main')

@section('title', 'Halaman Tambah Pemesanan')
@section('content')


@section('content')
<form action="/pemesanan" method="POST">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Pelanggan">
                            @error('nama')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="number" min="0"class="form-control" name="telp" id="telp" placeholder="Masukkan Nomor telp">
                            @error('telp')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>                
                <div class="form-group">
                    <label for="alamat" class="form-label">Masukan alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukan alamat"></textarea>      
                    @error('alamat')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
                <div class="form-group">
                    <label for="status" class="form-label">Masukan status</label>
                    <input type="text" class="form-control" name="status" id="status" placeholder="Masukkan status">
                    @error('status')
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
