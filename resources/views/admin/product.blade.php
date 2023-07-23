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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                      <th>Nama</th>
                                      <th>Jenis</th>
                                      <th>Harga</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Data 1</td>
                                      <td>Data 2</td>
                                      <td>Data 3</td>
                                      <td>
                                        <div class="d-flex justify-content-between">
                                          <button type="button" class="btn btn-block bg-gradient-success ">Edit</button>
                                          <button type="button" class="btn btn-block bg-gradient-success ">Edit</button>
                                        </div>
                                        </td>
                                  
                                  </tr>
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
