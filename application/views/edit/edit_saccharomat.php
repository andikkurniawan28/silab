

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h6>Saccharomat</h6>
            </div>
            <div class="card-body pt-0">
                <form action="<?=base_url('analisa/proses_edit_saccharomat');?>" method="post">
                    
                    <input type="hidden" name="id" value="<?=$id;?>">

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">ID Sampel</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$bahan;?>" name="bahan" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Brix</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$brix;?>" name="brix" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputPassword1">Pol</label>
                        <input class="form-control" id="exampleInputPassword1" type="number" step="any" value="<?=$pol;?>" name="pol" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>