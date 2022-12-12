<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 50%">Image</th>
                    <th style="width: 40%">Detail</th>
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
            url: '<?= site_url('/portfolio/edit') ?>/',
            method: 'GET',
            data: {
                id: id
            },
            success: function(response) {
                document.getElementById("form-add").style.display = "none";
                document.getElementById("form-edit").style.display = "block";
                let imageURL = "<?= base_url() ?>" + "/" + response.row.image;
                $('#preview-image-portfolio').empty();
                $('#preview-image-portfolio').append('<img src=' + imageURL + ' class="img-thumbnail" alt="">');
                $('#update_id').val(response.row.id);
                $('#edit_name_portfolio').val(response.row.name);
                $('#edit_link_portfolio').val(response.row.link);
                $('#edit_description_portfolio').val(response.row.description);
                $('#edit_ord').val(response.row.ord);
            }
        });

    });
</script>