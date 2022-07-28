

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6><?=$page_title;?></h6>
            </div>
            <div class="card-body pt-0">
                <form action="<?=$form_handler_update;?>" method="post">

                    <input type="hidden" name="id" value="<?=$id;?>">

                    <div class="row">

                        <div class="col">
                            <label for="">Sadah JJ</label>
                            <input type="number" class="form-control" name="sadah_jj" step="any" value="<?=$sadah_jj;?>">
                        </div>

                        <div class="col">
                            <label for="">TDS JJ</label>
                            <input type="number" class="form-control" name="tds_jj" step="any" value="<?=$tds_jj;?>">
                        </div>

                        <div class="col">
                        <label for="">pH JJ</label>
                            <input type="number" class="form-control" name="ph_jj" step="any" value="<?=$ph_jj;?>">
                        </div>

                        <div class="col">
                        <label for="">Phospat JJ</label>
                            <input type="number" class="form-control" name="phospat_jj" step="any" value="<?=$phospat_jj;?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">TDS DJJ</label>
                            <input type="number" class="form-control" name="tds_djj" step="any" value="<?=$tds_djj;?>">
                        </div>

                        <div class="col">
                        <label for="">pH DJJ</label>
                            <input type="number" class="form-control" name="ph_djj" step="any" value="<?=$ph_djj;?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">Sadah Y1</label>
                            <input type="number" class="form-control" name="sadah_y1" step="any" value="<?=$sadah_y1;?>">
                        </div>

                        <div class="col">
                            <label for="">TDS Y1</label>
                            <input type="number" class="form-control" name="tds_y1" step="any" value="<?=$tds_y1;?>">
                        </div>

                        <div class="col">
                        <label for="">pH Y1</label>
                            <input type="number" class="form-control" name="ph_y1" step="any" value="<?=$ph_y1;?>">
                        </div>

                        <div class="col">
                        <label for="">Phospat Y1</label>
                            <input type="number" class="form-control" name="phospat_y1" step="any" value="<?=$phospat_y1;?>">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <label for="">Sadah Y2</label>
                            <input type="number" class="form-control" name="sadah_y2" step="any" value="<?=$sadah_y2;?>">
                        </div>

                        <div class="col">
                            <label for="">TDS Y2</label>
                            <input type="number" class="form-control" name="tds_y2" step="any" value="<?=$tds_y2;?>">
                        </div>

                        <div class="col">
                        <label for="">pH Y2</label>
                            <input type="number" class="form-control" name="ph_y2" step="any" value="<?=$ph_y2;?>">
                        </div>

                        <div class="col">
                        <label for="">Phospat Y2</label>
                            <input type="number" class="form-control" name="phospat_y2" step="any" value="<?=$phospat_y2;?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">TDS DY</label>
                            <input type="number" class="form-control" name="tds_dy" step="any" value="<?=$tds_dy;?>">
                        </div>

                        <div class="col">
                        <label for="">pH DY</label>
                            <input type="number" class="form-control" name="ph_dy" step="any" value="<?=$ph_dy;?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col">
                            <label for="">Sadah WTP</label>
                            <input type="number" class="form-control" name="sadah_wtp" step="any" value="<?=$sadah_wtp;?>">
                        </div>

                        <div class="col">
                            <label for="">TDS WTP</label>
                            <input type="number" class="form-control" name="tds_wtp" step="any" value="<?=$tds_wtp;?>">
                        </div>

                        <div class="col">
                        <label for="">pH WTP</label>
                            <input type="number" class="form-control" name="ph_wtp" step="any" value="<?=$ph_wtp;?>">
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <label for="">Sadah HW</label>
                            <input type="number" class="form-control" name="sadah_hw" step="any" value="<?=$sadah_hw;?>">
                        </div>

                        <div class="col">
                            <label for="">TDS HW</label>
                            <input type="number" class="form-control" name="tds_hw" step="any" value="<?=$tds_hw;?>">
                        </div>

                        <div class="col">
                        <label for="">pH HW</label>
                            <input type="number" class="form-control" name="ph_hw" step="any" value="<?=$ph_hw;?>">
                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="col">
                            <label for="">Tangki 1</label>
                            <input type="number" class="form-control" name="volume_tangki1" step="any" value="<?=$volume_tangki1;?>">
                        </div>

                        <div class="col">
                            <label for="">Tangki 2</label>
                            <input type="number" class="form-control" name="volume_tangki2" step="any" value="<?=$volume_tangki2;?>">
                        </div>

                    </div>

                    <hr>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>