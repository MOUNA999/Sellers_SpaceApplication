<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
<script>
    Dropzone.autoDiscover = false; /

    const myDropzone = new Dropzone("#csvDropzone", {
        url: "javascript:void(0)",
        autoProcessQueue: false,
        acceptedFiles: ".csv",
        init: function() {
            this.on("drop", function(event) {
                event.preventDefault();
                event.stopPropagation();
            });

            this.on("addedfile", function(file) {

                if (!file.name.toLowerCase().endsWith('.csv')) {
                    this.removeFile(file);
                    alert('Seuls les fichiers CSV sont autorisés.');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(event) {
                    Papa.parse(event.target.result, {
                        header: true,
                        complete: function(results) {
                            const data = results.data;
                            const table = document.getElementById('csvTable');
                            table.innerHTML = ''; // Clear previous table content

                            // Create table header
                            const headerRow = document.createElement('tr');
                            const headers = Object.keys(data[0]);
                            headers.forEach(header => {
                                const th = document.createElement('th');
                                th.textContent = header;
                                headerRow.appendChild(th);
                            });
                            table.appendChild(headerRow);

                            // Create table rows
                            data.forEach(row => {
                                const tr = document.createElement('tr');
                                headers.forEach(header => {
                                    const td = document.createElement('td');
                                    td.textContent = row[header];
                                    tr.appendChild(td);
                                });
                                table.appendChild(tr);
                            });
                        },
                        error: function(error) {
                            console.error('Error parsing CSV:', error);
                        }
                    });
                };
                reader.readAsText(file);
            });
        }
    });
</script>




<script>
    function filterTable() {
        var codeFilter = document.getElementById("code-filter").value;
        var table = document.getElementById("csvTable");
        var tbody = table.tBodies[0];
        var rows = tbody.rows;

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var codeCell = row.cells[2];
            if (codeCell.textContent.indexOf(codeFilter) === -1) {
                row.style.display = "none";
            } else {
                row.style.display = "";
            }
        }
    }
    </script>
