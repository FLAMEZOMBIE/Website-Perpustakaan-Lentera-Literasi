<!--css khusus halaman ini -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">


<!--modal dialog untuk hapus -->
 
<!--content -->
<div class="box box-solid box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Pengembalian</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <div class="form-group"></div>
   <table id="table-buku1" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead class="bg-warning">
            <tr>
                <th width="5%">No</th>
                <th >ID Anggota</th>
                <th >Nama Peminjam</th>
                <th>Kelas</th>
                <th >Judul Buku</th>
                <th >Tanggal Pinjam</th>
                <th >Tanggal Kembali</th>
                <th >Tanggal Dikembalikan</th>
                <th >Telat</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
         <?php
  $no = 1;
    foreach($data_detail_pinjam->result_array() as $op)
    {
         if ($op['flag']==1) {
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>

                        <?php $op['id_pinjam'];?>
                        <td><?php $buku=$op['id_pinjam'];
                            foreach ($data_pinjam ->result_array()  as $op2)  {
                              if($op2['id_pinjam']==$buku){                                   
                                    echo $id_anggota=$op2['id_anggota'];                                  
                                 }        
                            }?>
                        </td> 

                        <td><?php $anggota=$op2['id_anggota'];
                            foreach ($data_anggota ->result_array()  as $op3)  {
                              if($op3['id_anggota']==$id_anggota){                                   
                                    echo $op3['nama'];
                                    $kelas=$op3['id_kelas'];
                                   
                                 }        
                            }?>
                        </td> 
                        <td><?php $Kelasq=$op3['id_kelas'];
                            foreach ($data_kelas->result_array() as $op4) {
                              if ($op4['id_kelas']==$kelas) {
                                echo $op4['kelas'];
                              }
                            }?>
                            </td>
                        <td><?php $op['id_buku'];
                            foreach ($data_buku->result_array() as $op5) {
                              # code...
                              if ($op5['id_buku']==$op['id_buku']) {
                                # code...
                                echo $op5['judul'];
                              }
                            }?>
                            </td>

                 <td><?php  $buku=$op['id_pinjam'];
                            foreach ($data_pinjam ->result_array()   as $op6)  {
                              if($op6['id_pinjam']==$buku){                                   
                                  echo $op6['tgl_pinjam'];
                                 }        
                            }?>
                        </td>
                  <td><?php  $buku=$op['id_pinjam'];
                            foreach ($data_pinjam ->result_array()   as $op6)  {
                              if($op6['id_pinjam']==$buku){                                   
                                  echo $op6['tgl_kembali'];
                                 }        
                            }?>
                        </td> 
                  <td><?php $op['id_pinjam'];
                      foreach ($data_kembali->result_array() as $op6) {
                        if ($op6['id_pinjam']==$op['id_pinjam']) {
                          echo $op6['tgl_dikembalikan'];
                        }
                      }?>
                      </td>
                    <td><?php $op['id_pinjam'];
                      foreach ($data_kembali->result_array() as $op6) {
                        # code...
                        if ($op6['id_pinjam']==$op['id_pinjam']) {
                          # code...
                          echo $op6['terlambat'];
                        }
                      }?>
                      </td>
                    <td><?php $op['id_pinjam'];
                          foreach ($data_kembali->result_array() as $op6) {
                            # code...
                            if ($op6['id_pinjam']==$op['id_pinjam']) {
                              # code...
                              echo $op6['denda'];
                            }
                          }?>
                          </td>          
               
                </tr>
<?php
}
}
  ?>            
         </tbody>
    </table>
  </div>
  <div class="box-footer">
    Menampilkan daftar buku
  </div><!-- box-footer -->
</div><!-- /.box -->


      
  