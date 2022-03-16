<!DOCTYPE html>
<?php
session_start();
require_once("head.html");
?>

<body>
  <?php include("header.php") ?>
  <section class="grey section">
    <div class="container">
      <div class="row">
        <div id="content" class="col-md-8 col-sm-8 col-xs-12">
          <div class="blog-wrapper">
            <div class="row second-bread">
              <div class="col-md-6 text-left">
                <h1>Blog & News</h1>
              </div>
              <div class="col-md-6 text-right">
                <div class="bread">
                  <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blog</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-wrapper single-blog-wrapper">
            <div class="blog-title">
              <a class="category_title" href="#" title="">Digital Marketing</a>
              <h2><a href="single.html" title="">Best Learning Management System for Ever</a></h2>
              <div class="post-meta">
                <span>
                  <i class="fa fa-user"></i>
                  <a href="#">Jenny Doe</a>
                </span>
                <span>
                  <i class="fa fa-tag"></i>
                  <a href="#">Galleries</a>
                </span>
                <span>
                  <i class="fa fa-comments"></i>
                  <a href="#">21 Comments</a>
                </span>
                <span>
                  <i class="fa fa-eye"></i>
                  <a href="#">123 Views</a>
                </span>
                <span>
                  <i class="fa fa-clock-o"></i>
                  <a href="#">21 Aug 2015</a>
                </span>
              </div>
            </div>
            <div class="blog-image">
              <a href="single.html" title=""><img src="upload/xblog_01.jpg.pagespeed.ic.2jVY1j1OMe.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="blog-desc">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk...</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk...</p>
              <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </blockquote>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardrd dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk.. dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk...</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardrd dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk.. dummy text ever since the 1500s, when an unknown printer took.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unk...</p>
              <hr class="invis">
              <div class="tags">
                <a href="#">design</a>
                <a href="#">development</a>
                <a href="#">video tuts</a>
                <a href="#">sexy tag</a>
              </div>
            </div>
          </div>
          <hr class="invis">
          <div class="blog-wrapper comment-wrapper">
            <div id="reviews" class="feedbacks">
              <h3>
                What others say about this post? (3 Comments)
              </h3>
              <div>
                <div class="well">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="upload/xstudent_01.png.pagespeed.ic.756JwMcqdq.png" alt="Generic placeholder image">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">John DOE</h4>
                      <div class="time-comment clearfix">
                        <small class="pull-left">21 Jun 2015</small>
                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
                      </div>
                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                  </div>
                  <div class="media comment-reply">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="upload/xstudent_02.png.pagespeed.ic.y-PM-y4pVj.png" alt="Generic placeholder image">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Amanda FOXOE</h4>
                      <div class="time-comment clearfix">
                        <small class="pull-left">21 Jun 2015</small>
                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
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
                      <div class="time-comment clearfix">
                        <small class="pull-left">21 Jun 2015</small>
                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
                      </div>
                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                  </div>
                  <div class="content-widget">
                    <div class="widget-title">
                      <h4>Leave a Comment</h4>
                      <hr>
                    </div>
                    <div class="commentform">
                      <p>Please use only default html tags.</p>
                      <form>
                        <input type="text" class="form-control" placeholder="Your name">
                        <input type="email" class="form-control" placeholder="Your email">
                        <input type="text" class="form-control" placeholder="Your website">
                        <textarea type="text" class="form-control" placeholder="Message goes here"></textarea>
                        <input type="submit" value="Send Comment" class="btn btn-primary btn-block" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
          <div class="widget">
            <div class="searchform">
              <form>
                <input type="text" class="form-control" placeholder="What you are looking for?">
              </form>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h4>Subscribe Us</h4>
              <hr>
            </div>
            <div class="newsletter">
              <p>Subscribe to our weekly Newsletter and stay tuned and get more freebies.</p>
              <form>
                <input type="text" class="form-control" placeholder="Enter your email here...">
                <input type="submit" value="Subscribe Now!" class="btn btn-primary btn-block" />
              </form>
            </div>
          </div>
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

<!-- single41:00 GMT -->

</html>