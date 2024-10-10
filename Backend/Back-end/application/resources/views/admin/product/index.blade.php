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
                <h3>Gestion des Produits</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">

                  </div>
                </div>
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


                                    @include('admin.product.tableau', ['products' => $products])

                                <br />
                            </div>



                            @include('admin.product.productjs')

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
