

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

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Belerang</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$belerang;?>" name="belerang" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Kapur</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$kapur;?>" name="kapur" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Floc</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$floc_total;?>" name="floc_total" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">NaOH</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$naoh_evap;?>" name="naoh_evap" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Bulab</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$bulab;?>" name="bulab" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">DIIAL</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$diial;?>" name="diial" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">B894</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$b894;?>" name="b894" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">B895</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$b895;?>" name="b895" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">B210</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$b210;?>" name="b210" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">As. Phospat</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$asam_phospat;?>" name="asam_phospat" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Blotong</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$blotong;?>" name="blotong" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>