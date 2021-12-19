<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PRODUK</h3>
              <div class="box-tools pull-right">

                <?php echo $this->session->flashdata('gagal'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> DAFTAR</button>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Harga Produk</th>
                  <th>Foto</th>
                  <th>Deskripsi</th>                  
                  <th>AKSI</th>
                  
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($produk as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->nama_produk; ?></td>
                      <td><?php echo $s->harga_produk; ?></td>
                      <td><img src="<?php echo base_url();?>upload/foto/<?php echo $s->foto;?> "width="100" height="100"></td>
                      <td><?php echo $s->deskripsi; ?></td>
                      <td style="text-align: center;">
                        <a href="#edit" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('karyawan/produk/hapus/'.$s->id_produk);?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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

          <div class="modal fade" id="tambah">
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Produk</h4>
              </div>

            
              <form class="form-horizontal" action="<?php echo base_url('karyawan/produk/tambah'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="box-body">



                <div class="form-group">
                  <label class="col-sm-2 control-label" for="npsn">Nama Produk</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Produk" name="nama_produk" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Harga Produk</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Harga Produk" name="harga_produk" required="">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" for="">Gambar</label>
                  <div class="col-sm-8">
                    <input type="file"  name="foto" class="form-control-file"  required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" >Deskripsi Produk</label>
                  <div class="col-sm-8">
                    <input type="text"  class="form-control" placeholder="Deskripsi Produk" name="deskripsi" required="">
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


              