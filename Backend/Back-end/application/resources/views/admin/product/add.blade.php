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
                                        <h2>New product</h2>
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
                                        <form class="" action="{{ route('addProduct') }}" method="post" novalidate>
                                            @csrf

                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Code à Bar </i></strong> <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="code_a_bar" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Référence </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="reference" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Libellé  </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="libelle" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Category  </i></strong></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="categorie" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Quantité de Stock  </i></strong> <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" type="number" name="qt_stock" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Date</i></strong>  <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" class='date' type="date" name="date" required='required'></div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Time</i></strong>  <span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" class='time' type="time" name="time" required='required'></div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Couleur  </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="couleur" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Taille  </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="taille" type="text" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Prix  </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="prix" type="number" required="required" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Remise  </i></strong><span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="remise" type="number" required="required" />
                                                </div>
                                            </div>

                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align"><strong><i>Description</i></strong> </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <textarea required="required" name='message'></textarea></div>
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

        <!-- Javascript functions	-->
        <script>
            function hideshow(){
                var password = document.getElementById("password1");
                var slash = document.getElementById("slash");
                var eye = document.getElementById("eye");

                if(password.type === 'password'){
                    password.type = "text";
                    slash.style.display = "block";
                    eye.style.display = "none";
                }
                else{
                    password.type = "password";
                    slash.style.display = "none";
                    eye.style.display = "block";
                }

            }
        </script>

        <script>
            // initialize a validator instance from the "FormValidator" constructor.
            // A "<form>" element is optionally passed as an argument, but is not a must
            var validator = new FormValidator({
                "events": ['blur', 'input', 'change']
            }, document.forms[0]);
            // on form "submit" event
            document.forms[0].onsubmit = function(e) {
                var submit = true,
                    validatorResult = validator.checkAll(this);
                console.log(validatorResult);
                return !!validatorResult.valid;
            };
            // on form "reset" event
            document.forms[0].onreset = function(e) {
                validator.reset();
            };
            // stuff related ONLY for this demo page:
            $('.toggleValidationTooltips').change(function() {
                validator.settings.alerts = !this.checked;
                if (this.checked)
                    $('form .alert').remove();
            }).prop('checked', false);

        </script>

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


