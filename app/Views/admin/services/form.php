<div id="form-add" class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah</h3>
    </div>
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="name_service">Nama Service</label>
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="text" class="form-control" id="name_service" placeholder="Nama Service">
                <span id="error_name_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="icon_service">Icon Service</label>
                <input type="text" class="form-control" id="icon_service" placeholder="Icon Service">
                <span id="error_icon_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="description_service">Deskripsi Service</label>
                <input type="text" class="form-control" id="description_service" placeholder="description Service">
                <span id="error_description_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Service</label>
                <input type="number" class="form-control" id="ord" placeholder="urutan Service">
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
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="name_service">Nama Service</label>
                <input type="hidden" class="form-control" id="update_id">
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="text" class="form-control" id="edit_name_service" placeholder="Nama Service">
                <span id="error_name_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="icon_service">Icon Service</label>
                <input type="text" class="form-control" id="edit_icon_service" placeholder="Icon Service">
                <span id="error_icon_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="description_service">Deskripsi Service</label>
                <input type="text" class="form-control" id="edit_description_service" placeholder="description Service">
                <span id="error_description_service" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Service</label>
                <input type="number" class="form-control" id="edit_ord" placeholder="urutan Service">
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