<!DOCTYPE html>
<?php
session_start();
require_once("head.html");
?>

<body>
  <?php include("header.php") ?>
  <section class="grey page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1>Single Course Page</h1>
        </div>
        <div class="col-md-6 text-right">
          <div class="bread">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li class="active">Single Course Page</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="white section">
    <div class="container">
      <div class="row">
        <div id="course-left-sidebar" class="col-md-4">
          <div class="course-image-widget">
            <img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="" class="img-responsive">
          </div>
          <div class="course-meta">
            <p class="course-category">Category : <a href="course-list.html">Graphic Design</a></p>
            <hr>
            <div class="rating">
              <p>Reviews : &nbsp;
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <a title="" href="#reviews">&nbsp; (3)</a>
              </p>
            </div>
            <hr>
            <p class="course-student">Students : 21 Members </p>
            <hr>
            <p class="course-time">Perriod : 12 Month </p>
            <hr>
            <p class="course-prize">Prize : <i class="fa fa-trophy"></i> <i class="fa fa-certificate"></i> <i class="fa fa-shield"></i></p>
            <hr>
            <p class="course-instructors">Instructor : <a href="#" title=""><img src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" class="img-circle" alt=""> John DOE</a></p>
            <hr>
            <p class="course-forum">Course Forum : <a href="#" title="">Web Designers</a></p>
          </div>
          <div class="course-button">
            <a href="#" class="btn btn-primary btn-block">TAKE THIS COURSE</a>
          </div>
        </div>
        <div id="course-content" class="col-md-8">
          <div class="course-description">
            <small>Course Status: <span>In Progress</span> </small>
            <small>Course Price: <span>$21.00</span> </small>
            <h3 class="course-title">Learning Quality Graphic Design & Mockup and Business Card</h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
            <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          </div>
          <div class="course-table">
            <h4>Course Lessons</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Lesson Title</th>
                  <th>Time</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td><a href="#">Introduction</a></td>
                  <td>12 Min</td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td>Lesson One - What is Photoshop</td>
                  <td>20 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td>Lesson Two - How to Use Tools</td>
                  <td>41 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td>Lesson Three - Creating First Homepage</td>
                  <td>15 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td>Lesson Four - Understanding Colors</td>
                  <td>29 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-play-circle"></i></td>
                  <td>Lesson Five - International Sizes</td>
                  <td>31 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
                <tr>
                  <td><i class="fa fa-question-circle"></i></td>
                  <td><a href="course-quiz.html">Quiz Time - Your First Quiz</a></td>
                  <td>31 Min</td>
                  <td><i class="fa fa-close"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr class="invis">
          <div id="reviews" class="feedbacks">
            <p>
              <a class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                What our customers said? (3 Feedbacks)
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="well">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" alt="Generic placeholder image">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">John DOE</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png" alt="Generic placeholder image">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Amanda FOXOE</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="upload/xstudent_03.png.pagespeed.ic.uCQY3WNMCJ.png" alt="Generic placeholder image">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Mark BOBS</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="other-courses">
            <img src="images/xothers.png.pagespeed.ic.BLyi2PaMRC.png" alt="" class="">
          </div>
        </div>
      </div>
      <hr class="invis">
      <div id="owl-featured" class="owl-custom">
        <div class="owl-featured">
          <div class="shop-item-list entry">
            <div class="">
              <img src="upload/xcourse_01.png.pagespeed.ic.XTOvCuUmZu.png" alt="">
              <div class="magnifier">
              </div>
            </div>
            <div class="shop-item-title clearfix">
              <h4><a href="course-single.html">Learn Web Design & Development</a></h4>
              <div class="shopmeta">
                <span class="pull-left">12 Student</span>
                <div class="rating pull-right">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
            <div class="visible-buttons">
              <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
              <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
            </div>
          </div>
        </div>
        <div class="owl-featured">
          <div class="shop-item-list entry">
            <div class="">
              <img src="upload/xcourse_02.png.pagespeed.ic.PL7Wu2UcSB.png" alt="">
              <div class="magnifier">
              </div>
            </div>
            <div class="shop-item-title clearfix">
              <h4><a href="course-single.html">Graphic Design & Logo Mockups Course</a></h4>
              <div class="shopmeta">
                <span class="pull-left">21 Student</span>
                <div class="rating pull-right">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
              </div>
            </div>
            <div class="visible-buttons">
              <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
              <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
            </div>
          </div>
        </div>
        <div class="owl-featured">
          <div class="shop-item-list entry">
            <div class="">
              <img src="upload/xcourse_03.png.pagespeed.ic.8e1MyY5M7i.png" alt="">
              <div class="magnifier">
              </div>
            </div>
            <div class="shop-item-title clearfix">
              <h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
              <div class="shopmeta">
                <span class="pull-left">98 Student</span>
                <div class="rating pull-right">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
              </div>
            </div>
            <div class="visible-buttons">
              <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
              <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
            </div>
          </div>
        </div>
        <div class="owl-featured">
          <div class="shop-item-list entry">
            <div class="">
              <img src="upload/xcourse_04.png.pagespeed.ic.2rIKmUwjA7.png" alt="">
              <div class="magnifier">
              </div>
            </div>
            <div class="shop-item-title clearfix">
              <h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
              <div class="shopmeta">
                <span class="pull-left">98 Student</span>
                <div class="rating pull-right">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
              </div>
            </div>
            <div class="visible-buttons">
              <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
              <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="dark footer section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-6 col-xs-12">
          <div class="widget">
            <div class="widget-title">
              <h4>About LearnPLUS</h4>
              <hr>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
        </div>
        <div class="col-md-3 col-md-6 col-xs-12">
          <div class="widget">
            <div class="widget-title">
              <h4>Recent Tweets</h4>
              <hr>
            </div>
            <div class="twitter-widget">
              <ul class="latest-tweets">
                <li>
                  <p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                  <span>2 hours ago</span>
                </li>
                <li>
                  <p><a href="#" title=""></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                  <span>2 hours ago</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-md-6 col-xs-12">
          <div class="widget">
            <div class="widget-title">
              <h4>Popular Courses</h4>
              <hr>
            </div>
            <ul class="popular-courses">
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_05.png.pagespeed.ic.2iuJZT3CaV.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_06.png.pagespeed.ic.o2Uniwq-y5.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_07.png.pagespeed.ic.H-fRTeeP8u.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_08.png.pagespeed.ic.76ek5JLaEY.png" alt=""></a>
              </li>
              <li>
                <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/xservice_09.png.pagespeed.ic.FJcG938KC-.png" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-md-6 col-xs-12">
          <div class="widget">
            <div class="widget-title">
              <h4>Contact Details</h4>
              <hr>
            </div>
            <ul class="contact-details">
              <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
              <li><i class="fa fa-phone"></i> +90 123 45 67</li>
              <li><i class="fa fa-fax"></i> +90 123 45 68</li>
              <li><i class="fa fa-home"></i> INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
        <div class="col-md-6 text-right">
          <ul class="list-inline">
            <li><a href="#">Terms of Usage</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  </div>
  <script src="js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js"></script>
  <script src="js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js"></script>
  <script>
    eval(mod_pagespeed_gFRwwUbyVc);
  </script>
  <script>
    eval(mod_pagespeed_rQwXk4AOUN);
  </script>
  <script>
    eval(mod_pagespeed_U0OPgGhapl);
  </script>
  <script src="js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js"></script>
  <script>
    eval(mod_pagespeed_6Ja02QZq$f);
  </script>
  <script>
    eval(mod_pagespeed_KxQMf5X6rF);
  </script>
</body>

<!-- course-single40:10  -->

</html>