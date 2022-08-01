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
                    <label for="">berat_tebu</label>
                        <input type="number" class="form-control" id="" name="berat_tebu" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Totalizer</label>
                        <input type="number" class="form-control" id="" name="totalizer" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Flow</label>
                        <input type="number" class="form-control" id="" name="flow_nm" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">NM % Tebu</label>
                        <input type="number" class="form-control" id="" name="nm_tebu" step="any">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>