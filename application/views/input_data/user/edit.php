

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
                        <label class="form-label" for="exampleInputEmail1">Username</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" step="any" value="<?=$username;?>" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Password</label>
                        <input class="form-control" id="exampleInputEmail1" type="password" step="any" value="<?=$password;?>" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Nama</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" step="any" value="<?=$nama;?>" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Role</label>
                        <input class="form-control" id="exampleInputEmail1" type="text" step="any" value="<?=$role;?>" name="role" required>
                    </div>

                    <button class="btn btn-warning" type="submit">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>