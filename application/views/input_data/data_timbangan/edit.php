

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
                        <label class="form-label" for="exampleInputEmail1">Berat Tebu</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$berat_tebu;?>" name="berat_tebu" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Totalizer Nira Mentah</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$totalizer;?>" name="totalizer" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Flow</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$flow_nm;?>" name="flow_nm" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">NM % Tebu</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$nm_tebu;?>" name="nm_tebu" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>