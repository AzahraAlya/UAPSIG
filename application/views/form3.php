<!-- Content Wrapper. Contains page content -->
<body>
  

<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-10">
                <a href="<?php echo base_url('Tamp/form')?>" class="bagde badge-primary">Tambah </a>
                    <div class="card">
                    
                        <div class="card-header">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Koordinat</th>
                                <th>Aksi</th>
                              </tr>
                              </thead>
                              
                              <tbody>
                                  <?php $nomor = 1; ?>
                                  <?php foreach ($data as $c) : ?>
                                      <tr>
                                          <td><?php echo $nomor++;?></td>
                                          <td><?php echo $c['nama'];?></td>
                                          <td><?php echo $c['coord'];?></td>
                                          <td>
                                          
                                          <a href="<?php echo base_url()?>Tamp/hapus_data/<?php echo $c['id_lokasi']; ?>" class="bagde badge-danger">Hapus </a>
                                          <a href="<?php echo base_url()?>Tamp/form2/<?php echo $c['id_lokasi'];?> " class="bagde badge-success">Update </a>

                                          </td>
                                      </tr>

                                      
                                  <?php endforeach;?>
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section> 
</div>
</body>