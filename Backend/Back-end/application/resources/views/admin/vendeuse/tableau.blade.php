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
                                    <h2>Liste des Vendeuses</h2>
                                        <button class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal">Ajouter vendeuse</button>
                                    <div class="clearfix"></div>

                                  </div>
                                <div class="x_content">
                                    <div class="col-lg-12">
                                        <div class="row">

                                            <div class="col-lg-3">
                                                <label>Code Vendeuse
                                                    <input type="text" class="form-control" id="code-filter">
                                                </div>
                                                <div class="col-lg-3" style="padding-top:1.8%">
                                                    <button class="btn btn-info" onclick="filterTable()">Search</button>
                                                </div>

                                        </div><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">
                                                <div style="overflow:auto; height:400px;">

                                                <table class="table table-striped table-bordered"
                                                    style="width:100%" id="csvTable" class="table">
                                                    <thead>
                                                        <tr>

                                                            <th style="text-align: center;">Nom</th>
                                                            <th style="text-align: center;">Prenom</th>
                                                            <th style="text-align: center;">Code Vendeuse</th>
                                                            <th style="text-align: center;">Point Vente ID</th>
                                                            <th style="text-align: center;">Clé</th>
                                                            <th style="text-align: center;">Login</th>
                                                            <th style="text-align: center;">password</th>
                                                            <th style="text-align: center;">Is Active</th>

                                                            <th style="text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($data as $row)
                                                        <tr>
                                                            <td>{{ $row->nom }}</td>
                                                            <td>{{ $row->prenom  }}</td>
                                                            <td>{{ $row->code  }}</td>
                                                            <td>{{$row->point_vente_ID  }}</td>
                                                            <td>{{ $row->cle  }}</td>
                                                            <td>{{ $row->login  }}</td>
                                                            <td>{{ $row->password  }}</td>
                                                            <td>    @if($row->isActive == 0)
                                                                <i class="fa fa-circle" aria-hidden="true" style="color: rgb(255, 0, 0);">   Non Active</i>
                                                            @else
                                                                <i class="fa fa-circle" aria-hidden="true" style="color: rgb(19, 165, 19);">   Active</i>
                                                            @endif</td>

                                                            <td style="text-align:center">
                                                                <i class="fa fa-refresh" aria-hidden="true" style="font-size:22px;cursor: pointer;" onclick="window.location.href='{{ route('updateVendeuse', ['id' => $row->id]) }}'"></i>
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



@include('admin.vendeuse.modal')
@include('admin.vendeuse.vendeusejs')

