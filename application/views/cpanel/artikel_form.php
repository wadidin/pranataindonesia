

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          if($stat == 'new') {
            echo "Form Tambah Artikel Baru";
          } else {
            echo "Form Edit Artikel";
          }
        ?>
        <small>cPanel Pranata Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>cPanel/dashboard/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>cPanel/artikel/">Manajemen Artikel</a></li>
        <li class="active">
          <?php
            if($stat == 'new') {
              echo "Form Tambah Artikel";
            } else {
              echo "Form Edit Artikel";
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
                    echo "Form Tambah Artikel Baru";
                  } else {
                    echo "Form Edit Artikel";
                  }
                ?>
              </h3>
            </div>

            <div class="box-body">
              <form action="<?php echo base_url('cPanel/artikel/save/'); ?>" enctype="multipart/form-data" method="POST">
                <div class="col-md-12">
                
                  <div class="form-group">
                    <label>Judul Artikel : </label>
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
                    <label>Gambar Header : </label>
                    
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-camera"></i>
                      </div>
                      <input type="file" class="btn btn-primary" name="foto" required="" value="<?=$image ?>">
                    </div><!-- /.input group -->
                    <p>* Tipe file berupa file JPG/PNG</p>
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Isi Artikel : </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa  fa-list-alt"></i>
                        </div>
                        <textarea name="content" rows="10" cols="118"><?=$content ?></textarea>
                      </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Kategori : </label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                      </div>
                      <select name="kategori" class="form-control">
                        <option value="news">News</option>
                        <option value="pengumuman">Pengumuman</option>
                        <option value="kampus">Kampus</option>
                        <option value="techno">Techno</option>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Status : </label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-gears"></i>
                      </div>
                      <select name="status" class="form-control">
                        <option value="1"> Publish</option>
                        <option value="0"> Draft</option>
                      </select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                <div class="box-footer">
                  <div class="row">
                    <a href="<?php echo base_url(); ?>cPanel/artikel/" class="btn btn-warning pull-left"><i class="fa fa-angle-double-left"></i> &nbsp; Kembali</a> &nbsp; &nbsp;
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; 
                      <?php
                        if($stat == 'new') {
                          echo "Simpan Artikel";
                        } else {
                          echo "Update Artikel";
                        }
                      ?>
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>

  </div>
 
