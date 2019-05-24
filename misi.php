<?php include("header.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Menyusun Misi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Misi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Menyusun Misi OPD</h3>
              <hr>
            </div>
            <!-- /.box-header -->
            <button type="button" class="btn bg-maroon margin"><i class="fa fa-fw fa-file-pdf-o"></i> Pdf</button>
            <button type="button" class="btn bg-olive margin"><i class="fa fa-fw fa-file-excel-o"></i> Excel</button>
            <button type="button" class="btn bg-navy margin" data-toggle="modal" data-target="#modal-misi"><i class="fa fa-fw fa-plus-square-o"></i> Tambah</button>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td> 4</td>
                      <td> 4</td>
                      <td>
                        <button type="button" class="btn bg-orange margin"><i class="fa fa-fw fa-edit"></i></button>
                        <button type="button" class="btn btn-danger "><i class="fa fa-fw fa-trash-o"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php");?>