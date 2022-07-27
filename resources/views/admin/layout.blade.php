<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Interact Tech Solution | </title>

  <!-- Bootstrap -->
  <link href="/admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/admin_theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="/admin_theme/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="/admin_theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="/admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="/admin_theme/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="/admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="/admin_theme/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Interact Tech Solution </span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">

            <div class="profile_info">
              <span><strong>
                  <h4>Welcome Admin</h4>
                </strong></span>

            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <a href="{{('dashboard')}}">
                <h3><i class="fa fa-home"></i> Home Page</h3>
              </a>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-sitemap"></i>Settings <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                    <li><a> Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_banner')}}">View Banner</a></li>
                        <li><a href="{{('create_banner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a><i></i> Home Services <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_homeservices')}}">View Services</a></li>
                        <li><a href="{{('create_homeservices')}}">Create Services</a></li>
                      </ul>
                    </li>
                    <li><a><i></i>Home Features <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_homefeatures')}}">View Features</a></li>
                        <li><a href="{{('create_homefeatures')}}">Create Features</a></li>
                      </ul>
                    </li>

                    <li><a><i></i>Home Consultation <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_homeconsultation')}}">View Consultation</a></li>
                        <li><a href="{{('create_homeconsultation')}}">Create Consultation</a></li>
                      </ul>
                    </li>

                    <li><a><i></i>Home Portfolio <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_homeportfolio')}}">View Images</a></li>
                        <li><a href="{{('create_homeportfolio')}}">Add Image</a></li>
                      </ul>
                    </li>


                    <li><a><i></i> Sponsers <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_sponsers')}}">View Sponsers</a></li>
                        <li><a href="{{('create_sponsers')}}">Create Sponsers</a></li>
                      </ul>
                    </li>


                    <li><a> About Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_aboutbanner')}}">View Banner</a></li>
                        <li><a href="{{('create_aboutbanner')}}">Create Banner</a></li>
                      </ul>
                    </li>

                    <li><a><i></i> About services Section <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_aboutservices')}}">View Services</a></li>
                        <li><a href="{{('create_aboutservices')}}">Create Services</a></li>
                      </ul>
                    </li>

                    <li><a><i></i> About Expertise <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_aboutexpertise')}}">View Expertise</a></li>
                        <li><a href="{{('create_aboutexpertise')}}">Add Expertise</a></li>
                      </ul>
                    </li>
                    <li><a> Team Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_teambanner')}}">View Banner</a></li>
                        <li><a href="{{('create_teambanner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a><i></i> Team Members <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_team')}}">View Team</a></li>
                        <li><a href="{{('create_team')}}">Create Team Member</a></li>
                      </ul>
                    </li>
                    <li><a> Testimonial Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_testimonialbanner')}}">View Banner</a></li>
                        <li><a href="{{('create_testimonialbanner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a><i></i> Clients Reviews <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_reviews')}}">View Reviews</a></li>
                        <li><a href="{{('create_reviews')}}">Add Reviews</a></li>
                      </ul>
                    </li>

                    <li><a> Services Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_servicebanner')}}">View Banner</a></li>
                        <li><a href="{{('create_servicebanner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a><i></i> Services Plans <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_monthlyplan')}}">View Monthly Plan</a></li>
                        <li><a href="{{('view_yearlyplan')}}">View Yearly Plan</a></li>
                        <li><a href="{{('create_monthlyplan')}}">Add Plan</a></li>
                      </ul>
                    </li>
                    <li><a> Portfolio Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_portfoliobanner')}}">View Banner</a></li>
                        <li><a href="{{('create_portfoliobanner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a><i></i>Our Portfolio Gallery<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_gallery')}}">View Gallery</a></li>
                        <li><a href="{{('create_gallery')}}">Add Photo</a></li>
                      </ul>
                    </li>

                    <li><a> Blog List Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_bloglistbanner')}}">View Banner</a></li>
                        <li><a href="{{('create_bloglistbanner')}}">Create Banner</a></li>
                      </ul>
                    </li>


                    <li><a> Add Blog <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_blog')}}">View Blogs</a></li>
                        <li><a href="{{('create_blog')}}">Create Blog</a></li>
                      </ul>
                    </li>
                    <li><a> Contact Banner <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_contactbanner')}}">View Banner</a></li>
                        <li><a href="{{('create_contactbanner')}}">Create Banner</a></li>
                      </ul>
                    </li>
                    <li><a> Contact Detail <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_contactdetails')}}">View Details</a></li>
                        <li><a href="{{('create_contactdetails')}}">Create Details</a></li>
                      </ul>
                    </li>
                    <li><a> Catagory <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_catagory')}}">View Catagories</a></li>
                        <li><a href="{{('create_catagory')}}">Create Catagory</a></li>
                      </ul>
                    </li>
                    <li><a> Tags <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{('view_tags')}}">View Tags</a></li>
                        <li><a href="{{('create_tags')}}">Create Tags</a></li>
                      </ul>
                    </li>



                  </ul>
                </li>



              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Admin Pannel
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">


                  <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
              </li>


            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        @yield('content')
      </div>


    </div>
  </div>

  <!-- jQuery -->
  <script src="/admin_theme/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="/admin_theme/build/js/custom.min.js"></script>
  @stack('footer_scripts')
</body>

</html>