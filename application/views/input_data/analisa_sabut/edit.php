

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
                        <label class="form-label" for="exampleInputEmail1">Sabut Basah</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$sabut_basah;?>" name="sabut_basah" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Sabut Kering</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$sabut_kering;?>" name="sabut_kering" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Kadar Sabut</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$kadar_sabut;?>" name="kadar_sabut" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>