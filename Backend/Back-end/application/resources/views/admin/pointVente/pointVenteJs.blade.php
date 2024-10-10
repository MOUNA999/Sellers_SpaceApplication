<script>
    function filterTable() {
        var codeFilter = document.getElementById("code-filter").value;
        var table = document.getElementById("csvTable");
        var tbody = table.tBodies[0];
        var rows = tbody.rows;

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var codeCell = row.cells[1];
            if (codeCell.textContent.indexOf(codeFilter) === -1) {
                row.style.display = "none";
            } else {
                row.style.display = "";
            }
        }
    }
        </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>

