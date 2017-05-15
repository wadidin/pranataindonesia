

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Artikel
        <small>cPanel Pranata Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>cPanel/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manajemen Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <a href="<?php echo base_url(); ?>cPanel/artikel/add/" class="btn btn-primary btn-sm"><i class='fa fa-plus-circle'></i>
              &nbsp; Tambah Artikel Baru</a>
            </div>

            <div class="col-xs-12">
              <?php echo $this->session->flashdata('save_artikel');?>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>NO</center></th>
                  <th width="20%">JUDUL ARTIKEL</th>
                  <th>URL/SLUG</th>
                  <th><center>TANGGAL</center></th>
                  <th>KATEGORI</th>
                  <th><center>STATUS</center></th>
                  <th width="15%"><center>AKSI</center></th>
                </tr>
                </thead>

                <tbody>
                 <?php
                  $no = 1; 
                  foreach ($artikel as $a) {
                 ?>
                <tr>
                  <td align="center"><b><?php echo $no++; ?>.</b></td>
                  <td><?php echo character_limiter($a['title'],10); ?></td>
                  <td><?php echo $a['slug']; ?></td>
                  <td align="center"><?php echo $a['date']; ?></td>
                  <td><?php echo $a['category']; ?></td>
                  <td align="center"><button class="btn bg-green btn-circle"><?php echo $a['status']; ?></td>
                  <td align="center"> 
                    <a href="<?=base_url('cPanel/artikel/edit')?>/<?=$a['id']?>/"><button class="btn bg-yellow btn-circle"><i class="fa fa-edit"></i></button></a> &nbsp; &nbsp;
                    <a onclick="return confirm('Kamu yakin ingin menghapus menu ini ?')" href="<?=base_url('cPanel/artikel/del')?>/<?=$a['id']?>/"><button class="btn bg-red btn-circle"><i class="fa fa-trash-o"></i></button></a>
                  </td>
                </tr>

                <?php 
                 }
                ?>

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
 
 