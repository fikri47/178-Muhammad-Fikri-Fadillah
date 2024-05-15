@extends('layout.main')

@section('title')
Halaman Pemesanan
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pemesanan</h3>

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
        <a href="/pemesanan/create" class="btn btn-primary mb-2">Tambah Pemesanan</a>   
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">No.Telepon</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Deskripsi Pelanggan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>                               
                    <tr >
                        <td></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>                            
                            <div class="d-flex ">                                                        
                            <a href="#" class="btn btn-success mr-2"><i class="fas fa-undo"></i></a>
                            <a href="#" class="btn btn-info mr-2"><i class="fas fa-copy"></i></a>
                                <form action="/produk" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mr-2" onclick="return confirm('Are you sure to delete this produk!');">
                                        <i class="fas fa-trash"></i>
                                    </button>                                      
                                </form>                            
                            </div>
                        </td>                      
                    </tr>               
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