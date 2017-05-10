<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="{{# isset($configs['shortcut-icon']) ? $configs['shortcut-icon'] : null}}" type="image/x-icon" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="Index,Follow" />
  <title>{{# isset($seo['title'])?$seo['title']:'---'}}{{# isset($configs['suffix-title']) ? $configs['suffix-title'] : null}}</title>
  <meta content="{{# isset($seo['description'])?$seo['description']:'---'}}" name="description" />
  <meta content="{{# isset($seo['keywords'])?$seo['keywords']:'---'}}" name="keywords" />
  <link rel="canonical" href="{{# URL::thisUrl()}}" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/main.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/products.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/lightslider.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/lightgallery.min.css" />
  <link rel="stylesheet" type="text/css" href="{{# URL::base_path('/public/templates/front/')}}themes/css/responsive.css" />
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
          <form method="GET" action="{{# URL::base_url('/tim-kiem.html')}}">
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
                <p>Hotline <span class="chucam">{{# isset($configs['hotline']) ? $configs['hotline'] : null}}</span></p>
              </div>
              <div class="top_web_right clearfix">
                <p>
                  <a style="font-weight: bold;" href="#">Tuyển dụng</a>&nbsp;|&nbsp;
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
                <p>© 2016. TaoDoc hệ thống bán lẻ điện thoại di động.</p>
              </div>
              <div class="footer_bottom_center clearfix">
                <p>Bạn có thể thanh toán với</p>
                <div class="all_icon icon_bank"></div>
              </div>
              <div class="footer_bottom_right clearfix">
                <p>Tư vấn và phát triển bởi: <a href="#" target="_blank" rel="nofollow">SUDO</a></p>
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
                  <div class="popup-form-wrap-title">Tài khoản TaoDoc</div>
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
                  <a class="popup-social-fb" href="/login-with-facebook/"><span class="iconsd"><i class="fa fa-facebook"></i></span><span class="text">Đăng nhập qua Facebook</span></a>
                  <a class="popup-social-gg" href="/login-with-google/"><span class="iconsd"><i class="fa fa-google"></i></span><span class="text">Đăng nhập qua Google</span></a>
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
                  <div class="popup-form-wrap-title">Đăng ký tài khoản với TaoDoc</div>
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
                  <a class="popup-social-fb" href="/login-with-facebook/"><span class="iconsd"><i class="fa fa-facebook"></i></span><span class="text">Đăng ký qua Facebook</span></a>
                  <a class="popup-social-gg" href="/login-with-google/"><span class="iconsd"><i class="fa fa-google"></i></span><span class="text">Đăng ký qua Google</span></a>
                </div>
                <div class="clear"></div>
                <div class="popup-footer">
                  <p>Đã có tài khoản? <a href="javascript:;" onclick="popupLogin();">Đăng nhập tại đây</a></p>
                </div>
              </div>
            </div>
          </div>
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
            background-image: url('{{# URL::base_path('/public/templates/front/')}}themes/img/all_icon.png');
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
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lightgallery.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-thumbnail.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-fullscreen.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-autoplay.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-hash.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-pager.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-share.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-video.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lg-zoom.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.stickyelement.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.bpopup.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/lightslider.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/jquery.lazyload.min.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/functions.js"></script>
  <script type="text/javascript" src="{{# URL::base_path('/public/templates/front/')}}themes/js/script.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $(function() {
      $("img.lazy").lazyload({
        effect: "fadeIn"
      });
    });
    $('#timhieu i').hover(function(e) {
        $(this).append("<div id='text_hover'><span class='tip'></span>Tìm hiểu thêm về bảo hành vàng.<div>");
      },
      function(e) {
        $('#text_hover').remove();
      });
    $('#slider_video li:not(:first)').each(function() {
      var ifa = $(this).attr('data-iframe');
      var thum = Youtube.thumb(ifa);
      $(this).children().attr('src', thum);
    });
    $('#slider_video li:first-child').each(function() {
      var ifa = $(this).attr('data-iframe');
      var videoid = ifa.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);

      var replacement = '<iframe src="https://www.youtube.com/embed/' + videoid[1] + '" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';
      $(this).html(replacement);
    });
    //click nút xem thông số kt
    $('.btn_more').on('click', function() {
      $('body').css('overflow', 'hidden');
      $('.detail_pro_more').bPopup({
        closeClass: 'close_popup',
        contentContainer: '.detail_pro_more',
        loadUrl: '/specifications.htm?id=437',
        zIndex: 99999,
        onClose: function() {
          $('body').removeAttr('style');
        }
      });
    });
  });
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.btn-order-phone').on('click', function() {
      $('#popup-order-product').bPopup({
        speed: 450,
        transition: 'slideDown',
        zIndex: 99999
      });
    });
    $('.popup-order-btn').click(function() {
      var btnOrder = $(this);
      var proId = btnOrder.attr('data-id');
      var proLink = '{{# URL::thisUrl()}}';
      var proName = $('.popup-product-name').html();
      var proColor = $('.popup-product-color-item.active').attr('data-name');
      if (typeof proColor == 'undefined') {
        proColor = 'Không chọn';
      }
      var proStorage = $('.popup-product-storage-select').val();
      var proWarranty = $('.popup-product-warranty-select option:selected').text();
      var proInfo = '' + proName + ' - Màu: ' + proColor + ' - DL: ' + proStorage + ' - BH: ' + proWarranty + '';
      var proPrice = $('.popup-product-price').attr('data-realprice');

      var cusGender = $('.customer-gender').val();
      var cusName = $('.customer-name').val();
      var cusPhone = $('.customer-phone').val();
      var cusEmail = $('.customer-email').val();
      var cusAddress = $('.customer-address').val();
      var cusNote = $('.order-note').val();
      if (cusName == '' || cusPhone == '' || cusEmail == '') {
        alert('Vui lòng nhập đầy đủ thông tin bắt buộc !');
        return false;
      } else if (!isemail(cusEmail)) {
        alert('Vui lòng nhập một email hợp lệ!');
        return false;
      } else {
        var data = {
          name: 'orderphone',
          id: proId,
          link: proLink,
          info: proInfo,
          price: proPrice,
          gender: cusGender,
          cname: cusName,
          phone: cusPhone,
          email: cusEmail,
          address: cusAddress,
          note: cusNote
        };
        loadAjax(
          data,
          'json', {
            beforeSend: function() {
              $('.popup-customer-info').append('<img class="loading" src="{{# URL::base_path('/public/templates/front/')}}themes/img/loading.gif"/>');
              btnOrder.prop('disabled', true);
            },
            success: function(res) {
              if (res.status == 1) {
                $('.popup-customer-info').html('<div class="popup-message success">Chúc mừng quý khách đã đặt hàng thành công! Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất. Xin cảm ơn!<div>');
              } else {
                alert(res.message);
                btnOrder.prop('disabled', false);
                $('.loading').remove();
              }
            }
          }
        )
      }
    });
  });
  </script>
</body>

</html>
