<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <style media="screen">
    .custom-form > input {
      width: 300px;
      border-radius: 10px;
    }
    .custom-form > button {
      width: 200px;
      background: #008fff;
      border: 0;
      height: 30px;
      color: white;
      border-radius: 10px;
    }
    </style>
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="index.html">
            <img src="assets/img/logo.png" class="logo" alt="" data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21" />
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown hidden-xs hidden-sm">
              <a href="index.html" class="dropdown-toggle active" data-toggle="">
                <i class="material-icons">home</i>
              </a>
            </li>
            <li class="dropdown hidden-xs hidden-sm">
              <a href="email.html" class="dropdown-toggle">
                <i class="material-icons">email</i><span class="badge bubble-only"></span>
              </a>
            </li>
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    David Nester - Commented on your wall
                  </div>
                  <div class="description">
                    Meeting postponed to tomorrow
                  </div>
                  <div class="date pull-left">
                    A min ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages danger">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Server load limited
                  </div>
                  <div class="description">
                    Database server has reached its daily capicity
                  </div>
                  <div class="date pull-left">
                    2 mins ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages success">
                <div class="user-profile">
                  <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    You haveve got 150 messages
                  </div>
                  <div class="description">
                    150 newly unread messages in your inbox
                  </div>
                  <div class="date pull-left">
                    An hour ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- END TOP NAVIGATION MENU -->
                </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username">Fred <span class="semi-bold">Smith</span></div>
              <div class="status">Life goes on...</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li class="start "> <a href="index.html"><i class="material-icons">home</i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li> <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
                <li class=""> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
              </ul>
            </li>
            <li>
              <a href="widgets.html"> <i class="material-icons">panorama_horizontal</i> <span class="title">Widgets</span> <span class="label label-important bubble-only pull-right "></span></a>
            </li>
            <li>
              <a href="email.html"> <i class="material-icons">email</i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span>
              </a>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">Themes</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="theme_coporate.html">Coporate </a> </li>
                <li> <a href="theme_simple.html">Simple</a> </li>
                <li> <a href="theme_elegant.html">Elegant</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">airplay</i> <span class="title">Layouts</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="layout_options.html"> Layout Options </a> </li>
                <li> <a href="boxed_layout.html">Boxed Layout </a> </li>
                <li> <a href="boxed_layout_v2.html">Inner Boxed Layout </a> </li>
                <li> <a href="extended_layout.html">Extended Layout</a> </li>
                <li> <a href="RTL.html">RTL Layout</a> </li>
                <li> <a href="horizontal_menu.html">Horizontal Menu</a> </li>
                <li> <a href="horizontal_menu_boxed.html">Horizontal Menu & Boxed</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> UI Elements</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="typography.html"> Typography </a> </li>
                <li> <a href="messages_notifications.html"> Messages & Notifications </a> </li>
                <li> <a href="notifications.html"> Notifications </a> </li>
                <li> <a href="icons.html">Icons</a> </li>
                <li class=""> <a href="buttons.html">Buttons</a> </li>
                <li> <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
                <li> <a href="sliders.html">Sliders</a> </li>
                <li> <a href="group_list.html">Group list </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Forms</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="form_elements.html">Form Elements </a> </li>
                <li> <a href="form_validations.html">Form Validations</a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">apps</i> <span class="title">Grids</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="grids_simple.html">Simple Grids</a> </li>
                <li> <a href="grids_draggable.html">Draggable Grids </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">playlist_add_check</i> <span class="title">Tables</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="tables.html"> Basic Tables </a> </li>
                <li> <a href="datatables.html"> Data Tables </a> </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;"> <i class="material-icons">location_on</i> <span class="title">Maps</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="google_map.html"> Google Maps </a> </li>
                <li> <a href="vector_map.html"> Vector Maps </a> </li>
              </ul>
            </li>
            <li>
              <a href="charts.html"> <i class="material-icons">timeline</i> <span class="title">Charts</span> </a>
            </li>
            <li class="open active">
              <a href="javascript:;"> <i class="material-icons">layers</i> <span class="title">Extra</span> <span class=" open  arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="user-profile.html"> User Profile </a> </li>
                <li> <a href="time_line.html"> Time line </a> </li>
                <li> <a href="support_ticket.html"> Support Ticket </a> </li>
                <li> <a href="gallery.html"> Gallery</a> </li>
                <li class=""><a href="calender.html"> Calendar</a> </li>
                <li> <a href="search_results.html"> Search Results </a> </li>
                <li> <a href="invoice.html"> Invoice </a> </li>
                <li> <a href="404.html"> 404 Page </a> </li>
                <li> <a href="500.html"> 500 Page </a> </li>
                <li> <a href="blank_template.html"> Blank Page </a> </li>
                <li> <a href="login.html"> Login </a> </li>
                <li> <a href="login_v2.html">Login v2</a> </li>
                <li> <a href="lockscreen.html"> Lockscreen </a> </li>
              </ul>
            </li>
            <li class="">
              <a href="javascript:;"> <i class="material-icons">more_horiz</i> <span class="title">Menu Levels</span> <span class=" arrow"></span> </a>
              <ul class="sub-menu">
                <li> <a href="javascript:;"> Level 1 </a> </li>
                <li>
                  <a href="javascript:;"> <span class="title">Level 2</span> <span class=" arrow"></span> </a>
                  <ul class="sub-menu">
                    <li> <a href="javascript:;"> Sub Menu </a> </li>
                    <li> <a href="ujavascript:;"> Sub Menu </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="hidden-lg hidden-md hidden-xs" id="more-widgets">
              <a href="javascript:;"> <i class="material-icons"></i></a>
              <ul class="sub-menu">
                <li class="side-bar-widgets">
                  <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="material-icons">add</i></a></span></p>
                  <ul class="folders">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>
                        My quick tasks </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon red"></div>
                        To do list </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon blue"></div>
                        Projects </a>
                    </li>
                    <li class="folder-input" style="display:none">
                      <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                    </li>
                  </ul>
                  <p class="menu-title">PROJECTS </p>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Redesign home page</p>
                    </div>
                  </div>
                  <div class="status-widget">
                    <div class="status-widget-wrapper">
                      <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                      <p>Statistical report</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <div class="side-bar-widgets">
            <p class="menu-title sm">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="material-icons">add</i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon red"></div>
                  To do list </a>
              </li>
              <li>
                <a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a>
              </li>
              <li class="folder-input" style="display:none">
                <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="">
              </li>
            </ul>
            <p class="menu-title">PROJECTS </p>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">Freelancer<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                <p>Redesign home page</p>
              </div>
            </div>
            <div class="status-widget">
              <div class="status-widget-wrapper">
                <div class="title">envato<a href="#" class="remove-widget"><i class="material-icons">close</i></a></div>
                <p>Statistical report</p>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <a href="#" class="scrollup">Scroll</a>
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
        </div>
        <div class="pull-right">
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a></div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
          <div class="page-title">
            <h3>Employees</h3>
          </div>
          <table class="table">
            <tr>
              <th>Em No</th>
              <th>Name </th>
              <th>Designation</th>
              <th>Edit</th>
            </tr>
          <?php
          $conn = new mysqli("localhost", "buysell", "&bjF6!SRvDY53An", "buysell");
          // Create connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM Employee";
          $result = $conn->query($sql);
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['em_no']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['designation']."</td>";
            echo "<td><a href=\"".$row['em_no']."\" >delete</a></td>";
            echo "</tr>";
          }
           ?>
         </table>
        </div>
        <script type="text/javascript">
        function loadDoc() {
          const name = document.getElementById('name').value;
          const designation = document.getElementById('designation').value;
          const dob = document.getElementById('dob').value;
          const offno = document.getElementById('offno').value;
          const persno = document.getElementById('persno').value;
          const address = document.getElementById('address').value;
          const email = document.getElementById('email').value;

          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById('name').value="";
              document.getElementById('designation').value="";
              document.getElementById('dob').value="";
              document.getElementById('offno').value="";
              document.getElementById('persno').value="";
              document.getElementById('address').value="";
              document.getElementById('email').value="";
              if(this.responseText=="1"){
                alert("New Employee Added");
              }
            }
          };
          xhttp.open("GET", "route.php?name="+name+"&designation="+designation+"&dob="+dob+"&offno="+offno+"&persno="+persno+"&address="+address+"&email="+email, true);
          xhttp.send();
        }
        </script>
      </div></div>
    <!-- END CONTAINER -->
    <!-- END CONTAINER -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
  </body>
</html>
