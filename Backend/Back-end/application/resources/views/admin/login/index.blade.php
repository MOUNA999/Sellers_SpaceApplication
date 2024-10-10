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
              <h3>Mise à Jour du Profil Administrateur</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_content">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Détails du Compte</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="#">Settings 1</a></li>
                                <li><a class="dropdown-item" href="#">Settings 2</a></li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <br />
                          <form id="demo-form2" method="POST" action="{{ route('admin.editProfile') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" value="{{ $admin->id }}" name="id" style="style="display: none"">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" value="{{ $admin->nom }}" id="first-name" name="nom" class="form-control" required>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" value="{{ $admin->prenom }}" id="last-name" name="prenom" class="form-control" required>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" name="image" class="form-control" />
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                        </form>



                        <form method="POST" action="/admin/changePassword" onsubmit="return validateForm()">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{ $admin->id }}" name="id" style="style="display: none"">

                            <div class="item form-group">
                                <label for="current-password" class="col-form-label col-md-3 col-sm-3 label-align">Current Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="current-password" class="form-control" type="password" name="current_password" required>
                                    <span id="current-password-error" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="new-password" class="col-form-label col-md-3 col-sm-3 label-align">New Password <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="new-password" class="form-control" type="password" name="new_password" required>
                                    <span id="new-password-error" class="text-danger"></span>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Change Password</button>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </form>
                        @include('admin.login.validateFormJS')




                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layouts.footer')
    </div>
  </div>
</body>
</html>
