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
                                    <div class="col-3">
                                        <button type="button" class="btn btn-block bg-primary">Tambah</button>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                    <div class="col-5">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-8 offset-md-6">
                                                        <form action="simple-results.html">
                                                            <div class="input-group">
                                                                <input type="search" class="form-control form-control-lg"
                                                                    placeholder="Type your keywords here">
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
                                            <th class="text-center">Action</th>
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
                                                <td class="d-flex justify-content-between>
                                                    {{-- <div class="d-flex justify-content-between">
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-success d-none">Edit</button>
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-success ">Edit</button>
                                                        &nbsp;&nbsp;
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-danger ">Hapus</button>
                                                    </div> --}}
                                                    <form method="POST"
                                                    action="{{ route('product.destroy', $pro->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <a class="btn btn-info btn-sm" title="Detail Film" href="{{ route('film.show',$fil->id) }}">
                                                        <i class="bi bi-eye"></i>
                                                      </a> --}}
                                                    <button type="button"
                                                        class="btn btn-block bg-gradient-success d-none">Edit</button>

                                                    <a class="btn btn-block bg-gradient-success" href="">Edit
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <button type="submit"
                                                        class="btn btn-block bg-gradient-danger ">Hapus</button>
                                                    </form>
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
