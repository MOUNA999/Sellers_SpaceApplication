<!DOCTYPE html>
<html lang="en">

<head>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box table-responsive">

                                                <table id="datatable" class="table table-striped table-bordered"
                                                    >
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">Id</th>
                                                            <th style="text-align: center;">Date de commande</th>
                                                            <th style="text-align: center;">Statut</th>
                                                            <th style="text-align: center;">Montant Total</th>
                                                            <th style="text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Tiger Nixon</td>
                                                            <td style="text-align: center;width: 1.11%">System Architect</td>
                                                            <td style="text-align: center;width: 1.11%">Edinburgh</td>
                                                            <td style="text-align: center;width: 1.11%">61</td>
                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Garrett Winters</td>
                                                            <td style="text-align: center;width: 1.11%">Accountant</td>
                                                            <td style="text-align: center;width: 1.11%">Tokyo</td>
                                                            <td style="text-align: center;width: 1.11%">63</td>

                                                            <td style="text-align: center;width: 1.11%"><div class="bs-glyphicons" style="width: 150px">
                                                                <ul class="bs-glyphicons-list">
                                                                    <div >
                                                                        <li style="width: 50px; height: 50px;">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                          </li>
                                                                    </div>
                                                                  <li style="width: 50px; height: 50px;">
                                                                    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                  </li>
                                                                </ul>
                                                            </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Ashton Cox</td>
                                                            <td style="text-align: center;width: 1.11%">Junior Technical Author</td>
                                                            <td style="text-align: center;width: 1.11%">San Francisco</td>
                                                            <td style="text-align: center;width: 1.11%">66</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Cedric Kelly</td>
                                                            <td style="text-align: center;width: 1.11%">Senior Javascript Developer</td>
                                                            <td style="text-align: center;width: 1.11%">Edinburgh</td>
                                                            <td style="text-align: center;width: 1.11%">22</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Airi Satou</td>
                                                            <td style="text-align: center;width: 1.11%">Accountant</td>
                                                            <td style="text-align: center;width: 1.11%">Tokyo</td>
                                                            <td style="text-align: center;width: 1.11%">33</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Brielle Williamson</td>
                                                            <td style="text-align: center;width: 1.11%">Integration Specialist</td>
                                                            <td style="text-align: center;width: 1.11%">New York</td>
                                                            <td style="text-align: center;width: 1.11%">61</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Herrod Chandler</td>
                                                            <td style="text-align: center;width: 1.11%">Sales Assistant</td>
                                                            <td style="text-align: center;width: 1.11%">San Francisco</td>
                                                            <td style="text-align: center;width: 1.11%">59</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Rhona Davidson</td>
                                                            <td style="text-align: center;width: 1.11%">Integration Specialist</td>
                                                            <td style="text-align: center;width: 1.11%">Tokyo</td>
                                                            <td style="text-align: center;width: 1.11%">55</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Colleen Hurst</td>
                                                            <td style="text-align: center;width: 1.11%">Javascript Developer</td>
                                                            <td style="text-align: center;width: 1.11%">San Francisco</td>
                                                            <td style="text-align: center;width: 1.11%">39</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Sonya Frost</td>
                                                            <td style="text-align: center;width: 1.11%">Software Engineer</td>
                                                            <td style="text-align: center;width: 1.11%">Edinburgh</td>
                                                            <td style="text-align: center;width: 1.11%">23</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Jena Gaines</td>
                                                            <td style="text-align: center;width: 1.11%">Office Manager</td>
                                                            <td style="text-align: center;width: 1.11%">London</td>
                                                            <td style="text-align: center;width: 1.11%">30</td>

                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>
                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Quinn Flynn</td>
                                                            <td style="text-align: center;width: 1.11%">Support Lead</td>
                                                            <td style="text-align: center;width: 1.11%">Edinburgh</td>
                                                            <td style="text-align: center;width: 1.11%">22</td>
                                                            <td style="text-align: center;width: 1.11%"><div class="bs-glyphicons" style="width: 150px">
                                                                <ul class="bs-glyphicons-list">
                                                                    <div >
                                                                        <li style="width: 50px; height: 50px;">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                          </li>
                                                                    </div>
                                                                  <li style="width: 50px; height: 50px;">
                                                                    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                  </li>
                                                                </ul>
                                                            </div></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Charde Marshall</td>
                                                            <td style="text-align: center;width: 1.11%">Regional Director</td>
                                                            <td style="text-align: center;width: 1.11%">San Francisco</td>
                                                            <td style="text-align: center;width: 1.11%">36</td>
                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Haley Kennedy</td>
                                                            <td style="text-align: center;width: 1.11%">Senior Marketing Designer</td>
                                                            <td style="text-align: center;width: 1.11%">London</td>
                                                            <td style="text-align: center;width: 1.11%">43</td>
                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Tatyana Fitzpatrick</td>
                                                            <td style="text-align: center;width: 1.11%">Regional Director</td>
                                                            <td style="text-align: center;width: 1.11%">London</td>
                                                            <td style="text-align: center;width: 1.11%">19</td>
                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Michael Silva</td>
                                                            <td style="text-align: center;width: 1.11%">Marketing Designer</td>
                                                            <td style="text-align: center;width: 1.11%">London</td>
                                                            <td style="text-align: center;width: 1.11%">66</td>


                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Paul Byrd</td>
                                                            <td style="text-align: center;width: 1.11%">Chief Financial Officer (CFO)</td>
                                                            <td style="text-align: center;width: 1.11%">New York</td>
                                                            <td style="text-align: center;width: 1.11%">64</td>
                                                            <td style="text-align: center;width: 1.11%">
                                                                <div class="bs-glyphicons" style="width: 150px">
                                                                    <ul class="bs-glyphicons-list">
                                                                        <div >
                                                                            <li style="width: 50px; height: 50px;">
                                                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                              </li>
                                                                        </div>

                                                                      <li style="width: 50px; height: 50px;">
                                                                        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                      </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;width: 1.11%">Gloria Little</td>
                                                            <td style="text-align: center;width: 1.11%">Systems Administrator</td>
                                                            <td style="text-align: center;width: 1.11%">New York</td>
                                                            <td style="text-align: center;width: 1.11%">59</td>
                                                            <td style="text-align: center;width: 1.11%"><div class="bs-glyphicons" style="width: 150px">
                                                                <ul class="bs-glyphicons-list">
                                                                    <div >
                                                                        <li style="width: 50px; height: 50px;">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                                                          </li>
                                                                    </div>

                                                                  <li style="width: 50px; height: 50px;">
                                                                    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>

                                                                  </li>
                                                                </ul>
                                                            </div></td>
                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                    </div>

