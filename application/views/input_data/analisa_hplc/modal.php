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
                    <label for="">ID Sampel</label>
                        <input type="number" class="form-control" id="" name="bahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Fruktosa</label>
                        <input type="number" class="form-control" id="" name="fruktosa" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Glukosa</label>
                        <input type="number" class="form-control" id="" name="glukosa" step="any">
                    </div>
                    <div class="mb-3">
                        <label for="">Sukrosa</label>
                        <input type="number" class="form-control" id="" name="sukrosa" step="any">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>