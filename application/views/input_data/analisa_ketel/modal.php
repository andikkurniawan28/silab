<!-- Modal -->
<div class="modal fade" id="inputData" tabindex="-1" aria-labelledby="inputDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputDataLabel">Input Data <?=$page_title;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=$form_handler_create;?>" method="post">
                    
                    <div class="row">

                        <div class="col">
                            <label for="">Sadah JJ</label>
                            <input type="number" class="form-control" name="sadah_jj" step="any">
                        </div>

                        <div class="col">
                            <label for="">TDS JJ</label>
                            <input type="number" class="form-control" name="tds_jj" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH JJ</label>
                            <input type="number" class="form-control" name="ph_jj" step="any">
                        </div>

                        <div class="col">
                        <label for="">Phospat JJ</label>
                            <input type="number" class="form-control" name="phospat_jj" step="any">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">TDS DJJ</label>
                            <input type="number" class="form-control" name="tds_djj" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH DJJ</label>
                            <input type="number" class="form-control" name="ph_djj" step="any">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">Sadah Y1</label>
                            <input type="number" class="form-control" name="sadah_y1" step="any">
                        </div>

                        <div class="col">
                            <label for="">TDS Y1</label>
                            <input type="number" class="form-control" name="tds_y1" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH Y1</label>
                            <input type="number" class="form-control" name="ph_y1" step="any">
                        </div>

                        <div class="col">
                        <label for="">Phospat Y1</label>
                            <input type="number" class="form-control" name="phospat_y1" step="any">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <label for="">Sadah Y2</label>
                            <input type="number" class="form-control" name="sadah_y2" step="any">
                        </div>

                        <div class="col">
                            <label for="">TDS Y2</label>
                            <input type="number" class="form-control" name="tds_y2" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH Y2</label>
                            <input type="number" class="form-control" name="ph_y2" step="any">
                        </div>

                        <div class="col">
                        <label for="">Phospat Y2</label>
                            <input type="number" class="form-control" name="phospat_y2" step="any">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">TDS DY</label>
                            <input type="number" class="form-control" name="tds_dy" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH DY</label>
                            <input type="number" class="form-control" name="ph_dy" step="any">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">Sadah WTP</label>
                            <input type="number" class="form-control" name="sadah_wtp" step="any">
                        </div>

                        <div class="col">
                            <label for="">TDS WTP</label>
                            <input type="number" class="form-control" name="tds_wtp" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH WTP</label>
                            <input type="number" class="form-control" name="ph_wtp" step="any">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <label for="">Sadah HW</label>
                            <input type="number" class="form-control" name="sadah_hw" step="any">
                        </div>

                        <div class="col">
                            <label for="">TDS HW</label>
                            <input type="number" class="form-control" name="tds_hw" step="any">
                        </div>

                        <div class="col">
                        <label for="">pH HW</label>
                            <input type="number" class="form-control" name="ph_hw" step="any">
                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="col">
                            <label for="">Tangki 1</label>
                            <input type="number" class="form-control" name="volume_tangki1" step="any">
                        </div>

                        <div class="col">
                            <label for="">Tangki 2</label>
                            <input type="number" class="form-control" name="volume_tangki2" step="any">
                        </div>

                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>