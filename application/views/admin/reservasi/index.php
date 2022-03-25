<?=
    $this->session->flashdata('pesan');
?>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
                <a href="<?=base_url()?>index.php/admin/reservasi/add" class="btn btn-primary float-right">tambah data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Tamu</th>
                    <th>Nama Kamar</th>
                    <th>Tanggal Checkin</th>
                    <th>Jumlah Kamar</th>
                    <th>Status</th>
                    <th>Option</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no=1;
                        foreach($datareservasi as $tampilkan){
                          echo"<tr>";
                          echo "<td>$no</td>";
                          echo "<td>$tampilkan->nama</td> ";
                          echo "<td>$tampilkan->namakamar</td> ";
                          echo "<td>$tampilkan->startdate</td> ";
                          echo "<td>$tampilkan->qtykamar</td> ";
                          echo "<td>$tampilkan->status</td> ";
                          
                          echo "<td><button class='btn btn-primary btn-xs'><li class='fa fa-eye'></li></button></td> ";
                          echo"</tr>";
                        }
                    ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
         </div>
    </div>