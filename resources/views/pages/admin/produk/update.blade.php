@extends('layout.main')

@section('title', 'Halaman Edit Produk')
@section('content')


@section('content')
<form action="/produk/{{$produk->id}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Produk</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Produk" value="{{$produk->nama}}">
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
                            <input type="number" min="0"class="form-control" name="estimasi" id="estimasi" placeholder="Masukkan estimasi" value="{{$produk->estimasi}}">
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
                    <input type="number" min="0"class="form-control" name="harga" id="harga" placeholder="Masukkan Harga" value="{{$produk->harga}}">
                    @error('harga')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror        
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Masukan deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukan deskripsi">{{$produk->deskripsi}}</textarea>      
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
