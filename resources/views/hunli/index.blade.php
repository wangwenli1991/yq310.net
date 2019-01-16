<!DOCTYPE html>
<html lang="en">

<head>
  <title>上海婚礼网,上海舞台搭建，上海婚礼布置，上海鲜花布置</title>
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="上海婚礼网,婚礼策划,海外婚礼,婚礼布置，婚庆公司" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta-Tags -->
  <!-- Style-sheets -->
  <link href="{{ asset('hunli/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('hunli/css/flexslider.css') }}" type="text/css" media="screen" property="" />
  <link href="{{ asset('hunli/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('hunli/css/fontawesome-all.css') }}" rel="stylesheet">
  <!--// Style-sheets -->
  <!--web-fonts-->

  <!--//web-fonts-->
</head>

<body>
  <!-- banner -->
  <div class="banner" id="home">
    <!-- header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">婚礼婚庆网</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">首页
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">关于婚礼网</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery">婚礼网相册</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                婚礼网服务
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-center" href="stories">成功案例</a>
                <a class="dropdown-item text-center" href="typography">其他表单</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">联系我们</a>
            </li>
          </ul>
          <form action="#" method="post" class="form-inline my-2 my-lg-0 search mx-lg-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="搜索婚礼风格 ..." name="Search" required="">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
          </form>
        </div>
      </nav>
    </header>
    <!-- //header -->


    @yield('shouye')



  <!-- Footer -->
  <footer class="footer-section-w3-agileits py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 footer-grids-w3-agile">
          <h2>最新婚礼案例</h2>
          <div class="row ff-images">
            <a href="stories.html" class="col-4">
              <img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
            </a>
            <a href="stories.html" class="col-4">
              <img src="images/s2.jpg" class="img-fluid" alt="Responsive image">
            </a>
            <a href="stories.html" class="col-4">
              <img src="images/s3.jpg" class="img-fluid" alt="Responsive image">
            </a>
            <a href="stories.html" class="col-4">
              <img src="images/s2.jpg" class="img-fluid" alt="Responsive image">
            </a>
            <a href="stories.html" class="col-4">
              <img src="images/s3.jpg" class="img-fluid" alt="Responsive image">
            </a>
            <a href="stories.html" class="col-4">
              <img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
            </a>
          </div>
        </div>
        <div class="col-lg-4 footer-grids-w3-agile">
          <h3>联系婚礼网</h3>
          <address>
            <p>上海,苏州,无锡</p>
            <p class="my-2">上海市区</p>
            <p class="phone">电话:156-0185-2720</p>
            <p class="phone my-2">幸福热线:15601852720</p>
            <p class="phone">婚礼网邮件:
              <a href="mailto:">2581133606@qq.com</a>
            </p>
          </address>
        </div>
        <div class="col-lg-4 footer-grids-w3-agile">
          <h3>最新婚礼网资讯</h3>
          <ul class="w3agile_footer_grid_list">
            <li>Ut aut reiciendis voluptatibus adipiscing
              <a href="#">example.com</a> alias, ut aut.
              <span>
                <i class="fa带b fa-twitter"></i> 02 days ago</span>
            </li>
            <li>Itaque earum rerum hic tenetur a sapiente
              <a href="#">example.com</a> ut aut.
              <span>
                <i class="fab fa-twitter"></i> 03 days ago</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- //Footer -->
  <!-- copyright -->
  <div class="copyright-w3layouts">
    <div class="container">
      <p class="py-xl-4 py-3">Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://www.goodhunli.com">婚礼婚庆网</a>
        <a href="http://www.miitbeian.gov.cn">皖ICP备17000855号-9</a>
      </p>
    </div>
  </div>
  <!-- //copyright -->

  <!-- Required common Js -->
  <script src="{{ asset('hunli/js/jquery-2.2.3.min.js') }}"></script>
  <!-- //Required common Js -->
  <!-- stats -->
  <script src="{{ asset('hunli/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('hunli/js/jquery.countup.js') }}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats -->
  <!-- Responsiveslides -->
  <script src="{{ asset('hunli/js/responsiveslides.min.js') }}"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <!-- // Responsiveslides -->
  <!-- flexSlider -->
  <script defer src="{{ asset('hunli/js/jquery.flexslider.js') }}"></script>
  <script>
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>

  <!-- //flexSlider -->

  <!-- start-smoth-scrolling -->
  <script src="{{ asset('hunli/js/move-top.js') }}"></script>
  <script src="{{ asset('hunli/js/easing.js') }}"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <!-- here stars scrolling icon -->
  <script>
    $(document).ready(function () {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
      */

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!-- //here ends scrolling icon -->
  <!-- Js for bootstrap working-->
  <script src="{{ asset('hunli/js/bootstrap.min.js') }}"></script>
  <!-- //Js for bootstrap working -->
</body>

</html>
