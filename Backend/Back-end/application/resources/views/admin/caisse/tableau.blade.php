<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .table-container {
            overflow: auto;
            height: 400px;
            position: relative;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        .table thead th {
            background-color: #f2f2f2;
            position: sticky;
            top: 0;
            z-index: 1;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href=" {{asset('Administrateur/vendors/bootstrap/dist/css/bootstrap.min.css')}} " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('Administrateur/vendors/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{asset('Administrateur/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href=" {{asset('Administrateur/vendors/iCheck/skins/flat/green.css')}} " rel="stylesheet">
    <!-- Datatables -->

    <link href=" {{asset('Administrateur/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href=" {{asset('Administrateur/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('Administrateur/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('Administrateur/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('Administrateur/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}"
        rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('Administrateur/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- page content -->

                <div class="">

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Liste des Caisse</h2>

                                    <button class="btn btn-info float-right" data-toggle="modal" onclick="window.location.href='{{ route('addCaisseForm') }}'" >Ajouter Caisse</button>


                                    <div class="clearfix"></div>

                                  </div>
                                <div class="x_content">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label>Date ajout collection
                                                <input type="date" class="form-control" id="date-filter">
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Code Caisse
                                                    <input type="text" class="form-control" id="code-filter">
                                            </div>
                                            <div class="col-lg-3" style="padding-top:1.8%">
                                                <button class="btn btn-info" onclick="filterTable()">Search</button>
                                            </div>
                                        </div><br>
                                        <div class="messages">
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <div style="overflow:auto; height:400px;">

                                                <table class="table table-striped table-bordered"
                                                    style="width:100%" id="csvTable" class="table">
                                                    <thead>
                                                        <tr>

                                                            <th style="text-align: center;">Code Caisse</th>
                                                            <th style="text-align: center;">Date</th>
                                                            <th style="text-align: center;">Point de vente</th>
                                                            <th style="text-align: center;">Code</th>

                                                            <th style="text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        @foreach($data as $row)
                                                        <tr>
                                                            <td>{{ $row['code_caisse'] }}</td>
                                                            <td>{{ $row['date'] }}</td>
                                                            <td>
                                                                {{ $row->pointVente->libelle }}
                                                            </td>
                                                            <td>{{ $row['code'] }}</td>
                                                            <td style="text-align:center">
                                                                <i class="fa fa-refresh" aria-hidden="true" style="font-size:22px;cursor: pointer;" onclick="window.location.href='{{ route('updateCaisse', ['id' => $row['id']]) }}'"></i>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                    </div>




@include('admin.caisse.caisseJs')

