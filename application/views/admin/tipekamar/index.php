<?=
    $this->session->flashdata('pesan');
?>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
                <a href="<?=base_url()?>index.php/admin/tipekamar/add" class="btn btn-primary float-right">tambah data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Tipe Kamar</th>
                    <th>Option</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no=1;
                        foreach($datatipekamar as $tampilkan){
                          echo"<tr>";
                          echo "<td>$no</td>";
                          echo "<td>$tampilkan->tipekamar</td> ";    
                          echo "<td><button class='btn btn-primary btn-xs'><li class='fa fa-eye'></li></button></td> ";
                          echo"</tr>";
                          $no++;
                        }
                    ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
         </div>
    </div>