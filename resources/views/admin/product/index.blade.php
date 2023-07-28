@extends('admin.index')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header mt-3">
                                <div class="row">
                                    <div class="col-7"> <!-- Adjusted the column size to take 9 columns -->
                                        <a href="{{ route('product.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" title="Tambah Data Film" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                                           </svg></a>
                                    </div>
                                    <div class="col-5"> <!-- Adjusted the column size to take 3 columns -->
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-4"> <!-- Adjusted the column size and offset -->
                                                        <form action="simple-results.html">
                                                            <div class="input-group">
                                                                <input type="search" class="form-control form-control-lg" placeholder="Cari">
                                                                <div class="input-group-append">
                                                                    <button type="submit" class="btn btn-lg btn-default">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jenis</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Foto</th>
                                            <th colspan="3" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($product as $pro)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $pro->name }}</td>
                                                <td class="text-center">{{ $pro->jenis }}</td>
                                                <td class="text-center">{{ $pro->harga }}</td>
                                                <td class="text-center">{{ $pro->foto }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('product.destroy', $pro->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-block bg-gradient-danger">Hapus</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a class="btn btn-block bg-gradient-primary" href="{{ route('product.show',$pro->id) }}">Detail</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-block bg-gradient-success" href="{{ url('product-edit',$pro->id) }}">Edit</a>
                                                </td>
                                                

                                            </tr>
                                        @endforeach
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
