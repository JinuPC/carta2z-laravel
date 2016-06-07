 <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/').'/admin'}}" class="site_title"><i style="border: 0; color: #ff6666;" class="fa fa-shopping-cart" aria-hidden="true"></i>Cart<span style="color: #ff6666;">&nbsp;A2Z</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('images/user.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ucfirst(Auth::user()->firstname)}}&nbsp;{{ucfirst(Auth::user()->lastname)}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>{{Auth::user()->role.' Dashboard'}}</h3>
                <ul class="nav side-menu">
                                    <!-- Dashboad -->
                  <li><a href="{{url('/').'/admin'}}"><i class="fa fa-tachometer"></i>Dashboard</a></li>

                  <!-- Users -->
                  <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/').'/admin/users'}}">Total Users</a></li>
                      <li><a href="{{url('/').'/admin/activeusers'}}">Active Users</a></li>
                      <li><a href="{{url('/').'/admin/inactiveusers'}}">Inactive Users</a></li>
                      <li><a href="{{url('/').'/admin/verifiedusers'}}">Verified Users</a></li>
                      <li><a href="{{url('/').'/admin/listsellers'}}">Sellers</a></li>
                      <li><a href="{{url('/').'/admin/listretailers'}}">Retailers</a></li>                      
                    </ul>
                  </li>


                  <!-- Store -->
                  <li><a><i class="fa fa-shopping-cart"></i> Store <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/').'/admin/store/categories'}}">Categories</a></li>                                            
                    </ul>
                  </li>

                  <!-- Products -->
                  <li><a><i class="fa fa-shopping-basket"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/').'/admin/products'}}">List Products</a></li>
                      <li><a href="{{url('/').'/admin/products/add'}}">Add Product</a></li>                      
                    </ul>
                  </li>

                  <!-- Inventory -->
                  <li><a><i class="fa fa-table"></i> Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/').'/admin/inventory'}}">List Inventory</a></li>
                    </ul>
                  </li>

                  <!-- Orders -->
                  <li><a><i class="fa fa-archive"></i> Orders <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/').'/admin/orders'}}">New Orders</a></li>
                      <li><a href="{{url('/').'/admin/processingorders'}}">Processing</a></li>
                      <li><a href="{{url('/').'/admin/finishedorders'}}">Finished</a></li>                      
                    </ul>
                  </li>

                  <!-- Unimarket -->
                  <li><a><i class="fa fa-clone"></i>UniMarket <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"><strong  style="font-family: 'Oswald', sans-serif;">&nbsp;{{ isset($title) ? $title : 'Dashboard' }}</strong></i></a>
              </div>             

              <ul class="nav navbar-nav navbar-right">

                
                <li class="">
                  <a href="javascript:;" class=" user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img class="green" src="{{asset('images/user.png') }}"><span style="font-size:20px;" class="blue">{{ucfirst(Auth::user()->firstname)}}&nbsp;{{ucfirst(Auth::user()->lastname)}}</span>
                    <span class=" fa blue fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('/').'/admin/profile'}}"><span class="blue"><i class="fa  fa-user pull-right"></i>Profile</span></a></li>
                    <li>
                      <a href="{{url('/').'/admin/settings'}}"><span class="blue"><i class="fa  fa-cog pull-right"></i>Settings</span>
                      </a>
                    </li>
                    <li><a href="{{url('/').'/admin/help'}}"><span class="blue"><i class="fa  fa-question-circle pull-right"></i>Help</span></a></li>
                    <li><a href="{{ url('logout') }}"><span class="blue"><i class="fa  fa-power-off pull-right"></i>Logout</span></a></li>
                  </ul>
                </li>

                
                <li class="">
                  <a href="{{url('/')}}/shop" class=" user-profile " aria-expanded="false" style="font-size:30px;">
                       <span style="font-size:20px;" class="blue"><i style="font-size:20px;" class="fa  fa-cart-arrow-down "></i> Shop</span>     
            
                  </a>                  
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->