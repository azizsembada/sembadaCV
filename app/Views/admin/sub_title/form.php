<div id="form-edit" class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Edit</h3>
    </div>
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="alias_sub_title">Sub Title</label>
                <input type="hidden" class="form-control" id="update_id">
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="text" class="form-control" id="alias_sub_title" placeholder="Nama sub title">
                <span id="error_alias_sub_title" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="value_sub_title">Value</label>
                <textarea id="value_sub_title" class="form-control" name="w3review" rows="4" cols="50" placeholder="Value Sub Title"></textarea>
                <span id="error_value_sub_title" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Urutan Sub Title</label>
                <input type="number" class="form-control" id="ord" placeholder="urutan sub title">
                <span id="error_ord" class="text-danger"></span>
            </div>
        </div>
        <div id="btn" class="card-footer">
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#btn').append('<button type="button" id="btn_update" class="btn btn-primary" disabled>Edit</button> <button type = "reset"\
                    class = "btn btn-danger" id="btn_reset" > Reset </button>');
    });
</script>