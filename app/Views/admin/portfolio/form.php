<div id="form-add" class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah</h3>
    </div>
    <form id="form-tambah-portfolio" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="image_portfolio">Image Portfolio</label>
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="file" class="form-control" id="image_portfolio" placeholder="Image Portfolio">
                <span id="error_image_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="name_portfolio">Nama Portfolio</label>
                <input type="text" class="form-control" id="name_portfolio" placeholder="Nama Portfolio">
                <span id="error_name_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="name_portfolio">Link</label>
                <input type="text" class="form-control" id="link_portfolio" placeholder="Link Portfolio">
                <span id="error_link_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="description_portfolio">Deskripsi Portfolio</label>
                <input type="text" class="form-control" id="description_portfolio" placeholder="Description Portfolio">
                <span id="error_description_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Kemampuan</label>
                <input type="number" class="form-control" id="ord" placeholder="urutan Portfolio">
                <span id="error_ord" class="text-danger"></span>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" id="btn_insert" class="btn btn-primary">Tambah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

<div id="form-edit" class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Edit</h3>
    </div>
    <form id="form-edit-portfolio" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="image_portfolio">Image Portfolio</label>
                <div id="preview-image-portfolio"></div>
                <br>
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="file" class="form-control" id="edit_image_portfolio" placeholder="Image Portfolio">
                <span id="error_image_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="name_portfolio">Nama Portfolio</label>
                <input type="hidden" class="form-control" id="update_id">
                <input type="text" class="form-control" id="edit_name_portfolio" placeholder="Nama Portfolio">
                <span id="error_name_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="link_portfolio">Link Portfolio</label>
                <input type="text" class="form-control" id="edit_link_portfolio" placeholder="Deskripsi Portfolio">
                <span id="error_link_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="description_portfolio">Deskripsi Portfolio</label>
                <input type="text" class="form-control" id="edit_description_portfolio" placeholder="Deskripsi Portfolio">
                <span id="error_description_portfolio" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Portfolio</label>
                <input type="number" class="form-control" id="edit_ord" placeholder="urutan Portfolio">
                <span id="error_ord" class="text-danger"></span>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" id="btn_update" class="btn btn-primary">Ubah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        document.getElementById("form-edit").style.display = "none";
    });
</script>