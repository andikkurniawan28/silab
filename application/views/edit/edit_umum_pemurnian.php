

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6>Analisa Umum</h6>
            </div>
            <div class="card-body pt-0">
                <form action="<?=base_url('analisa/proses_edit_analisa_gilingan');?>" method="post">

                    <input type="hidden" name="id" value="<?=$id;?>">
                    <input type="hidden" name="bahan" value="<?=$bahan;?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">CaO</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$cao;?>" name="cao" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">pH</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$ph;?>" name="ph" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Turbidity</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$tur;?>" name="tur" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>