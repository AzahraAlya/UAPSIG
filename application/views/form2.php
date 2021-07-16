
<div class="content-wrapper">
    
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <form method ="POST" action="<?php echo base_url('Tamp/proses_edit_data') ?>">
                            <input type="hidden" class="form-control" name="id_lokasi" id="id_lokasi">
                                <div class="form-group">
                                    <label>nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                                </div>
                                <div class="form-group">
                                    <label>koordinat</label>
                                    <input type="text" class="form-control" name="coord" id="coord"placeholder="koordinat lokasi">
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

  