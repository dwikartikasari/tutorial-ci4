<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>No Pelanggan</th>
                      <th>Nama Pelanggan</th>
                      <th>No Telp</th>
                      <th>Alamat</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                        foreach ($data_pelanggan as $r) {

                         ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $r['No_Pelanggan']; ?></td>
                              <td><?php echo $r['Nama_Pelanggan']; ?></td>
                              <td><?php echo $r['No_Telp']; ?></td>
                              <td><?php echo $r['Alamat']; ?></td>
                              <td>edit | hapus</td>
                            </tr>
                         <?php
                         $no++;
                        }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
</div>
<?php
echo $this->endSection();