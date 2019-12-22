<a href="" data-toggle="modal" data-target="#import" class="btn btn-info">
    <i class="fa fa-file"></i> Import
</a>

<div class="example-modal">
    <div class="modal" id="import">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Import Data</h4>
          </div>
            <?php
                // Form Open
                echo form_open_multipart(base_url('admin/belum_diproses/import'), 'class="form-horizontal"');
            ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?php echo base_url() ?>assets/excel/importexcel.xlsx" class="btn btn-warning btn-block">
                        <h5>DOWNLOAD TEMPLATE EXCEL</h5>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label>Import Data</label>
                        <input type="file" name="file" id="file" required accept=".xls, .xlsx" class="form-control"/>
                    </div>
                </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
            <input type="submit" name="import" value="Import" class="btn btn-info" />
          </div>
        </div><!-- /.modal-content -->
            <?php echo form_close(); ?>
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.example-modal -->
