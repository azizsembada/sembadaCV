<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th class="text-center" colspan="2">Icon</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody id="tableData"></tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <input type="hidden" id="currentPage" />
    <div id="currentPage"></div>
    <div class="card-footer clearfix">
        <ul id="pagination" class="pagination pagination-sm m-0 float-right">
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', '#btn_edit', function() {

        var id = $(this).attr('table-id');
        $.ajax({
            url: '<?= site_url('/services/edit') ?>/',
            method: 'GET',
            data: {
                id: id
            },
            success: function(response) {
                document.getElementById("form-add").style.display = "none";
                document.getElementById("form-edit").style.display = "block";
                $('#update_id').val(response.row.id);
                $('#edit_name_service').val(response.row.name);
                $('#edit_icon_service').val(response.row.icon);
                $('#edit_description_service').val(response.row.description);
                $('#edit_ord').val(response.row.ord);
            }
        });

    });
</script>