<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20%">Kemampuan</th>
                    <th style="width: 50%">Presentase</th>
                    <th>Label</th>
                    <th colspan="2">Aksi</th>
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
            url: '<?= site_url('/main-skills/edit') ?>/',
            method: 'GET',
            data: {
                id: id
            },
            success: function(response) {
                document.getElementById("form-add").style.display = "none";
                document.getElementById("form-edit").style.display = "block";
                $('#update_id').val(response.row.id);
                $('#edit_name_skill').val(response.row.skills);
                $('#edit_percentage_skill').val(response.row.percentage);
                $('#edit_ord').val(response.row.ord);
            }
        });

    });
</script>