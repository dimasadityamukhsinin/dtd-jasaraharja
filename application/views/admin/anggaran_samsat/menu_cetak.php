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
                <?php
                    // Form Open
                    echo form_open_multipart(base_url('admin/anggaran_samsat/cetak'), 'class="form-horizontal"');
                ?>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Cetak Berdasarkan Tahun</label>
                            <select class="form-control" style="width: 100%;" name="tahun">
                            <?php foreach ($tahunAnggaran as $row) {?>
                                <?php 
                                $selected = ''; 
                                if ($tahun == $row->tahun){
                                    $selected = 'selected';
                                } else {
                                    $selected = '';
                                } 
                                ?>
                                <option <?php echo $selected ?>><?php echo $row->tahun; ?></option>
                                <?php } ?> 
                            </select>
                        </div>
                    </div>
                </p>
                <p>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" name="cetak" target="_blank" value="Cetak" class="btn btn-info"/>
                        </div>
                    </div>
                </p>
                <?php echo form_close(); ?>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal -->
