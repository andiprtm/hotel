<?=
    $this->session->flashdata('pesan');
?>

<div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Tipe Kamar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url()?>index.php/admin/tipekamar/add" method="POST">
                <div class="card-body">
                  <div class="form-group"> 
                    <label >Tipe Kamar</label>
                    <input type="text"  class="form-control"  placeholder="Enter Tipe Kamar" name="tipekamar">
                    <div class="text-danger"><?= form_error('tipekamar')?></div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mx-2">Submit</button>
                  <a href="<?=base_url()?>index.php/admin/tipekamar" class="btn btn-warning float-left">Kembali</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
    </div>