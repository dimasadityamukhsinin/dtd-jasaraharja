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
                        <a href="<?php echo base_url('admin/selesai/cetak_datasemua')?>" class="btn btn-warning btn-block" target="_blank">
                        <h5>CETAK SEMUA</h5>
                        </a>
                    </div>
                </div>
                <?php
                    // Form Open
                    echo form_open_multipart(base_url('admin/selesai/cetak_datasemuapelaksanaan'), 'class="form-horizontal"');
                ?>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Cetak Berdasarkan Tanggal Pelaksanaan</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Pelaksanaan" value="<?php echo set_value('tanggal') ?>" required>
                        </div>
                    </div>
                </p>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="Cetak Tanggal Pelaksanaan" class="btn btn-info"/>
                        </div>
                    </div>
                </p>
                <?php echo form_close(); ?>

                <?php
                    // Form Open
                    echo form_open_multipart(base_url('admin/selesai/cetak_databulantahun'), 'class="form-horizontal"');
                ?>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Cetak Berdasarkan Tahun Dan Bulan</label>
                            <input type="number" name="tahun" class="form-control" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>" />
                            <select name="bulan" class="form-control">
                                <option value='1'>Januari</option>
                                <option value='2'>Februari</option>
                                <option value='3'>Maret</option>
                                <option value='4'>April</option>
                                <option value='5'>Mei</option>
                                <option value='6'>Juni</option>
                                <option value='7'>Juli</option>
                                <option value='8'>Agustus</option>
                                <option value='9'>September</option>
                                <option value='10'>Oktober</option>
                                <option value='11'>November</option>
                                <option value='12'>Desember</option>
                            </select>
                        </div>
                    </div>
                </p>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="Cetak Bulan Dan Tahun" class="btn btn-info" />
                        </div>
                    </div>
                </p>
                <?php echo form_close(); ?>

                <?php
                    // Form Open
                    echo form_open_multipart(base_url('admin/selesai/cetak_regional'), 'class="form-horizontal"');
                ?>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Cetak Berdasarkan Regional</label>
                            <select name="regional" class="form-control">
                                <?php foreach($regional as $regional) { ?>
                                <option value="<?php echo $regional->regional ?>">
                                    <?php echo $regional->nama_regional ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </p>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="Cetak Regional" class="btn btn-info" />
                        </div>
                    </div>
                </p>
                <?php echo form_close(); ?>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal -->
