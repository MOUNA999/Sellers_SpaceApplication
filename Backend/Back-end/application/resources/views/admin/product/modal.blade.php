<!----------------------  add product ------>

<!-- Import CSV modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h4 class="modal-title" id="exampleModalLabel">Importer CSV</h4>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form action="{{ route('importCsv') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="import_csv" name="import_csv" accept=".csv">
                        <label class="input-group-text" for="import_csv">Upload</label>
                    </div>
                    <button type="submit" class="btn btn-success">Import CSV</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(function() {
    var updateProductRoute = '{{ route('updateProduct', ['id' => ':id']) }}';
    $('#import-csv-form').submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
    type: 'POST',
    url: '{{ route('importCsv') }}',
    data: formData,
    contentType: false,
    processData: false,
    success: function(data) {
        console.log(data);

$('#table-body').html('');
$.each(data, function(index, row) {
    var updateUrl = updateProductRoute.replace(':id', row.id);
    $('#table-body').append('<tr>' +
        '<td>' + row.code_a_bar + '</td>' +
        '<td>' + row.reference + '</td>' +
        '<td>' + row.libelle + '</td>' +
        '<td>' + row.categorie + '</td>' +
        '<td>' + row.couleur + '</td>' +
        '<td>' + row.taille + '</td>' +
        '<td>' + row.qt_stock + '</td>' +
        '<td>' + row.prix + '</td>' +
        '<td>' + row.remise + '</td>' +
        '<td style="text-align:center">' +
        '<i class="fa fa-refresh" aria-hidden="true" style="font-size:22px;cursor: pointer;" onclick="window.location.href=\'' + updateUrl + '\'"></i>' +
        '</td>' +
        '</tr>');
});
    },
    error: function(xhr, status, error) {
        console.log(error);
    }
});
    });
});




</script>
