<div class="btn-group ">
    <a href="" title="Cetak" data-toggle="modal" data-target="#cetak" class="btn btn-success btn-lg">
        <i class="fa fa-print"></i> Cetak
    </a>
</div>

<div class="example-modal">
    <div class="modal" id="cetak">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Menu Cetak</h4>
          </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo base_url('petugas/sudah_diproses/cetak')?>" class="btn btn-warning btn-block" target="_blank">
                        <h5>CETAK SEMUA</h5>
                        </a>
                    </div>
                </div>
                <?php
                    // Form Open
                    echo form_open_multipart(base_url('petugas/sudah_diproses/cetak_akhir'), 'class="form-horizontal"');
                ?>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Cetak Berdasarkan Masa Akhir</label>
                            <input type="date" name="masa_akhir" class="form-control" placeholder="Masa Akhir" value="<?php echo set_value('masa_akhir') ?>" required>
                        </div>
                    </div>
                </p>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" name="cetak_akhir" target="_blank" value="Cetak Masa Akhir" class="btn btn-info"/>
                        </div>
                    </div>
                </p>
                <?php echo form_close(); ?>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal -->
