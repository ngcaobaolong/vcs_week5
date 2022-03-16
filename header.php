<header class="header">
  <div class="container">
    <div class="hovermenu ttmenu">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown ttmenu-half"><a href="/index.php">Home</a>
              <ul class="dropdown-menu menu-bg wbg">
              </ul>
            </li>
            <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="ttmenu-content">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="box">
                          <ul>
                            <li><a href="course-list.php">Courses List</a></li>
                            <li><a href="course-grid.php">Courses Grid</a></li>
                            <li><a href="course-filterable.php">Courses Filterable</a></li>
                            <li><a href="course-single.php">Single Course</a></li>
                            <li><a href="course-quiz.php">Take a Quiz</a></li>
                            <li><a href="course-achievements.php">Achievements</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box">
                          <ul>
                            <li><a href="course-instructors.php">Course Instructors</a></li>
                            <li><a href="forums.php">Community Forums</a></li>
                            <li><a href="course-login.php">Login & Register</a></li>
                            <li><a href="course-account.php">Edit Your Account</a></li>
                            <li><a href="course-testimonials.php">Happy Students</a></li>
                            <li><a href="course-faqs.php">Friendly Asked Questions</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-3 col-sm-6 nopadding">
                        <img class="img-thumbnail" src="/upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt="">
                      </div>
                      <div class="col-md-3 col-sm-6 nopadding">
                        <img class="img-thumbnail" src="/upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt="">
                      </div>
                      <div class="col-md-3 col-sm-6 nopadding">
                        <img class="img-thumbnail" src="/upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt="">
                      </div>
                      <div class="col-md-3 col-sm-6 nopadding">
                        <img class="img-thumbnail" src="/upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt="">
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="fa fa-angle-down"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="ttmenu-content">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="box">
                          <ul>
                            <li><a href="page-services.php">Our Services</a></li>
                            <li><a href="page-contact.php">Contact Us</a></li>
                            <li><a href="page-pricing.php">Pricing Tables</a></li>
                            <li><a href="page-shortcodes.php">Shortcodes</a></li>
                            <li><a href="page-typography.php">Typography</a></li>
                            <li><a href="page-fullwidth.php">Page Fullwidth</a></li>
                            <li><a href="page-sidebar.php">Page Sidebar</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box">
                          <ul>
                            <li><a href="page-shop.php">Shop Layout</a></li>
                            <li><a href="page-shop-single.php">Shop Single</a></li>
                            <li><a href="page-shop-single-alt.php">Shop Single Alt</a></li>
                            <li><a href="page-shop-cart.php">Shopping Cart</a></li>
                            <li><a href="blog.php">Blog & News</a></li>
                            <li><a href="single.php">Single Blog</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="forums.php">User list</a></li>
            <li><a href="page-contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if ($_SESSION['username'] === NULL) {
              echo '<li><a class="btn btn-primary" href="course-login.php"><i class="fa fa-sign-in"></i>Login/Register</a></li>';
            } else {
              echo '<li><a class="btn btn-primary" href="course-account.php?id='.$_SESSION['id'].'"><i class="fa"></i>Hello, '.$_SESSION['username'].'</a></li>';
              echo '<li><a class="btn btn-primary" href="logout.php"><i class="fa"></i>Logout</a></li>';
            } ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</header>