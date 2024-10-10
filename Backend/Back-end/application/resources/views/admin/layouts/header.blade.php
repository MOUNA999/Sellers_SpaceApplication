
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

<div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><span>Pos Caisse </span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
        <div class="profile_pic">
            @if(Session::has('admin_image'))
                <img src="{{ asset('images/' . Session::get('admin_image')) }}" alt="" class="img-circle profile_img" style="width: 70px; height: 70px">
            @else
                <p>Aucune image disponible.</p>
            @endif
        </div>
    </div>

    <div class="profile_info">
        <span>Bienvenue,</span>
        <h2>
            {{ Session::get('admin_nom') }} {{ Session::get('admin_prenom') }}
        </h2>
      </div>
    <div class="clearfix"></div>
  </div>
  <!-- /menu profile quick info -->

  <br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="#" onclick="openSubMenu(this)"><i class="fa fa-gear"></i>Paramétrage <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a onclick="window.location.href='{{ route('product') }}'">Gestion d'entreprise</a></li>
              <li><a onclick="window.location.href='{{ route('pointVente') }}'">Gestion des points de ventes</a></li>
              <li><a onclick="window.location.href='{{ route('caisse') }}'">Gestion des caisses</a></li>
            </ul>
          </li>

          <li><a href="#" onclick="openSubMenu(this)"><i class="fa fa-cubes"></i>  Gestion des Produits <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a onclick="window.location.href='{{ route('product') }}'">Liste des produits</a></li>
              <li><a onclick="window.location.href='{{ route('order') }}'">Gestion de stock</a></li>
            </ul>
          </li>

          <li><a href="#" onclick="openSubMenu(this)"><i class="fa fa-group"></i> Gestion des clients <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a onclick="window.location.href='{{ route('product') }}'">Liste des clients </a></li>
              <li><a onclick="window.location.href='{{ route('order') }}'">Gestion des fidélités</a></li>
            </ul>
          </li>

          <li><a href="#" onclick="openSubMenu(this)"><i class="fa fa-shopping-cart"></i>Gestion des ordres <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a onclick="window.location.href='{{ route('caisse1') }}'">Caisse 1 </a></li>
              <li><a onclick="window.location.href='{{ route('caisse2') }}'">Caisse 2 </a></li>
            </ul>
          </li>

          <li><a href="#" onclick="openSubMenu(this)"><i class="fa fa-user"></i> Gestion des profils <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a onclick="window.location.href='{{ route('vendeuse') }}'">Gestion des vendeuses </a></li>
              <li><a onclick="window.location.href='{{ route('gerant') }}'">Gestion des gérants</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <script>
        function openSubMenu(element) {
          var subMenu = element.nextElementSibling;
          subMenu.style.display = 'block';
        }

        // Ouvrir les sous-menus par défaut
        var menuItems = document.querySelectorAll('.nav.side-menu li');
        menuItems.forEach(function(item) {
          var subMenu = item.querySelector('.nav.child_menu');
          if (subMenu) {
            subMenu.style.display = 'block';
          }
        });
      </script>


  </div>
  <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
  <!-- top navigation -->

  <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">

                @if(Session::has('admin_image'))
                <img src="{{ asset('images/' . Session::get('admin_image')) }}" alt="" >
            @else
                <p>Aucune image disponible.</p>
            @endif


                {{ Session::get('admin_nom') }} {{ Session::get('admin_prenom') }}

            </a>




            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
              <a class="dropdown-item"  href="{{ route('logout') }}" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>

          <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">6</span>
            </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('Administrateur/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('Administrateur/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('Administrateur/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('Administrateur/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <div class="text-center">
                  <a class="dropdown-item">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
