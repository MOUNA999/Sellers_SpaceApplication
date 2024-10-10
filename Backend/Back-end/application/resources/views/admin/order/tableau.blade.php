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

    .rounded-md svg{
        width: 20px !important;
        height: 20px !important;
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
                                    <h2>Liste des Commandes</h2>




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
                                                <label>Code Commande
                                                    <input type="text" class="form-control" id="code-filter">
                                                </div>
                                                <div class="col-lg-3" style="padding-top:1.8%">
                                                    <button class="btn btn-info" onclick="filterTable()">Search</button>
                                                </div>

                                        </div><br>
                                        <div class="messages">


                                            @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                            @elseif (session('success'))
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
                                                            <th style="text-align: center;">Code</th>
                                                            <th style="text-align: center;">Date</th>
                                                            <th style="text-align: center;">Total</th>
                                                            <th style="text-align: center;">SubTotal</th>
                                                            <th style="text-align: center;">remise</th>
                                                            <th style="text-align: center;">Caisse_ID</th>
                                                            <th style="text-align: center;">Client_ID</th>
                                                            <th style="text-align: center;">Vendeur_ID</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($donnees as $donnee)
                                                            <tr>
                                                                <td>{{ $donnee->code }}</td>
                                                                <td>{{ $donnee->date }}</td>
                                                                <td>{{ $donnee->total }}</td>
                                                                <td>{{ $donnee->subTotal }}</td>
                                                                <td>{{ $donnee->remise }}</td>
                                                                <td>{{ $donnee->caisse_ID }}</td>
                                                                <td>{{ $donnee->client_ID }}</td>
                                                                <td>{{ $donnee->vendeur_ID }}</td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                                <div class="pagination">
                                                    {{ $donnees->links() }}
                                                </div>






                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    </div>
                                    </div>




@include('admin.order.orderJs')


