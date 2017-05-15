

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          if($stat == 'new') {
            echo "Form Tambah Halaman Baru";
          } else {
            echo "Form Edit Halaman";
          }
        ?>
        <small>cPanel Pranata Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>cPanel/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>cPanel/menu/">Manajemen Menu</a></li>
        <li class="active">
          <?php
            if($stat == 'new') {
              echo "Form Tambah Halaman Baru";
            } else {
              echo "Form Edit Halaman";
            }
          ?>
        </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-list"></i>
              <h3 class="box-title">
                <?php
                  if($stat == 'new') {
                    echo "Form Tambah Halaman Baru";
                  } else {
                    echo "Form Edit Halaman";
                  }
                ?>
              </h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url('cPanel/halaman/save/'); ?>" enctype="multipart/form-data" method="POST">
                <div class="col-md-12"><br>

                  <div class="form-group">
                    <label>Judul Halaman : </label>
                    <input type="hidden" name="kode" value="<?=$kode?>" />
                    <input type="hidden" name="stat" value="<?=$stat?>" />

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-check-square"></i>
                      </div>
                      <input type="text" class="form-control" name="judul" value="<?=$judul ?>"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                                    
                  <div class="form-group">
                    <label>isi Halaman : </label>
                    <div class="input-group">

                      <div class="input-group-addon">
                        <i class="fa fa-check-square"></i>
                      </div>
                      <textarea name="content" rows="10" cols="120"><?=$content ?></textarea>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                                    
                  <div class="form-group">
                    <label>Status</label>
                    <div class="input-group">
                      
                      <div class="input-group-addon">
                        <i class="fa fa-check-square"></i>
                      </div>
                      <select name="status" class="form-control">
                        <option value="1"> Publish</option>
                        <option value="2"> Draft</option>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="box-footer">
                    <div class="row">
                      <a href="<?php echo base_url(); ?>cPanel/halaman/" class="btn btn-warning pull-left"><i class="fa fa-angle-double-left"></i> &nbsp; Kembali</a> &nbsp; &nbsp;
                      <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; 
                        <?php
                          if($stat == 'new') {
                            echo "Simpan Halaman";
                          } else {
                            echo "Update Halaman";
                          }
                        ?>
                      </button>
                    </div>
                  </div>

              </form>
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
 
