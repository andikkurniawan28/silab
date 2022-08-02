

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
                        <label class="form-label" for="exampleInputEmail1">Totalizer</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$totalizer_imb;?>" name="totalizer_imb" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Flow Imbibisi</label>
                        <input class="form-control" id="exampleInputEmail1" type="number" step="any" value="<?=$flow_imb;?>" name="flow_imb" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>