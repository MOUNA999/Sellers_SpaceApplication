<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
    <!-- Bootstrap -->
    <link {{ asset('Administrateur/vendors/bootstrap/dist/css/bootstrap.min.css') }}  rel="stylesheet">
    <!-- Font Awesome -->
    <link {{ asset('Administrateur/vendors/font-awesome/css/font-awesome.min.css') }}  rel="stylesheet">
    <!-- NProgress -->
    <link {{ asset('Administrateur/vendors/nprogress/nprogress.css') }}  rel="stylesheet">

    <!-- Custom Theme Style -->
    <link {{ asset('Administrateur/build/css/custom.min.css') }}  rel="stylesheet">
<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      @include('admin.layouts.header')






                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">

                        <div class="clearfix"></div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Edit point of sale</h2>
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
                                    <br>
                                    <div class="x_content">
                                        <form action="{{ route('admin.updatePointVente', $pointVente) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Code </i></strong> <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="code" value="{{ $pointVente->code}}" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Libelle </i></strong> <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="libelle" value="{{ $pointVente->libelle}}" type="text" required="required" />
                                                </div>
                                            </div>

                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Date</i></strong>  <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" class='date' type="date"   name="date" required='required'></div>
                                            </div>



                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Description</i></strong> </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <textarea  name='description'></textarea></div>
                                            </div>

                                            <div class="ln_solid">
                                                <div class="form-group">
                                                    <div class="col-md-6 offset-md-3">
                                                        <button type='submit' class="btn btn-primary">Submit</button>
                                                        <button type='reset' class="btn btn-success">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->


            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script {{ asset('Administrateur/vendors/validator/multifield.js') }} ></script>
        <script {{ asset('Administrateur/vendors/validator/validator.js') }} ></script>





        <!-- jQuery -->
        <script {{ asset('Administrateur/vendors/jquery/dist/jquery.min.js') }} ></script>
        <!-- Bootstrap -->
        <script {{ asset('Administrateur/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
        <!-- FastClick -->
        <script {{ asset('Administrateur/vendors/fastclick/lib/fastclick.js') }} ></script>
        <!-- NProgress -->
        <script {{ asset('Administrateur/vendors/nprogress/nprogress.js') }} ></script>
        <!-- validator -->
        <!-- <script src="../vendors/validator/validator.js"></script> -->

        <!-- Custom Theme Scripts -->
        <script {{ asset('Administrateur/build/js/custom.min.js') }} ></script>


    </body>
      @include('admin.layouts.footer')
    </div>











</body>
</html>


