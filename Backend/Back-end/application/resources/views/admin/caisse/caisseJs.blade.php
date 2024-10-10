<script>
    function filterTable() {
        var codeFilter = document.getElementById("code-filter").value;
        var dateFilter = document.getElementById("date-filter").value;
        var table = document.getElementById("csvTable");
        var tbody = table.tBodies[0];
        var rows = tbody.rows;

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var codeCell = row.cells[0];
            var dateCell = row.cells[1];

            if (codeFilter && dateFilter) {
                if (codeCell.textContent.indexOf(codeFilter) === -1 || dateCell.textContent !== dateFilter) {
                    row.style.display = "none";
                } else {
                    row.style.display = "";
                }
            } else if (codeFilter) {
                if (codeCell.textContent.indexOf(codeFilter) === -1) {
                    row.style.display = "none";
                } else {
                    row.style.display = "";
                }
            } else if (dateFilter) {
                if (dateCell.textContent !== dateFilter) {
                    row.style.display = "none";
                } else {
                    row.style.display = "";
                }
            } else {
                row.style.display = "";
            }
        }
    }
</script>
