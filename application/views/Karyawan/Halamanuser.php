
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">DATA USER</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
              </div>

            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah User</button>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Level</th>
                  <th>No HP</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($user as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->username; ?></td>
                      <td><?php echo $u->nama; ?></td>
                      <td><?php 
                              if ($u->jenis_kelamin == 'Laki-Laki') {
                                 echo "Laki-Laki";
                              }else{
                                  echo "Perempuan";
                              }?></td>
                      <td><?php if ($u->level == '3') {
                                  echo "User";
                                }else {
                                    echo  "Karyawan";
                                }?></td>
                      <td><?php echo $u->no_hp; ?></td>
                      <td style="text-align: center;">
                        
                        <a href="#edit<?php echo $u->id_user;?>" data-toggle="modal" ><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('karyawan/user/hapus/'.$u->id_user);?>" onclick="return confirm('Anda yakin?')" ><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
                      </td>
                    </tr>
                    <?php } ?>

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
   
    <div class="modal fade" id="tambah">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title ">Tambah User</h4>
              </div>
              
              <form class="form-horizontal" action="<?php echo base_url('karyawan/user/tambah'); ?>" method="post">
              <div class="box-body">


                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="username">Username</label>
                  <div class="col-sm-8">
                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required="" minlength="5">
                  </div>
                </div>
                

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="email">Email</label>
                  <div class="col-sm-8">
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required="">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="jenis_kelamin">Jenis Kelamin</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Laki-Laki" checked> Laki-Laki
                    </label>
                    </div>
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Perempuan" > Perempuan
                    </label>
                    </div>
                    </div>
                    
                </div>

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No Hp</label>
                  <div class="col-sm-8">
                    <input type="number" pattern="" id="telephone" class="form-control" name="no_hp" placeholder="No Hp" required="">
                  </div>
                </div>

                <div class="form-group">
                <label for="level" class="col-sm-2 control-label">Level</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="level" style="width: 100%;" required="" >
                            
                            <option>---Pilih---</option>
                            <option value="1">User</option>
                            <option value="3">Karyawan</option>
                </select>
                </div>
                </div>
                
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" minlength="5">
                  </div>
                </div>
               

              </div>
            


              <div class="modal-footer">
                
                <button type="submit" id="send" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <?php foreach ($user as $u) { ?>
        <div class="modal fade" id="edit<?php echo $u->id_user?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title ">Edit User</h4>
              </div>
              
              <form class="form-horizontal" action="<?php echo base_url('karyawan/user/update'); ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="hidden"  class="form-control" placeholder="id" name="id_user" required="" value="<?php echo $u->id_user?>">
                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" required="" value="<?php echo $u->nama?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="username">Username</label>
                  <div class="col-sm-8">
                    <input type="text" minlength="5" id="username" class="form-control" placeholder="Username" name="username" required="" value="<?php echo $u->username?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="email">Email</label>
                  <div class="col-sm-8">
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required="" value="<?php echo $u->email?>">
                  </div>
                </div>
                

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="jenis_kelamin">Jenis Kelamin</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Laki-Laki" <?php if ($u->jenis_kelamin == 'Laki-Laki') 
                      {
                          echo "checked";
                      } ?> > Laki-Laki
                    </label>
                    </div>
                    <div class="radio">
                    <label>
                      <input type="radio" class="flat-red" name="jenis_kelamin" value="Perempuan" <?php if ($u->jenis_kelamin == 'Perempuan') 
                      {
                          echo "checked";
                      } ?> > Perempuan
                    </label>
                    </div>
                    </div>
                    
                </div>

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No Hp</label>
                  <div class="col-sm-8">
                    <input type="number" id="telephone" class="form-control" name="no_hp" placeholder="No Hp" required="" value="<?php echo $u->no_hp?>">
                  </div>
                </div>

                
                
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" minlength="5" class="form-control" id="password2" placeholder="Password" name="password" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="level" class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-8">
                          <select class="form-control select2" name="level" style="width: 100%;">
                                      
                                      <option <?php if ($u->level == '1') { echo 'selected'; } ?> value="1">User</option>
                                      <option <?php if ($u->level == '3') { echo 'selected'; } ?> value="3">Karyawan</option>
                                      
                          </select>
                     </div>
                </div>
               

              </div>
            


              <div class="modal-footer">
                
                <button type="submit" id="send" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <?php } ?>


        


