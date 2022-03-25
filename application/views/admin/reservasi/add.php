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
              <form action="<?=base_url()?>index.php/admin/reservasi/add" method="POST">
                <div class="card-body">
                <div class="form-group">
                  <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input"data-target="#reservationdate" name="enddate"/>
                        <div class="text-danger"><?= form_error('reservasi')?></div>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <label >Tipe Kamar</label>
                    <input type="text"  class="form-control"  placeholder="Enter Tipe Kamar" name="startdate">
                    <div class="text-danger"><?= form_error('reservasi')?></div>
                  </div>
                </div>
               
                <!-- /.form group -->
                  <!-- <div class="form-group"> 
                    <label >Tipe Kamar</label>
                    <input type="text"  class="form-control"  placeholder="Enter Tipe Kamar" name="reservasi">
                    
                  </div> -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mx-2">Submit</button>
                  <a href="<?=base_url()?>index.php/admin/reservasi" class="btn btn-warning float-left">Kembali</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
    </div>