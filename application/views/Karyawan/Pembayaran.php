



    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">Pembayaran</h3>
              <div class="box-tools pull-right">
                
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                <?php echo $this->session->flashdata('error'); ?>
                <?php echo $this->session->flashdata('success'); ?>
                <?php echo $this->session->flashdata('hapus'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama user</th>
                  <th>Nama Barang</th>
                  <th>Total_Harga</th>           
                  <th>Status</th>
                  <th>Aksi</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($pembayaran as $s) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $s->nama?></td>
                      <td><?php echo $s->nama_produk; ?></td>
                      <td><?php echo $s->harga_produk; ?></td>
                      <td><?php 
                          if ($s->status_order == '0') {
                            echo "Belum Bayar";
                          }elseif ($s->status_order == '1') {
                            echo "Sudah Bayar";
                          }
                          else{
                            echo "Belum Check Out";
                          }
                       ?></td>
                      <td style="text-align: center;">
                        <a href="#val<?php echo $s->id_order;?>" data-toggle="modal" class="btn btn-block btn-success btn-sm">Approve</a>
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





    <?php foreach ($pembayaran as $s) { ?>
        <div class="modal fade" id="val<?php echo $s->id_order?>">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('karyawan/order/validasi'); ?>" method="post" >
                  <p>Apakah anda yakin ingin mengubah Status ini menjadi sudah bayar?</p>
                <input type="hidden" value="<?=$s->id_order;?>" name="id_order">
                <input type="hidden" value="1" name="status_order">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Validasi</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
    </div>
      
    <?php } ?>
   