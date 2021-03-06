<header class="main-header">
  <!-- Logo -->
  <a href="{{ route('Dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>INV</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Inventory</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

  {{--      <div class="navbar-custom-menu">--}}
    {{--        <ul class="nav navbar-nav">--}}
    {{--          <!-- Messages: style can be found in dropdown.less-->--}}
    {{--          <li class="dropdown messages-menu">--}}
    {{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
    {{--              <i class="fa fa-envelope-o"></i>--}}
    {{--              <span class="label label-success">4</span>--}}
    {{--            </a>--}}
    {{--            <ul class="dropdown-menu">--}}
    {{--              <li class="header">You have 4 messages</li>--}}
    {{--              <li>--}}
    {{--                <!-- inner menu: contains the actual data -->--}}
    {{--                <ul class="menu">--}}
    {{--                  <li><!-- start message -->--}}
    {{--                    <a href="#">--}}
    {{--                      <div class="pull-left">--}}
    {{--                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
    {{--                      </div>--}}
    {{--                      <h4>--}}
    {{--                        Support Team--}}
    {{--                        <small><i class="fa fa-clock-o"></i> 5 mins</small>--}}
    {{--                      </h4>--}}
    {{--                      <p>Why not buy a new awesome theme?</p>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <!-- end message -->--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <div class="pull-left">--}}
    {{--                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">--}}
    {{--                      </div>--}}
    {{--                      <h4>--}}
    {{--                        AdminLTE Design Team--}}
    {{--                        <small><i class="fa fa-clock-o"></i> 2 hours</small>--}}
    {{--                      </h4>--}}
    {{--                      <p>Why not buy a new awesome theme?</p>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <div class="pull-left">--}}
    {{--                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">--}}
    {{--                      </div>--}}
    {{--                      <h4>--}}
    {{--                        Developers--}}
    {{--                        <small><i class="fa fa-clock-o"></i> Today</small>--}}
    {{--                      </h4>--}}
    {{--                      <p>Why not buy a new awesome theme?</p>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <div class="pull-left">--}}
    {{--                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">--}}
    {{--                      </div>--}}
    {{--                      <h4>--}}
    {{--                        Sales Department--}}
    {{--                        <small><i class="fa fa-clock-o"></i> Yesterday</small>--}}
    {{--                      </h4>--}}
    {{--                      <p>Why not buy a new awesome theme?</p>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <div class="pull-left">--}}
    {{--                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">--}}
    {{--                      </div>--}}
    {{--                      <h4>--}}
    {{--                        Reviewers--}}
    {{--                        <small><i class="fa fa-clock-o"></i> 2 days</small>--}}
    {{--                      </h4>--}}
    {{--                      <p>Why not buy a new awesome theme?</p>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                </ul>--}}
    {{--              </li>--}}
    {{--              <li class="footer"><a href="#">See All Messages</a></li>--}}
    {{--            </ul>--}}
    {{--          </li>--}}
    {{--          <!-- Notifications: style can be found in dropdown.less -->--}}
    {{--          <li class="dropdown notifications-menu">--}}
    {{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
    {{--              <i class="fa fa-bell-o"></i>--}}
    {{--              <span class="label label-warning">10</span>--}}
    {{--            </a>--}}
    {{--            <ul class="dropdown-menu">--}}
    {{--              <li class="header">You have 10 notifications</li>--}}
    {{--              <li>--}}
    {{--                <!-- inner menu: contains the actual data -->--}}
    {{--                <ul class="menu">--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <i class="fa fa-users text-aqua"></i> 5 new members joined today--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the--}}
    {{--                      page and may cause design problems--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <i class="fa fa-users text-red"></i> 5 new members joined--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <li>--}}
    {{--                    <a href="#">--}}
    {{--                      <i class="fa fa-user text-red"></i> You changed your username--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                </ul>--}}
    {{--              </li>--}}
    {{--              <li class="footer"><a href="#">View all</a></li>--}}
    {{--            </ul>--}}
    {{--          </li>--}}
    {{--          <!-- Tasks: style can be found in dropdown.less -->--}}
    {{--          <li class="dropdown tasks-menu">--}}
    {{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
    {{--              <i class="fa fa-flag-o"></i>--}}
    {{--              <span class="label label-danger">9</span>--}}
    {{--            </a>--}}
    {{--            <ul class="dropdown-menu">--}}
    {{--              <li class="header">You have 9 tasks</li>--}}
    {{--              <li>--}}
    {{--                <!-- inner menu: contains the actual data -->--}}
    {{--                <ul class="menu">--}}
    {{--                  <li><!-- Task item -->--}}
    {{--                    <a href="#">--}}
    {{--                      <h3>--}}
    {{--                        Design some buttons--}}
    {{--                        <small class="pull-right">20%</small>--}}
    {{--                      </h3>--}}
    {{--                      <div class="progress xs">--}}
    {{--                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"--}}
    {{--                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
    {{--                          <span class="sr-only">20% Complete</span>--}}
    {{--                        </div>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <!-- end task item -->--}}
    {{--                  <li><!-- Task item -->--}}
    {{--                    <a href="#">--}}
    {{--                      <h3>--}}
    {{--                        Create a nice theme--}}
    {{--                        <small class="pull-right">40%</small>--}}
    {{--                      </h3>--}}
    {{--                      <div class="progress xs">--}}
    {{--                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"--}}
    {{--                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
    {{--                          <span class="sr-only">40% Complete</span>--}}
    {{--                        </div>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <!-- end task item -->--}}
    {{--                  <li><!-- Task item -->--}}
    {{--                    <a href="#">--}}
    {{--                      <h3>--}}
    {{--                        Some task I need to do--}}
    {{--                        <small class="pull-right">60%</small>--}}
    {{--                      </h3>--}}
    {{--                      <div class="progress xs">--}}
    {{--                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"--}}
    {{--                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
    {{--                          <span class="sr-only">60% Complete</span>--}}
    {{--                        </div>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <!-- end task item -->--}}
    {{--                  <li><!-- Task item -->--}}
    {{--                    <a href="#">--}}
    {{--                      <h3>--}}
    {{--                        Make beautiful transitions--}}
    {{--                        <small class="pull-right">80%</small>--}}
    {{--                      </h3>--}}
    {{--                      <div class="progress xs">--}}
    {{--                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"--}}
    {{--                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
    {{--                          <span class="sr-only">80% Complete</span>--}}
    {{--                        </div>--}}
    {{--                      </div>--}}
    {{--                    </a>--}}
    {{--                  </li>--}}
    {{--                  <!-- end task item -->--}}
    {{--                </ul>--}}
    {{--              </li>--}}
    {{--              <li class="footer">--}}
    {{--                <a href="#">View all tasks</a>--}}
    {{--              </li>--}}
    {{--            </ul>--}}
    {{--          </li>--}}
    {{--          <!-- User Account: style can be found in dropdown.less -->--}}
    {{--          <li class="dropdown user user-menu">--}}
    {{--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
    {{--              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
    {{--              <span class="hidden-xs">Alexander Pierce</span>--}}
    {{--            </a>--}}
    {{--            <ul class="dropdown-menu">--}}
    {{--              <!-- User image -->--}}
    {{--              <li class="user-header">--}}
    {{--                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}

    {{--                <p>--}}
    {{--                  Alexander Pierce - Web Developer--}}
    {{--                  <small>Member since Nov. 2012</small>--}}
    {{--                </p>--}}
    {{--              </li>--}}
    {{--              <!-- Menu Body -->--}}
    {{--              <li class="user-body">--}}
    {{--                <div class="row">--}}
    {{--                  <div class="col-xs-4 text-center">--}}
    {{--                    <a href="#">Followers</a>--}}
    {{--                  </div>--}}
    {{--                  <div class="col-xs-4 text-center">--}}
    {{--                    <a href="#">Sales</a>--}}
    {{--                  </div>--}}
    {{--                  <div class="col-xs-4 text-center">--}}
    {{--                    <a href="#">Friends</a>--}}
    {{--                  </div>--}}
    {{--                </div>--}}
    {{--                <!-- /.row -->--}}
    {{--              </li>--}}
    {{--              <!-- Menu Footer-->--}}
    {{--              <li class="user-footer">--}}
    {{--                <div class="pull-left">--}}
    {{--                  <a href="#" class="btn btn-default btn-flat">Profile</a>--}}
    {{--                </div>--}}
    {{--                <div class="pull-right">--}}
    {{--                  <a href="#" class="btn btn-default btn-flat">Sign out</a>--}}
    {{--                </div>--}}
    {{--              </li>--}}
    {{--            </ul>--}}
    {{--          </li>--}}
    {{--          <!-- Control Sidebar Toggle Button -->--}}
    {{--          <li>--}}
    {{--            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
    {{--          </li>--}}
    {{--        </ul>--}}
    {{--      </div>--}}
    {{--    </nav>--}}
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU NAVIGATION</li>
      <li
        class=" {{ (request()->is('Customer')) || (request()->is('Pricelist')) || (request()->is('Purchase_Order'))   ? 'active' : '' }} treeview">
        <a>
          <i class="fa fa-users"></i> <span>Customer Masterfile</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (request()->is('Customer')) ? 'active' : '' }}"><a href="{{ route('Customer') }}"><i
                class="fa fa-user"></i> Customers List </a></li>
          <li class="{{ (request()->is('Pricelist')) ? 'active' : '' }}"><a href="{{ route('Pricelist') }}"><i
                class="fa fa-product-hunt"></i> Product Pricelist </a></li>
          {{-- <li class="{{ (request()->is('Cylinder')) ? 'active' : '' }}"><a href="{{ route('Cylinder') }}"><i
              class="fa fa-cubes"></i> Cylinder Balance </a>
      </li> --}}
      <li class="{{ (request()->is('Purchase_Order')) ? 'active' : '' }}"><a href="{{ route('Purcase_Order') }}"><i
            class="fa fa-shopping-cart"></i> Purchase Order </a></li>
    </ul>
    </li>
    <li class=" {{ (request()->is('SystemUtilities/SystemUsers')) ? 'active' : '' }} treeview">
      <a>
        <i class="fa fa-wrench"></i> <span>System Utilities</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ (request()->is('SystemUtilities/SystemUsers')) ? 'active' : '' }}"><a
            href="{{ route('SystemUsers') }}"><i class="fa fa-user"></i> System User </a></li>
        <li class=""><a href=""><i class="fa fa-history"></i> Audit Trail Monitoring </a></li>
        <li class=""><a href="{{ route('SalesRepController.index') }}"><i class="fa fa-address-card"></i> Sales
            Representative </a></li>
        <li class=""><a href="{{ route('SalesInvoice.index') }}"><i class="fa fa-clipboard-list"></i> Sales Invoice
            Decleration </a></li>
        <li class=""><a href="{{ route('ICRDeclaration.index') }}"><i class="fa fa-clipboard-list"></i> ICR Decleration
          </a></li>
        <li class=""><a href="{{ route('CLCDeclaration.index') }}"><i class="fa fa-clipboard-list"></i> CLC Declaration
          </a></li>
        <li class=""><a href="{{ route('DRDeclaration.index') }}"><i class="fa fa-clipboard-list"></i> DR Decleration
          </a></li>
        <li class=""><a href="{{ route('ORDeclaration.index')}}"><i class="fa fa-clipboard-list"></i> OR Decleration
          </a></li>
      </ul>
    </li>
    <li class=" {{ (request()->is('Sales') || request()->is('CylinderReceipt'))  ? 'active' : '' }} treeview">
      <a>
        <i class="fa fa-wrench"></i> <span>Sales Record</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="{{ (request()->is('Sales')) ? 'active' : '' }}"><a href="{{ route('Sales.index') }}"><i
              class="fa fa-user"></i> Sales Invoice </a></li>
        <li class="{{ (request()->is('CylinderReceipt')) ? 'active' : '' }}"><a
            href="{{ route('CylinderReceipt.index') }}"><i class="fa fa-user"></i> Incoming Cylinder Receipt </a></li>
        <li class="{{ (request()->is('CylinderLoan')) ? 'active' : '' }}"><a href="{{ route('CylinderLoan.index') }}"><i
              class="fa fa-user"></i> Cylinder Loan Contract </a></li>
        <li class="{{ (request()->is('Deliver')) ? 'active' : '' }}"><a href="{{ route('Deliver.index') }}"><i
              class="fa fa-user"></i> Delivery Receipt </a></li>
        <li class="{{ (request()->is('OfficialReceipt')) ? 'active' : '' }}"><a
            href="{{ route('OfficialReceipt.index') }}"><i class="fa fa-user"></i> Official Receipt </a></li>
      </ul>
    </li>
      <li class="treeview menu-open" style="height: auto;">
        <a href="#">
          <i class="fa fa-share"></i> <span>Reports</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="display: block;">
          <li class="treeview menu-open" style="height: auto;">
            <a href="#"><i class="fa fa-circle-o"></i> Customer Reports
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: block;">
              <li><a href="#"><i class="fa fa-circle-o"></i> Pricelist Report </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Aging Report </a></li>
              <li><a data-toggle="modal" data-target="#statementAccount"> <i class="fa fa-circle-o"></i> Statement of Account </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Summary of Account </a></li>


            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </section>

    {{-- For Reports --}}



  <!-- /.sidebar -->
</aside>