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
                    <label for="">Tanggal</label>
                        <input type="date" class="form-control" id="" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Volume T1</label>
                        <input type="number" class="form-control" id="" name="volume_t1" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Meteran T1</label>
                        <input type="number" class="form-control" id="" name="meteran_t1" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Volume T2</label>
                        <input type="number" class="form-control" id="" name="volume_t2" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Meteran T2</label>
                        <input type="number" class="form-control" id="" name="meteran_t2" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Volume T3</label>
                        <input type="number" class="form-control" id="" name="volume_t3" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Meteran T3</label>
                        <input type="number" class="form-control" id="" name="meteran_t3" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Volume T4</label>
                        <input type="number" class="form-control" id="" name="volume_t4" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Meteran T4</label>
                        <input type="number" class="form-control" id="" name="meteran_t4" step="any">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>