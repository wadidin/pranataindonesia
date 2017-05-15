

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          if($stat == 'new') {
            echo "Form Tambah Menu Baru";
          } else {
            echo "Form Edit Menu";
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
              echo "Form Tambah Menu Baru";
            } else {
              echo "Form Edit Menu";
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
                    echo "Form Tambah Menu Baru";
                  } else {
                    echo "Form Edit Menu";
                  }
                ?>
              </h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php echo base_url('cPanel/menu/save/'); ?>" enctype="multipart/form-data" method="POST">
                <div class="col-md-6"><br>

                  <div class="form-group">
                    <label>Nama Menu : </label>
                      <input type="hidden" name="kode" value="<?=$kode?>" />
                      <input type="hidden" name="stat" value="<?=$stat?>" />
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check-square"></i>
                        </div>
                        <input type="text" class="form-control" name="menu_name" value="<?=$menu_name ?>"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Menu Parent : </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check-square"></i>
                        </div>
                        <select class="form-control" name="parent_id">
                          <option value="0"> Root</option>
                          <?php foreach ($menu->result() as $menu):?>
                            <option value="<?php echo $menu->menu_id; ?>"><?php echo $menu->menu_name; ?></option>
                          <?php endforeach ?>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Type : </label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check-square"></i>
                        </div>
                        <select class="form-control" name="view_type">
                          <option value="1"> Url</option>
                          <option value="2"> Artikel</option>
                          <option value="3"> Category</option>
                          <option value="4"> Page</option>
                        </select>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                                    
                    <div class="form-group">
                      <label>Content Url :</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-check-square"></i>
                        </div>
                          <input type="text" class="form-control" name="content_id" value="<?=$content_id ?>" placeholder="Kosongkan atau isikan tanda # bila menu utama"/>
                        </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Status :</label>
                      <div class="input-group">
                        <input type="radio" class="minimal" name="status" value="1" checked="checked"/> Publish   &nbsp; &nbsp; &nbsp;
                        <input type="radio" class="minimal" name="status" value="0"/> Draft
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>
                  
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>cPanel/menu/" class="btn btn-warning pull-left"><i class="fa fa-angle-double-left"></i> &nbsp; Kembali</a> &nbsp; &nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; 
                          <?php
                            if($stat == 'new') {
                              echo "Simpan Menu";
                            } else {
                              echo "Update Menu";
                            }
                          ?>
                        </button>
                      </div>
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
 
