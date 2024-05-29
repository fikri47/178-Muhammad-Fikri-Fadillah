@extends('layout.main')

@section('title', 'Halaman Surat Jalan')
@section('content')


@section('content')
<form action="/surat/{{$surat->id}}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Surat Jalan</h3>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col">
                        <div class="form-group">                            
                            <input type="text" class="form-control" name="nama" id="nama" value="{{$pemesanan->nama_pemesan}}" disabled>                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">                            
                            <input type="number" class="form-control" name="telp" id="telp" value="{{$pemesanan->telp}}" disabled>                            
                        </div>
                    </div>
                </div>
                <div class="form-group">                            
                    <input type="text" class="form-control" name="produk" id="produk" value="{{$pemesanan->produk->nama}}" disabled>                            
                </div>           
                <div class="form-group">                    
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{$pemesanan->alamat_pemesan}}" disabled>
                </div>    
                <div class="form-group">                    
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi pelanggan" disabled></textarea>      
                </div>    
                <div class="form-group">                    
                    <input type="text" class="form-control" name="status" id="status" value="status" disabled>
                </div>
                <div class="form-group">
                    <label for="ongkos_kirim">Ongkos Kirim</label>
                    <input type="number" min="0"class="form-control" name="ongkos_kirim" id="ongkos_kirim" placeholder="Masukkan ongkos Kirim" value="{{$surat->ongkos_kirim}}">
                    @error('ongkos_kirim')
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
                      <input type="date" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman" value="{{$surat->tgl_pengiriman}}">
                    </div>                    
                  </div>
                <div class="form-group">
                    <label for="deskripsi_surat" class="form-label">Masukan deskripsi</label>
                    <textarea class="form-control" name="deskripsi_surat" id="deskripsi_surat" rows="3" placeholder="Masukan deskripsi">{{$surat->dekripsi_surat}}</textarea>      
                    @error('deskripsi_surat')
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
