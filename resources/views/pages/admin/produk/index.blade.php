@extends('layout.main')

@section('title')
Halaman Produk
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Produk</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <a href="/produk/create" class="btn btn-primary mb-2">Tambah Produk</a>   
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Estimasi</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $key=>$value)
                    <tr >
                        <td>{{$key + 1}}</td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->estimasi}}</td>
                        <td>{{$value->deskripsi}}</td>
                        <td>                            
                            <div class="d-flex ">
                            <a href="#" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>                                                                                                                                                                        
                                <form action="/produk/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Are you sure to delete this produk!');">
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