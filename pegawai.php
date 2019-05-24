<?php include("header.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Menyusun Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Menyusun Pegawai OPD</h3>
              <hr>
              <div align="center">
                <h1>Daftar Pegawai</h1>
                <hr>
              </div>
              <table id="">
                <tbody>
                <tr>
                  <td width="15%">Urusan </td>
                  <td width="75%">: Urusan Wajib Pelayanan Dasar</td>
                </tr>
                <tr>
                  <td width="15%">Bidang </td>
                  <td width="75%">: Pendidikan</td>
                </tr>
                <tr>
                  <td width="15%">Unit </td>
                  <td width="75%">: Dinas Pendidikan dan Kebudayaan</td>
                </tr>
                <tr>
                  <td width="15%">Sub </td>
                  <td width="75%">: Dinas Pendidikan dan Kebudayaan</td>
                </tr>
                </tfoot>
              </table>
              <hr>
            </div>
            <!-- /.box-header -->
            
              <button type="button" class="btn bg-maroon margin"><i class="fa fa-fw fa-file-pdf-o"></i> Pdf</button>
              <button type="button" class="btn bg-olive margin"><i class="fa fa-fw fa-file-excel-o"></i> Excel</button>
              <button type="button" class="btn bg-navy margin" data-toggle="modal" data-target="#modal-pegawai"><i class="fa fa-fw fa-plus-square-o"></i> Tambah</button>
              <div class="box-body" style="overflow: auto">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>NIP</th>
                        <th>Golongan</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Pendidikan</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td> Nama</td>
                        <td> Jenis Kelamin</td>
                        <td> NIP</td>
                        <td> Golongan</td>
                        <td> Pangkat</td>
                        <td> Jabatan</td>
                        <td> Pendidikan</td>
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