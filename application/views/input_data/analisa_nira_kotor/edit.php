

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
                        <label class="form-label" for="exampleInputEmail1">pH</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$ph;?>" name="ph" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">brix</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$brix;?>" name="brix" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Suhu</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$suhu;?>" name="suhu" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>