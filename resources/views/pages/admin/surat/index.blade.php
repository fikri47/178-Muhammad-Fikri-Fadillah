@extends('layout.main')

@section('title')
Halaman Surat Jalan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Surat Jalan</h3>        
    </div>
    
    <div class="card-body">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="card">
                <div class="p-2 bd-highlight"><a href="#" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>For Update</div>
            </div>
                <div class="p-2 bd-highlight"></div>
            <div class="card">
                <div class="p-2 bd-highlight"><a href="#" class="btn btn-info mr-2"><i class="fas fa-print"></i></a>For Print</div>
            </div>
            <div class="p-2 bd-highlight"></div>
            <div class="card">
                <div class="p-2 bd-highlight"><a href="#" class="btn btn-danger mr-2"><i class="fas fa-trash"></i></a>For Delete</div>
            </div>
          </div>         
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">No.Telepon</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Biaya Produk</th>
                    <th scope="col">Deskripsi Pengiriman</th>
                    <th scope="col">Biaya Ongkos Kirim</th>
                    <th scope="col">Tanggal Pengiriman</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>                               
                    <tr >
                    @forelse ($surat as $key=>$value)                        
                    <td>{{$key+ 1}}</td>
                    <td>{{$value->pemesanan->nama_pemesan}}</td>
                    <td>{{$value->pemesanan->telp}}</td>
                    <td>{{$value->pemesanan->produk->nama}}</td>
                    <td>{{$value->pemesanan->alamat_pemesan}}</td>
                    <td>{{$value->pemesanan->total}}</td>
                    <td>{{$value->deskripsi_surat}}</td>
                    <td>{{$value->ongkos_kirim}}</td>
                    <td>{{$value->tgl_pengiriman}}</td>
                    <td>                            
                        <div class="d-flex ">                                                        
                        <a href="/surat/{{$value->id}}/edit" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>
                        <a href="/surat/{{$value->id}}" class="btn btn-info mr-2"><i class="fas fa-print"></i></a>
                            <form action="/surat/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Are you sure to delete this surat jalan!');">
                                    <i class="fas fa-trash"></i>
                                </button>                                      
                            </form>                            
                        </div>
                    </td>                      
                </tr>               
                    @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
</div>
@endsection