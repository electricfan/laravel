<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    @yield('header')
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
     <!-- ########## main ########## -->
    <!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- main js -->
    <script src="/dist/js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        //when the user info on the sidebar is clicked
        $('.user-panel').click(function(){
            window.location.replace('{{ url() }}/profile');        
        });
        //if there is a variable called activelink then give class to the match element from that variable
        <?php if (isset($activelink)) : 
            echo  "$('#" . $activelink . "').addClass('active');";    
             endif;
        ?>           
        });
    </script> 
    <!-- Nprogress -->
    <link href="/plugins/nprogress/nprogress.css" rel='stylesheet' />
    <script src="/plugins/nprogress/nprogress.js"></script>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="/dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
    <!-- tooltip -->
    <link rel="stylesheet" type="text/css" href="/plugins/tooltip/tooltipster.css" />
    <link rel="stylesheet" type="text/css" href="/plugins/tooltip/themes/tooltipster-shadow.css" />
    <!-- Bootstrap Form Helpers -->
    <link href="/plugins/bootstraphelper/css/bootstrap-formhelpers.css" rel="stylesheet" media="screen">
   <!-- magnific popup-->
    <link rel="stylesheet" type="text/css" href="/plugins/magnific/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="/plugins/magnific/magnific_popup_css.css" />
    <!-- other files -->
    <link rel="stylesheet" type="text/css" href="/dist/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/dist/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/opensans/opensans.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/raleway/raleway.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/myriadpro/myriadpro.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/cd/cd.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/js/js.css" />
    <link rel="stylesheet" type="text/css" href="/dist/webfont/pentumate/pentumate.css" />
    <link rel="stylesheet" type="text/css" href="/dist/css/animate.css" />
    <link rel="stylesheet" href="/dist/webfont/iconmoon/style.css">
    <link rel="stylesheet" href="/dist/webfont/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/webfont/wf.css">
    <link rel="stylesheet" href="/dist/webfont/ionic/css/ionicons.min.css">
    <!-- jquery ui -->
    <link rel="stylesheet" href="/dist/js/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="/dist/js/jqueryui/jquery-ui.theme.css">
    <script type="text/javascript" src="/dist/js/jqueryui/jquery-ui.js"></script>
    <!-- ########## PLUGINS ########## -->
    <!-- iCheck -->
    <link href="/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    @yield('plugin_styles')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-green">
    <div class="wrapper fade out">
      
            <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url() }}" class="logo"><b>MOT</b></a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- OB -->
               <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="{{ url('/disputes/manager') }}" class="dropdown-toggle tp ketchup floatboxmain" title="Click to see disputes">
                  <i class="fa fa-book"></i>
                  <span class="label label-warning">12</span>
                </a>
              </li>
              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="ion-checkmark-circled" style="margin-right: 7px; color: #40b649;"></i> OB request approved
                        </a>
                      </li><!-- end notification -->   
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="ion-checkmark-circled" style="margin-right: 7px; color: #40b649;"></i> Dispute approved
                        </a>
                      </li><!-- end notification --> 
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="ion-close-circled" style="margin-right: 7px; color: #f56954;"></i> OB rejected
                        </a>
                      </li><!-- end notification -->
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="ion-close-circled" style="margin-right: 7px; color: #f56954;"></i> OB rejected
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
            <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 1 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            MAMBU TASK
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                  <?php if(isset($officername)) :
                      if ($officername === "manager") :
                 ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="/dist/img/manager.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Mr. Manager</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/dist/img/manager.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Mr. Manager - The Manager
                      <small>Member since Feb. 2015</small>
                    </p>
                  </li>
                      <?php else : ?>
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <!-- The user image in the navbar-->
                  <img src="/dist/img/rhoda.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Rhoda Joy Eluna</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/dist/img/rhoda.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Rhoda Joy Eluna - Human Resource
                      <small>Member since Feb. 2015</small>
                    </p>
                  </li>
                    <?php endif;
                     
                     else : ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <!-- The user image in the navbar-->
                  <img src="/dist/img/user.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Dodong Juliver</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/dist/img/user.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Dodong Juliver - UI/UX Developer
                      <small>Member since Feb. 2015</small>
                    </p>
                  </li>
                  <?php endif; ?>
                  <!-- Menu Body 
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
           <?php if(isset($officername)) :
                if ($officername === "manager") :
          ?>
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/manager.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>The Manager</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <?php else : ?>
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/rhoda.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Rhoda Joy Eluna</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <?php endif; else: ?>
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/user.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Dodong Juliver</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <?php endif; ?>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links
            <li class="active"><a href="#"><span>DASHBOARD</span></a></li> 
            <li><a href="#"><span>REPORTING</span></a></li>-->
            <li class="treeview">
              <a href="#">
                  <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> <span>Reporting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="#">Sales<i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#cos-popup" class="open-popup-link" data-effect="mfp-zoom-in">Credit Officer Status</a></li>
                        <li><a href="{{ url('/client-total-due') }}">Client  Total Due</a></li>
                        <li><a href="#">Insurance Fees</a></li>
                    </ul>
                </li>
                <li><a href="#">Finance<i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Clients Payments Summary</a></li>
                        <li><a href="#">Applied Fees</a></li>
                        <li><a href="#">Teller Transaction</a></li>
                        <li><a href="#">Aging Analysis</a></li>
                        <li><a href="#">Aging Analysis by Arrears</a></li>
                    </ul>
                </li>
                <li><a href="#"> Management</a></li>
              </ul>
            </li>
            
            <li id="charts" class="treeview">
              <a href="#"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><span> CHARTS</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#branch_company_kpi" class="open-popup-link" data-effect="mfp-zoom-in">Branch/Company KPI</a></li>
                <li><a href="#coskpi"  class="open-popup-link" data-effect="mfp-zoom-in">Credit Officer Sales KPI</a></li>
              </ul>
            </li>
             <li><a href="#"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span>CUSTOMER LOCATOR</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span><span>DELIQUENTS DB</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><span>ASSET MANAGEMENT</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span><span>COLLATERAL MANAGEMENT</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span><span>COMPANY DOCUMENTS</span></a></li>
            <li class="treeview">
              <a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span>&nbsp;TASK</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Daily Task</a></li>
                <li><a href="#">Task History</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><span>&nbsp;ATTENDANCE</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Attendance History</a></li>
                <li><a href="#">My Disputes History</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span><span>OB TRIP</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">OB Trip Application</a></li>
                <li><a href="#">OB Trip History</a></li>
		<li><a href="#">Collectors Task</a></li>
              </ul>
            </li>
            <li id="employeedata"><a href="{{ url() }}/employee-data"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span>EMPLOYEE DATA</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            {!! $breadcrumbs !!}
          </ol>
          <?php if (isset($showpagefilter) || isset($showdatafilter)) : ?>
          <nav class="filter" rol="navigation">
              <?php if (isset($showdatafilter)) : ?>
              <div class="filter_has_sub">
                <a href="#" class="btn btn-default filter_pages"><span>Filter Data</span><span class="ion-chevron-down"></span></a>
                    <div class="filter_sub thehide">
                        <a href="{{ url('/updates') }}"><span class="ion-plus-circled"></span><span>Show last 30 days</span></a>
                        <a href="{{ url('/sales') }}"><span class="ion-plus-circled"></span><span>Show last 60 days</span></a>
                        <div class="extend clear" style="height: 5px;"></div>
                        <div class="filter_datepicker extend clear">
                            <span class="ion-calendar"></span><input class="form-control datepicker extend" placeholder="From what date" />
                        </div>
                        <div class="filter_datepicker extend clear">
                            <span class="ion-calendar"></span><input class="form-control datepicker extend" placeholder="To what date" />
                        </div>
                    </div>
              </div>
              <?php endif; ?>
              <?php if (isset($showpagefilter)) : ?>
              <div class="filter_has_sub">
                <a href="#" class="btn btn-default filter_pages"><span>Updates</span><span class="ion-chevron-down"></span></a>
                  <div class="filter_sub thehide">
                      <a href="{{ url('/updates') }}"><span class="ion-android-notifications"></span><span>Updates</span></a>
                      <a href="{{ url('/sales') }}"><span class="ion-pie-graph"></span><span>Sales</span></a>
                     <a href="{{ url('/finance') }}"><span class="ion-arrow-graph-up-left"></span><span>Finance</span></a>
                      <a href="{{ url('/legal') }}"><span class="ion-briefcase"></span><span>Legal</span></a>
                </div>
              </div>
              <?php endif; ?>
          </nav>
        <?php endif; ?>
        </section>
        
        <!-- Main content -->
        <section class="content">
         @yield('boxes')
         @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="{{ url() }}">MOT</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    @yield('others')
    <div id="cos-popup" class="cos-popup white-popup mfp-with-anim mfp-hide" style="width: 600px;">
        <h1><i class="fa fa-users"></i><span>Credit Officer Status</span></h1>
        <div class="row daselect" style="clear: both; float: none;">
            <div class="btn-group">
              <button type="button" class="btn btn-default sb">Select Branch</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
           
              <ul class="cosbranch dropdown-menu" role="menu">
                <li><a href="#" data-link="corporate">Corporate</a></li>
                <li><a href="#">Iligan</a></li>
                <li><a href="#">Lugait</a></li>
                <li><a href="#">Initao</a></li>
                <li><a href="#">Maigo</a></li>
                <li><a href="#">El-Salvador</a></li>
              </ul>
            </div>
       
             <div class="btn-group">
              <button type="button" class="btn btn-default so">Select Officer</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="cosname dropdown-menu" role="menu">
                <li><a href="#" data-link="dwayne-johnson">Dwyane Johnson</a></li>
                <li><a href="#" data-link="allen-iverson">Allen Iverson</a></li>
                <li><a href="#" data-link="lebron-james">Lebron James</a></li>
                <li><a href="#"data-link="micheal-jordan">Micheal Jordan</a></li>
                <li><a href="#"data-link="bill-gates">Bill Gates</a></li>
                <li><a href="#"data-link="steve-jobs">Steve Jobs</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <button class="btn btn-default gobtn" data-link="{{ url("/") }}" data-idty="cos">Go</button>
        </div>
    </div>
    <div id="coskpi" class="cos-popup white-popup mfp-with-anim mfp-hide" style="width: 600px;">
        <h1><i class="fa fa-users"></i><span>Credit Officer Sales KPI</span></h1>
        <div class="row daselect" style="clear: both; float: none;">
            <div class="btn-group">
              <button type="button" class="btn btn-default sb">Select Branch</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
           
              <ul class="cosbranch dropdown-menu" role="menu">
                <li><a href="#" data-link="corporate">Corporate</a></li>
                <li><a href="#">Iligan</a></li>
                <li><a href="#">Lugait</a></li>
                <li><a href="#">Initao</a></li>
                <li><a href="#">Maigo</a></li>
                <li><a href="#">El-Salvador</a></li>
              </ul>
            </div>
       
             <div class="btn-group">
              <button type="button" class="btn btn-default so">Select Officer</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="cosname dropdown-menu" role="menu">
                <li><a href="#" data-link="dwayne-johnson">Dwyane Johnson</a></li>
                <li><a href="#" data-link="allen-iverson">Allen Iverson</a></li>
                <li><a href="#" data-link="lebron-james">Lebron James</a></li>
                <li><a href="#"data-link="micheal-jordan">Micheal Jordan</a></li>
                <li><a href="#"data-link="bill-gates">Bill Gates</a></li>
                <li><a href="#"data-link="steve-jobs">Steve Jobs</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <button class="btn btn-default gobtn" data-link="{{ url("/") }}" data-idty="coskpi">Go</button>
        </div>
    </div>
    <div id="branch_company_kpi" class="cos-popup white-popup mfp-with-anim mfp-hide" style="width: 380px;">
        <h1><i class="fa fa-users"></i><span>Branch Company KPI</span></h1>
        <div class="row daselect" style="clear: both; float: none;">
            <div class="btn-group">
              <button type="button" class="btn btn-default sb">Select Branch</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
           
              <ul class="cosbranch dropdown-menu" role="menu">
                <li><a href="#" data-link="corporate">Corporate</a></li>
                <li><a href="#" data-link="iligan">Iligan</a></li>
                <li><a href="#" data-link="lugait">Lugait</a></li>
                <li><a href="#" data-link="initao">Initao</a></li>
                <li><a href="#" data-link="maigo">Maigo</a></li>
                <li><a href="#" data-link="el-salvador">El-Salvador</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <button class="btn btn-default gobtn" data-link="{{ url("/") }}" data-idty="bckpi">Go</button>
        </div>
    </div>
    <script>
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 500);
    </script>
    <!-- ########## PLUGINS ########## -->
    <!-- magnific popup -->
    <script src="/plugins/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script> 
    <!-- long shadow -->
    <script src="/plugins/longshadow/jquery.longShadow.min.js" type="text/javascript"></script> 
    <!-- tooltip -->
    <script type="text/javascript" src="/plugins/tooltip/jquery.tooltipster.min.js"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>
    <!-- Bootstrap Form Helpers -->
    <script src="/plugins/bootstraphelper/js/bootstrap-formhelpers.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js" type="text/javascript"></script>
    @yield('plugin_scripts')
    <script>$(window).load(function() {
    // executes when complete page is fully loaded, including all frames, objects and images
    $('body').show();   
   });
    </script>
  </body>
</html>