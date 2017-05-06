<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="Index,Follow" />
  <title>MobileCity điện thoại xách tay iPhone, Sony, LG, HTC, SamSung</title>
  <meta content="Điện thoại xách tay giá rẻ nhất Hà Nội, chuyên hàng xách tay và chính hãng iPhone, Sony, LG, HTC, SamSung, Lenovo, Oppo, Xiaomi, Asus, Sky... bảo hành 12 tháng" name="description" />
  <meta content="Mobilecity, điện thoại xách, điện thoại giá rẻ, điện thoại" name="keywords" />
  <link rel="canonical" href="index.html" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/main.css" />
  {{if(isset($styles)):}}
    {{foreach($styles as $style):}}
      <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/') . $style }}" />
    {{endforeach}}
  {{endif}}
  <link rel="stylesheet" href="{{# URL::base_path('/public/templates/front/')}}themes/css/responsive.css" />
</head>

<body>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/icons.css" />
  <link rel="stylesheet" href="{{# URL::base_path('/public/templates/front/')}}themes/css/component.css" />
  <link rel="stylesheet" href="{{# URL::base_path('/public/templates/front/')}}themes/css/cAlert.css" />
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script>
  $(document).ready(function() {
    $('.show_ajax').slideUp();
  });
  </script>
  <div class="mb-search-box">
    <div class="header_text">
      <div class="fl"><em></em></div>
      <div class="search_warp">
        <div class="search">
          <form method="GET" action="http://mobilecity.vn/tim-kiem/">
            <em style="display: none">x</em>
            <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm . . ." autocomplete="off" value="">
            <i class="search_btn"><i></i></i>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <!-- Push Wrapper -->
    <div class="mp-pusher" id="mp-pusher">
      <!-- mp-menu -->
      {{{include front/layout/menu.layout}}}
      <!-- /mp-menu -->
      <div class="scroller">
        <!-- this is for emulating position fixed of the nav -->
        <div class="scroller-inner">
          <!-- Nội dung website -->
          <section class="bg_top_web clearfix">
            <div class="top_web bocnoidung clearfix">
              <div class="top_web_left clearfix">
                <p>Bạn đang xem tại: </p>
                <dl class="dropdown">
                  <dt><a href="#"><span>Hà Nội</span><div class="icon_selec all_icon"></div></a></dt>
                  <dd>
                    <ul>
                      <li><a href="#"><span class="value_selec">1</span>Hà Nội</a></li>
                    </ul>
                  </dd>
                </dl>
              </div>
              <div class="top_web_center clearfix">
                <p>Hotline <span class="chucam">097.120.6688 - 0965.123.123 - 096.1111.398</span></p>
              </div>
              <div class="top_web_right clearfix">
                <p>
                  <a style="font-weight: bold;" href="tin-tuc-tuyen-dung/index.html">Tuyển dụng</a>&nbsp;|&nbsp;
                  <a id="btn-login" href="javascript:;" rel="nofollow">Đăng nhập</a> | <a id="btn-signup" href="javascript:;" rel="nofollow">Đăng ký</a>
                </p>
              </div>
            </div>
          </section>
          {{{include front/layout/header.layout}}}
          <main class="clearfix bocnoidung">
            {{{body}}}
          </main>
         {{{include front/layout/footer.layout}}}
          <section class="footer_bottom clearfix">
            <div class="bocnoidung clearfix">
              <div class="footer_bottom_left clearfix">
                <p>© 2016. MobileCity hệ thống bán lẻ điện thoại di động.</p>
              </div>
              <div class="footer_bottom_center clearfix">
                <p>Bạn có thể thanh toán với</p>
                <div class="all_icon icon_bank"></div>
              </div>
              <div class="footer_bottom_right clearfix">
                <p>Tư vấn và phát triển bởi: <a href="https://sudo.vn/" target="_blank" rel="nofollow">SUDO</a></p>
              </div>
            </div>
          </section>
          <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/popup.css" />
          <div id="popup-login" class="sudo-popup">
            <div class="popup-close" onclick="closebPopup('popup-login')"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="popup-title">Đăng nhập</div>
            <div class="popup-main">
              <div class="popup-form popup-form-login">
                <div class="popup-message-box"></div>
                <div class="popup-form-wrap">
                  <div class="popup-form-wrap-title">Tài khoản MobileCity</div>
                  <form id="ajaxlogin" action="javascript:;" method="post">
                    <div class="form-inline">
                      <label>Email</label>
                      <input class="email" type="email" name="email" value="" />
                    </div>
                    <div class="form-inline">
                      <label>Mật khẩu</label>
                      <input class="password" type="password" name="password" value="" />
                    </div>
                    <div class="form-inline" style="margin-bottom: 0px;">
                      <label>&nbsp;</label>
                      <a class="form-link inputinline" href="#lostpassword">Quên mật khẩu ?</a>
                    </div>
                    <div class="form-inline" style="margin-bottom: 0px;">
                      <label>&nbsp;</label>
                      <div class="inputinline">
                        <input class="remember" id="remember" type="checkbox" value="1" name="remember" />
                        <label for="remember" class="opan-text remember-text"> Giữ tôi luôn đăng nhập</label>
                      </div>
                    </div>
                    <div class="form-inline">
                      <label>&nbsp;</label>
                      <input class="login-button" type="submit" value="Đăng nhập" accesskey="p" name="submit" />
                    </div>
                  </form>
                </div>
                <div class="popup-social-wrap">
                  <div class="popup-social-wrap-title">Tài khoản khác</div>
                  <a class="popup-social-fb" href="login-with-facebook/index.html"><span class="iconsd"><i class="fa fa-facebook"></i></span><span class="text">Đăng nhập qua Facebook</span></a>
                  <a class="popup-social-gg" href="login-with-google/index.html"><span class="iconsd"><i class="fa fa-google"></i></span><span class="text">Đăng nhập qua Google</span></a>
                </div>
                <div class="clear"></div>
                <div class="popup-footer">
                  <p>Chưa có tài khoản? <a href="javascript:;" onclick="popupSignup();">Đăng ký tại đây</a></p>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-signup" class="sudo-popup">
            <div class="popup-close" onclick="closebPopup('popup-signup')"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="popup-title">Đăng ký tài khoản</div>
            <div class="popup-main">
              <div class="popup-form popup-form-login">
                <div class="popup-message-box"></div>
                <div class="popup-form-wrap">
                  <div class="popup-form-wrap-title">Đăng ký tài khoản với MobileCity</div>
                  <form id="ajaxsignup" action="javascript:;" method="post">
                    <div class="form-inline">
                      <label>Email</label>
                      <input class="email" type="email" name="email" value="" />
                    </div>
                    <div class="form-inline">
                      <label>Mật khẩu</label>
                      <input class="password" type="password" name="password" value="" />
                    </div>
                    <div class="form-inline">
                      <label>Họ tên</label>
                      <input class="fullname" type="text" name="fullname" value="" />
                    </div>
                    <div class="form-inline">
                      <label>&nbsp;</label>
                      <input class="signup-button" type="submit" value="Đăng ký" accesskey="p" name="submit" />
                    </div>
                  </form>
                </div>
                <div class="popup-social-wrap">
                  <div class="popup-social-wrap-title">Tài khoản khác</div>
                  <a class="popup-social-fb" href="login-with-facebook/index.html"><span class="iconsd"><i class="fa fa-facebook"></i></span><span class="text">Đăng ký qua Facebook</span></a>
                  <a class="popup-social-gg" href="login-with-google/index.html"><span class="iconsd"><i class="fa fa-google"></i></span><span class="text">Đăng ký qua Google</span></a>
                </div>
                <div class="clear"></div>
                <div class="popup-footer">
                  <p>Đã có tài khoản? <a href="javascript:;" onclick="popupLogin();">Đăng nhập tại đây</a></p>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-location" style="padding: 20px 0px;">
            <div class="popup-location-close" onclick="closebPopup('popup-location')">
              <i class="fa fa-close"></i>
            </div>
            <div class="popup-location-title">Bạn gần MobileCity</div>
            <p class="popup-location-des" style="font-size: 16px; color: #222;">Hãy chọn tỉnh thành của bạn. Bạn có thể thay đổi tỉnh thành tại đầu trang.</p>
            <!--<div class="popup-location-select">
        <a class="pl-item" href="http://mobilecity.vn/1"><i class="fa fa-map-marker"></i> Hà Nội</a>
        <a class="pl-item" href="http://mobilecity.vn/2"><i class="fa fa-map-marker"></i> TP. Hồ Chí Minh</a>
    </div>-->
            <div class="form-group form-group-lg">
              <a style="width: 80%; margin: 10px 10%; padding: 15px 0px; font-size: 24px;" class="btn btn-success btn-lg btn-block" href="indexbcb4.html?setlocation=1">Hà Nội</a>
              <a style="width: 80%; margin: 10px 10%; padding: 10px 0px; font-size: 24px;" class="btn btn-success btn-lg btn-block" href="index01b2.html?setlocation=2">TP Hồ Chí Minh</a>
            </div>
            <!--<div class="popup-location-ads">
            <img src="http://images.mobilecity.vn/media/images/2016/11/8.jpg"/>
            </div>-->
          </div>
          <script>
          $(document).ready(function() {
            //$('#popup-location').bPopup({
            //  speed: 450,
            //  transition: 'slideDown',
            //  zIndex:99999,
            // onClose: function() { 
            //     window.location.href = "indexbcb4.html?setlocation=1"
            // }
            //});
          });
          </script>
          <style>
          .cd-container {
            width: 90%;
            max-width: 768px;
            margin: 2em auto;
          }
          
          .cd-container::after {
            /* clearfix */
            content: '';
            display: table;
            clear: both;
          }
          /* -------------------------------- 

Main components
 
----------------------------------*/
          
          .cd-top {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 6px;
            right: 10px;
            bottom: 280px;
            visibility: hidden;
            position: fixed;
            opacity: 0;
            z-index: 100;
            overflow: hidden;
            text-indent: 100%;
            white-space: nowrap;
            /* image replacement properties */
            background-image: url('themes/img/all_icon.png');
            background-position: -228px -26px;
            -webkit-transition: opacity .3s 0s, visibility 0s .3s;
            -moz-transition: opacity .3s 0s, visibility 0s .3s;
            transition: opacity .3s 0s, visibility 0s .3s;
          }
          
          .cd-top.cd-is-visible,
          .cd-top.cd-fade-out,
          .no-touch .cd-top:hover {
            -webkit-transition: opacity .3s 0s, visibility 0s 0s;
            -moz-transition: opacity .3s 0s, visibility 0s 0s;
            transition: opacity .3s 0s, visibility 0s 0s;
          }
          
          .cd-top.cd-is-visible {
            /* the button becomes visible */
            visibility: visible;
            opacity: 1;
          }
          
          .cd-top.cd-fade-out {
            /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
            opacity: .9;
          }
          
          .no-touch .cd-top:hover {
            background-color: #1E5799 !important;
            opacity: 1 !important;
          }
          
          @media only screen and (max-width: 768px) {
            .cd-top {
              right: 5px !important;
              bottom: 70px !important;
            }
          }
          </style>
          <script>
          jQuery(document).ready(function($) {
            // browser window scroll (in pixels) after which the "back to top" link is shown
            var offset = 300,
              //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
              offset_opacity = 1200,
              //duration of the top scrolling animation (in ms)
              scroll_top_duration = 700,
              //grab the "back to top" link
              $back_to_top = $('.cd-top');

            //hide or show the "back to top" link
            $(window).scroll(function() {
              ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
              if ($(this).scrollTop() > offset_opacity) {
                $back_to_top.addClass('cd-fade-out');
              }
            });

            //smooth scroll to top
            $back_to_top.on('click', function(event) {
              event.preventDefault();
              $('body,html').animate({
                scrollTop: 0,
              }, scroll_top_duration);
            });

          });
          </script>
          <a href="javascript:;" class="cd-top">Top</a>
          <!-- hết nội dung website -->
        </div>
        <!-- /scroller-inner -->
      </div>
      <!-- /scroller -->
    </div>
    <!-- /pusher -->
  </div>
  <!-- /container -->
  <script src="{{# URL::base_path('/public/templates/front/')}}themes/js/cAlert.js"></script>
  <script src="{{# URL::base_path('/public/templates/front/')}}themes/js/mlpushmenu.js"></script>
  <script src="{{# URL::base_path('/public/templates/front/')}}themes/js/modernizr-custom.js"></script>
  <script src="{{# URL::base_path('/public/templates/front/')}}themes/js/classie.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lightslider.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.bpopup.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.lazyload.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/functions.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/script.js"></script>
  <script type="text/javascript">
  $(function() {
    $("img.lazy").lazyload({
      effect: "fadeIn"
    });
  });
  $(document).ready(function() {
    $('#slider_video_home li:not(:first)').each(function() {
      var ifa = $(this).attr('data-iframe');
      var thum = Youtube.thumb(ifa);
      $(this).children().attr('src', thum);
    });
    $('#slider_video_home li:first-child').each(function() {
      var ifa = $(this).attr('data-iframe');
      var videoid = ifa.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);

      var replacement = '<iframe src="https://www.youtube.com/embed/' + videoid[1] + '" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';
      $(this).html(replacement);
    });
    $('.more_pro').on('click', function() {
      var thebtn = $(this);
      var type = $(this).attr('data-type');
      var execute = $(this).attr('data-execute');
      if (type == "phone") {
        var total = $('.pro_con').length;
      } else if (type == 'fittings') {
        var total = $('.phukien_con').length;
      } else if (type == 'fix_phone') {
        var total = $('.ser_con').length;
      }
      var data = {
        name: 'load_more',
        type: type,
        total: total,
        execute: execute
      };
      loadAjax(
        data,
        'json', {
          beforeSend: function() {
            $('.' + type).css('display', 'block');
          },
          success: function(html) {
            $('.' + type).css('display', 'none');
            if (html.key == 1) {
              if (type == 'phone') {
                $('.product').append(html.html);
                box_auto_height('.pro_con');
                box_auto_height('.name_pro');
                if (html.count < 15) {
                  thebtn.remove();
                }
              } else if (type == 'fittings') {
                $('.phukien').append(html.html);
                box_auto_height('.phukien_con');
                box_auto_height('.name_pk');
                if (html.count < 16) {
                  thebtn.remove();
                }

              } else if (type == 'fix_phone') {
                $('.ser').append(html.html);
                box_auto_height('.ser_con');
                box_auto_height('.nam_ser');
                if (html.count < 15) {
                  thebtn.remove();
                }
              }
            } else {
              if (type == 'phone') {
                var myAlert = new cAlert('Điện thoại di động nổi bật trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              } else if (type == 'fittings') {
                var myAlert = new cAlert('Phụ kiện nổi bật cho điện thoại di động trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              } else if (type == 'fix_phone') {
                var myAlert = new cAlert('Dịch vụ nổi bật trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              }
            }
          }
        }
      );
    });
  });
  go_link_on_select("#go_phone_made");
  go_link_on_select("#order_phone");
  </script>
</body>
<!-- Mirrored from mobilecity.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2017 02:27:29 GMT -->

</html>
