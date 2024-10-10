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
                <h3>Modifier Vos coordonnées</h3>
              </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="">


                      <div class="clearfix"></div>

                      <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                          <div class="x_panel">





                            <div class="x_content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 ">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>Edit <small>different form elements</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="dropdown-item" href="#">Settings 1</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Settings 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <br />
                                                @extends('layouts.app')

                                                @section('content')
                                                <div class="container">
                                                    <form id="demo-form2" method="POST" action="{{ route('admin.update', ['id' => $admin->id]) }}" data-parsley-validate class="form-horizontal form-label-left">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="text" id="first-name" name="nom" required="required" class="form-control" value="{{ $admin->nom }}">
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input type="text" id="last-name" name="prenom" required="required" class="form-control" value="{{ $admin->prenom }}">
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input id="email" class="form-control" type="email" name="login" required="required" value="{{ $admin->login }}">
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label for="password" class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input id="password" class="form-control" type="password" name="password">
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                                    <label class="btn btn-secondary {{ $admin->gender == 'male' ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                        <input type="radio" name="gender" value="male" class="join-btn" {{ $admin->gender == 'male' ? 'checked' : '' }}> &nbsp; Male &nbsp;
                                                                    </label>
                                                                    <label class="btn btn-primary {{ $admin->gender == 'female' ? 'active' : '' }}" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                        <input type="radio" name="gender" value="female" class="join-btn" {{ $admin->gender == 'female' ? 'checked' : '' }}> Female
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" name="date_of_birth" required="required" value="{{ $admin->date_of_birth }}" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                                                <script>
                                                                    function timeFunctionLong(input) {
                                                                        setTimeout(function() {
                                                                            input.type = 'text';
                                                                        }, 60000);
                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>

                                                        <div class="ln_solid"></div>
                                                        <div class="item form-group">
                                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                                <button class="btn btn-primary" type="button">Cancel</button>
                                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                                <button type="submit" class="btn btn

                                        </div>
                                    </div>
                                </div>
                            </div>




                          </div>
                        </div>
                      </div>









                  <br>

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
