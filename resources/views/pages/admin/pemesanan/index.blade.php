@extends('layout.main')

@section('title')
Halaman Pemesanan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pemesanan</h3>
    </div>
    <div class="card-body">
        <a href="/pemesanan/create" class="btn btn-primary mb-2">Tambah Pemesanan</a>
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="card">
                <div class="p-2 bd-highlight"><a href="#" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>For Update</div>
            </div>
                <div class="p-2 bd-highlight"></div>
            <div class="card">
                <div class="p-2 bd-highlight"><a href="#" class="btn btn-info mr-2"><i class="fas fa-copy"></i></a>For Create Surat Jalan</div>
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
                    <th scope="col">Alamat Pelanggan</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Deskripsi Pelanggan</th>
                    <th scope="col">Total Biaya</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>                               
                    <tr >
                        @forelse ($pemesanan as $key=>$value)                            
                        <td>{{$key + 1}}</td>
                        <td>{{$value->nama_pemesan}}</td>
                        <td>{{$value->telp}}</td>
                        <td>{{$value->alamat_pemesan}}</td>
                        <td>{{$value->produk->nama}}</td>
                        <td>{{$value->deskripsi}}</td>
                        <td>{{number_format($value->total)}}</td>
                        <td>                            
                            <div class="d-flex ">                                                        
                            <a href="/pemesanan/{{$value->id}}/edit" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>                            
                            <a href="/surat/create/{{$value->id}}" class="btn btn-info mr-2"><i class="fas fa-copy"></i></a>
                                <form action="/pemesanan/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Are you sure to delete this pemesanan!');">
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