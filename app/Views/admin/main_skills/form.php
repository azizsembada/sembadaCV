<div id="form-add" class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah</h3>
    </div>
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="name_skill">Nama Kemampuan</label>
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="text" class="form-control" id="name_skill" placeholder="Nama Kemampuan">
                <span id="error_name_skill" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="percentage_skill">Persentase Kemampuan</label>
                <input type="number" class="form-control" id="percentage_skill" placeholder="Persentase Kemampuan">
                <span id="error_percentage_skill" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Kemampuan</label>
                <input type="number" class="form-control" id="ord" placeholder="urutan Kemampuan">
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
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <label for="name_skill">Nama Kemampuan</label>
                <input type="hidden" class="form-control" id="update_id">
                <input type="text" class="form-control" id="edit_name_skill" placeholder="Nama Kemampuan">
                <span id="error_name_skill" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="percentage_skill">Persentase Kemampuan</label>
                <input type="number" class="form-control" id="edit_percentage_skill" placeholder="Persentase Kemampuan">
                <span id="error_percentage_skill" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Kemampuan</label>
                <input type="number" class="form-control" id="edit_ord" placeholder="urutan Kemampuan">
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