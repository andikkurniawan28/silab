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
                    <div class="mb-3">
                    <label for="">Belerang</label>
                        <input type="number" class="form-control" id="" name="belerang" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Kapur</label>
                        <input type="number" class="form-control" id="" name="kapur" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Floc</label>
                        <input type="number" class="form-control" id="" name="floc_total" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">NaOH</label>
                        <input type="number" class="form-control" id="" name="naoh_evap" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Bulab</label>
                        <input type="number" class="form-control" id="" name="bulab" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">DIIAL</label>
                        <input type="number" class="form-control" id="" name="diial" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">B894</label>
                        <input type="number" class="form-control" id="" name="b894" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">B895</label>
                        <input type="number" class="form-control" id="" name="b895" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">B210</label>
                        <input type="number" class="form-control" id="" name="b210" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Asam Phospat</label>
                        <input type="number" class="form-control" id="" name="asam_phospat" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Blotong</label>
                        <input type="number" class="form-control" id="" name="blotong" step="any">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>