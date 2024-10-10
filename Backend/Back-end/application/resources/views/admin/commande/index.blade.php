<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

          @include('admin.layouts.header')

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gestion des Commandes</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">


                      <div class="clearfix"></div>

                      <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Ajouter des Commandes</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Settings 1</a>
                                      <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<p>Importer des fichier CSV</p>
                                <form action="javascript:;" class="dropzone" id="csvDropzone"></form>
                                <br />
                            </div>
                            <table id="csvTable"></table>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
                            <script>
                                Dropzone.autoDiscover = false; // Désactive Dropzone autoDiscover

                                const myDropzone = new Dropzone("#csvDropzone", {
                                    url: "javascript:void(0)", // URL bidon pour éviter les erreurs
                                    autoProcessQueue: false,
                                    acceptedFiles: ".csv",
                                    init: function() {
                                        this.on("drop", function(event) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        });

                                        this.on("addedfile", function(file) {
                                            // Vérifier que le fichier est bien un CSV
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

                          </div>
                        </div>
                      </div>









                  <br>
                  <div class="x_content">

                    @include('admin.commande.tableau')
                      Add content to the page ...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->
 @include('admin.layouts.footer')

      </div>
    </div>


  </body>
</html>
