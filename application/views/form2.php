
<div class="content-wrapper">
    
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        <form method ="POST" action="<?php echo base_url('Tamp/proses_edit_data') ?>">
                            <input type="hidden" name="id_lokasi" value="<?php echo $data['id_lokasi'];?>">
                                <div class="form-group">
                                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                                    <input type="text" class="form-control" name="nama"  value="<?php echo $data['nama'];?>">
                                </div>
                                <div class="form-group">
                                    <label>koordinat</label>
                                    <input type="text" class="form-control" name="coord" id="coord" value="<?php echo $data['coord'];?>">
                                </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

  