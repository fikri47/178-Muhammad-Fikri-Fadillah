@extends('layout.main')

@section('title', 'Halaman Tambah Produk')
@section('content')


@section('content')
<form action="/produk" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Produk</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Produk">
                            @error('nama')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="estimasi">Estimasi</label>
                            <input type="number" min="0"class="form-control" name="estimasi" id="estimasi" placeholder="Masukkan estimasi">
                            @error('estimasi')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" min="0"class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
                    @error('tahun')
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
                    <label for="gambar">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
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
