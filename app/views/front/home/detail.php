{{{include front/layout/breadcrumb.layout}}}
<section class="clearfix">
  <section class="clearfix content_top">
    <div class="title_pro clearfix">
      <h1>{{# isset($infoProduct['name']) ? $infoProduct['name'] : "---"}}</h1>
      <div class="title_pk_sing clearfix">
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <p>(0 Đánh giá)</p>
      </div>
    </div>
    <section class="clearfix left_content_top">
      <div class="slider_pro clearfix">
        <ul id="slider_pro">
        {{if(isset($infoProduct['avatar'])):}}
          {{foreach($infoProduct['avatar'] as $avatar):}}
          <li data-thumb="{{# URL::base_path('/public/uploads/')}}{{# $avatar}}" data-sub-html="{{# isset($infoProduct['name']) ? $infoProduct['name'] : "---"}}" data-src="{{# URL::base_path('/public/uploads/')}}{{# $avatar}}">
            <img src="{{# URL::base_path('/public/uploads/')}}{{# $avatar}}" alt="{{# isset($infoProduct['name']) ? $infoProduct['name'] : null}}" />
          </li>
          {{endforeach}}
        {{endif}}
        </ul>
      </div>
      <div class="thongtin_pro clearfix">
        <div class="top_thongtin_pro clearfix">
          <p class="price" data-price="{{# isset($infoProduct['price']) ? $infoProduct['price']: 0 }}">{{# isset($infoProduct['price']) ? number_format($infoProduct['price']) . ' ₫' : 'Liên hệ' }}</p>
          <div class="center_top_thong clearfix">
          {{if(isset($infoProduct['color'])):}}
            <p>Màu sắc</p>
            {{foreach($infoProduct['color'] as $color => $price):}}
            <div data-color="{{# $color}}" style="background-color:{{# $color}};" data-price="{{# $price}}" class="colo clearfix"></div>
            {{endforeach}}
          {{endif}}
            
          </div>
          <p class="pro_instock_status"><i class="fa fa-check-square-o"></i>{{# isset($infoProduct['status']) && $infoProduct['status'] == 1 ? 'Còn hàng' : 'Hết hàng' }}</p>
        </div>
        <div class="bottom_thong clearfix">
          {{if(isset($infoProduct['storage'])):}}
          <div class="clearfix bonho">Bộ nhớ
            <select id="dungluong">
            {{foreach($infoProduct['storage'] as $storage => $price):}}
              <option value="{{# $price}}">{{# $storage}}GB</option>
            {{endforeach}}
            </select>
          </div>
          {{endif}}

          <div class="baohanh">Bảo hành
            <select id="baohanh">
              <option value="{{# isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 }}">Bảo hành {{# isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 }} tháng</option>
            </select>
          </div>
        </div>
        <div class="box_sale clearfix">
          <p class="title_box_sale">5 khuyến mãi</p>
          <ul>
          {{if(isset($infoProduct['counpons'])):}}
            {{foreach($infoProduct['counpons'] as $counpon):}}
              <li class="clearfix">{{# $counpon}}</li>
            {{endforeach}}
          {{endif}}
          </ul>
        </div>
        <ul class="bust clearfix">
          <li class="clearfix">Trong hộp có: {{# isset($infoProduct['inbox']) ? $infoProduct['inbox']: '' }}</li>
          <li>Giao hàng {{# isset($infoProduct['delivery']) ? $infoProduct['delivery']: '' }} <a target="_blank" href="#">Tìm hiểu thêm</a></li>
        </ul>
        <div class="clearfix">
          <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
            <p>Mua ngay
              <br/><span>Giao hàng tận nơi miễn phí</span></p>
          </a>
          <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 clearfix">
            <p>MUA TRẢ GÓP
              <br/> <span>Lãi suất thấp</span></p>
          </a>
        </div>
        <div class="all_icon icon_phone clearfix"></div>
        <p class="hlmua mobile_none clearfix">Đặt mua: <span class="chudam">0969.120.120</span> (HN) - <span class="chudam">0965.123.123</span> (HCM): 7:00 - 22:00</p>
        <p class="hlmua_mobile mobile_block clearfix">Đặt mua Hà Nội: <a href="tel:0969120120" class="chudam">0969.120.120</a>
          <br />Hồ Chí Minh: <a href="tel:0965123123" class="chudam">0965.123.123</a></p>
      </div>
    </section>
    <aside class="right_content_top clearfix">
      <div class="pk_con clearfix">
        <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-4-4s-424.html">
          <div class="img_pk_con clearfix"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-dan-cuong-luc-iphone-4-4s.jpg" alt="Dán cường lực iPhone 4, 4s" /></div>
        </a>
        <div class="title_pk_con clearfix">
          <p><a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-4-4s-424.html">Dán cường lực iPhone 4, 4s</a></p>
          <p class="gia_pk_sing clearfix">120.000 ₫</p>
          <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-4-4s-424.html" class="btn_mua_pk clearfix">mua</a>
        </div>
      </div>
      <div class="pk_con clearfix">
        <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-5-5s-425.html">
          <div class="img_pk_con clearfix"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-dan-cuong-luc-iphone-5-s.jpg" alt="Dán cường lực iPhone 5, 5s" /></div>
        </a>
        <div class="title_pk_con clearfix">
          <p><a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-5-5s-425.html">Dán cường lực iPhone 5, 5s</a></p>
          <p class="gia_pk_sing clearfix">120.000 ₫</p>
          <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-5-5s-425.html" class="btn_mua_pk clearfix">mua</a>
        </div>
      </div>
      <div class="pk_con clearfix">
        <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-6-6-plus-426.html">
          <div class="img_pk_con clearfix"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-dan-cuong-luc-iphone-6-6-Plus.jpg" alt="Dán cường lực iPhone 6,  6 Plus" /></div>
        </a>
        <div class="title_pk_con clearfix">
          <p><a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-6-6-plus-426.html">Dán cường lực iPhone 6,  6 Plus</a></p>
          <p class="gia_pk_sing clearfix">120.000 ₫</p>
          <a href="http://mobilecity.vn/phu-kien/tam-dan-cuong-luc-iphone-6-6-plus-426.html" class="btn_mua_pk clearfix">mua</a>
        </div>
      </div>
    </aside>
  </section>
  <section class="clearfix content_main">
    <section class="content_main_top clearfix">
      <div class="detail_pro_left detail_pro_left_phone clearfix">
        <div class="title_main_content clearfix">
          <p>Thông số kỹ thuật</p>
        </div>
        <div class="clearfix text_tt"><span>Màn hình:</span>
          <p>HD, 4", 640 x 1136 pixels, mật độ điểm ảnh ~320 ppi</p>
        </div>
        <div class="clearfix text_tt"><span>Hệ điều hành:</span>
          <p>iOS 7</p>
        </div>
        <div class="clearfix text_tt"><span>Camera sau:</span>
          <p>8 MP, 1080p-30fps</p>
        </div>
        <div class="clearfix text_tt"><span>Camera trước:</span>
          <p>1.2 MP</p>
        </div>
        <div class="clearfix text_tt"><span>CPU:</span>
          <p>Apple A6, 2 nhân, 1.3 GHz</p>
        </div>
        <div class="clearfix text_tt"><span>RAM:</span>
          <p>1 GB</p>
        </div>
        <div class="clearfix text_tt"><span>Bộ nhớ trong:</span>
          <p>8GB-16GB-32GB</p>
        </div>
        <div class="clearfix text_tt"><span>Thẻ SIM:</span>
          <p>1 SIM, Nano SIM</p>
        </div>
        <div class="clearfix text_tt"><span>Dung lượng pin:</span>
          <p>1510 mAh</p>
        </div>
        <div class="clearfix text_tt"><span>Thiết kế:</span>
          <p>Cảm ứng</p>
        </div>
        <div class="detail_pro_more css-content clearfix"></div>
        <p style="clear: both;"></p>
        <div class="btn_more clearfix">
          <p>Xem thêm cấu hình chi tiết</p>
        </div>
      </div>
      <div class="detail_pro_right clearfix">
        <div class="clearfix title_main_content">
          <p>Video iPhone 5C Cũ - Fullbox</p>
        </div>
        <ul id="slider_video">
          <li id="video" data-iframe="https://www.youtube.com/watch?v=isF8YHZNhZc">
            <iframe src="https://www.youtube.com/embed/$1?autoplay=1" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
          </li>
          <li data-iframe="https://www.youtube.com/watch?v=isF8YHZNhZc">
            <img src="http://img.youtube.com/vi/isF8YHZNhZc/mqdefault.jpg" />
          </li>
          <li data-iframe="https://www.youtube.com/watch?v=1xdLPFtR7nI">
            <img src="http://img.youtube.com/vi/1xdLPFtR7nI/mqdefault.jpg" />
          </li>
          <li data-iframe="https://www.youtube.com/watch?v=ieJEXpWSaEk">
            <img src="http://img.youtube.com/vi/ieJEXpWSaEk/mqdefault.jpg" />
          </li>
        </ul>
      </div>
      <aside class="pro_cungloai clearfix">
        <div class="clearfix title_main_content">
          <p>Sản phẩm cùng phân khúc</p>
        </div>
        <div class="pro_cungloai_con clearfix">
          <div class="img_cungloai clearfix">
            <a href="http://mobilecity.vn/apple/bo-sac-cap-iphone-7-chinh-hang-apple-boc-may.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/04/small-bo-sac-cap-iphone-7-chinh-hang-apple.jpg" alt="Bộ sạc cáp iPhone 7 chính hãng Apple (bóc máy)" /></a>
          </div>
          <div class="detail_cungloai clearfix">
            <p><a href="http://mobilecity.vn/apple/bo-sac-cap-iphone-7-chinh-hang-apple-boc-may.html">Bộ sạc cáp iPhone 7 chính hãng Apple (bóc máy)</a></p>
            <p>290.000 ₫</p>
            <p>Màn hình 5</p>
            <p>Camera sau </p>
            <p>Pin </p>
          </div>
        </div>
        <div class="pro_cungloai_con clearfix">
          <div class="img_cungloai clearfix">
            <a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/04/small-iphone-7-plus-do-red.jpg" alt="iPhone 7 Plus đỏ (PRODUCT) RED" /></a>
          </div>
          <div class="detail_cungloai clearfix">
            <p><a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html">iPhone 7 Plus đỏ (PRODUCT) RED</a></p>
            <p>22.100.000 ₫</p>
            <p>Màn hình 5.5</p>
            <p>Camera sau Dual 12 MP</p>
            <p>Pin 2900 mAh</p>
          </div>
        </div>
        <div class="pro_cungloai_con clearfix">
          <div class="img_cungloai clearfix">
            <a href="http://mobilecity.vn/apple/iphone-6s-32gb-chua-active.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-iPhone-6s-Gray-cu-xach-tay-quoc-te-gia-re-nhat-MobileCity-7.jpg" alt="iPhone 6S - 32GB Chưa Active" /></a>
          </div>
          <div class="detail_cungloai clearfix">
            <p><a href="http://mobilecity.vn/apple/iphone-6s-32gb-chua-active.html">iPhone 6S - 32GB Chưa Active</a></p>
            <p>Liên hệ</p>
            <p>Màn hình 4.7</p>
            <p>Camera sau 12 MP</p>
            <p>Pin 1715 mAh</p>
          </div>
        </div>
      </aside>
    </section>
    <section id="box_detail" class="clearfix">
      <section class="left_pro">
        <div class="title_main_content">
          <h2 class="title_sp">Thông tin chi tiết iPhone 5C Cũ - Fullbox</h2></div>
        <section id="content" class="clearfix css_content detail_pk">
          <div class="box">
            ##detail
          </div>
        </section>
        <div class="btn_show clearfix">
          <p><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Xem thêm chi tiết bài viết<i class="fa fa-long-arrow-down" aria-hidden="true"></i></p>
        </div>
        <section class="plus_pro clearfix">
          <div class="thongtin_plus clearfix">
            <div class="anh_thongtin_plus clearfix">
              <img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-iPhone-5C-cu-gia-re-nhat-Ha-Noi-TP-HCM-MobileCity-001.jpg" alt="iPhone 5C Cũ - Fullbox" />
            </div>
            <p>iPhone 5C Cũ - Fullbox</p>
            <p class="price_plus">Liên hệ</p>
          </div>
          <div class="clearfix btn_plus">
            <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
              <p>Mua ngay
                <br/><span>Giao hàng tận nơi miễn phí</span></p>
            </a>
            <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 clearfix">
              <p>MUA TRẢ GÓP
                <br/> <span>Lãi suất thấp</span></p>
            </a>
          </div>
        </section>
        <!-- all box coment website -->
        <div class="coment_web clearfix">
          <aside class="clearfix">
            <h4 class="clearfix" style="font-size: 20px;color: #424242;margin: 5px 0 20px 0;float: left;font-weight: normal;max-width: 658px;display: block;">Đánh giá về iPhone 5C Cũ - Fullbox</h4>
            <p class="btn_coment clearfix"><i class="fa fa-comment-o" aria-hidden="true"></i>Gửi đánh giá của bạn</p>
            <p class="end clearfix"><i class="fa fa-times" aria-hidden="true"></i>Hủy</p>
            <p style="clear: both;"></p>
            <link rel="stylesheet" type="text/css" href="http://mobilecity.vn/themes/css/simplePagination.css" />
            <link rel="stylesheet" type="text/css" href="http://mobilecity.vn/classes/coment/css/comment.css" />
            <script src="http://mobilecity.vn/themes/js/jquery.simplePagination.js"></script>
            <div class="box_rank clearfix">
              <div class="clearfix">
                <p>Đánh giá của bạn</p>
                <div class="clearfix">
                  <i class="fa fa-star-o start" aria-hidden="true"></i>
                  <i class="fa fa-star-o start" aria-hidden="true"></i>
                  <i class="fa fa-star-o start" aria-hidden="true"></i>
                  <i class="fa fa-star-o start" aria-hidden="true"></i>
                  <i class="fa fa-star-o start" aria-hidden="true"></i>
                </div>
              </div>
              <div class="box_text clearfix">
                <textarea name="" class="" id="detail_hoi" placeholder="Nhập nội dung . . ."></textarea>
              </div>
              <div class="input clearfix">
                <input type="text" placeholder="Nhập họ tên . . ." name="" value="" id="name_hoi" />
                <input type="text" name="" placeholder="Nhập Email . . ." id="email_hoi" value="" />
              </div>
              <div class="input clearfix">
                <button data-id="437" data-table="phone" id="send_hoi">Gửi đánh giá</button>
              </div>
            </div>
            <div id="box_coment">
            </div>
            <div class="note_script"></div>
            <script type="text/javascript">
            $(document).ready(function() {
              //click 1 lan +1 click 2 lan -1 nut like coment
              $(document).on('click', '.like-icon', function() {
                var val = $(this).attr('data-val');
                var test = $(this).find('.value_like');
                var string = {
                  name: 'like',
                  val: val
                };
                loadAjax(
                  string,
                  'json', {
                    success: function(html) {
                      test.html(html.like);
                    }
                  });
              });
              //ajax send du lieu coment hoi
              $('#send_hoi').on('click', function() {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var noidung = $('#detail_hoi').val();
                var name_coment = $('#name_hoi').val();
                var email = $('#email_hoi').val();
                var id_post = $(this).attr('data-id');
                var table = $(this).attr('data-table');
                var star = $('.box_rank').find('.fa-star').length;
                var currentdate = new Date();
                var data_time = 1493957584;
                var conv = encodeURIComponent(noidung);
                if (noidung == '') {
                  var myAlert = new cAlert("Nội dung comment không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $("#detail_hoi").focus();
                  return false;
                } else if (email == '') {
                  var myAlert = new cAlert("Email không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $("#email_hoi").focus();
                  return false;
                } else if (!emailReg.test(email)) {
                  var myAlert = new cAlert("Email không hợp lệ !", "danger", "blocked", 5);
                  myAlert.alert();
                  $("#email_hoi").focus();
                  return false;
                } else if (name_coment == '') {
                  var myAlert = new cAlert("Họ tên không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $("#name_hoi").focus();
                  return false;
                } else if (star == 0) {
                  var myAlert = new cAlert("Bạn chưa đánh giá sao cho sản phẩm !", "danger", "blocked", 5);
                  myAlert.alert();
                  $("#name_hoi").focus();
                  return false;
                } else {
                  $('#name_hoi').val("");
                  $('#email_hoi').val("");
                  $('#detail_hoi').val("");
                  $('.end').trigger('click');
                  var string = {
                    name: 'comment',
                    coment: conv,
                    ten: name_coment,
                    email: email,
                    id_bai: id_post,
                    table: table,
                    time: data_time,
                    start: star
                  };
                  loadAjax(
                    string,
                    'json', {
                      beforeSend: function() {
                        var myAlert = new cAlert("Xin chờ . . .", "warning", "blocked", 3);
                        myAlert.alert();
                      },
                      success: function(res) {
                        if (res.status == 1) {
                          $("#box_coment").html(res.html);
                          var myAlert = new cAlert("Thông Báo ! Cảm ơn bạn đã quan tâm đến sản phẩm của chúng tôi, đánh giá của bạn sẽ được trong thời gian sớm nhất ! Xin cảm ơn.", "success", "blocked", 5);
                          myAlert.alert();
                        } else {
                          var myAlert = new cAlert("Thông Báo ! Hệ thống nhận thấy bạn comment quá nhanh vì vậy bạn hãy nghỉ ngơi chút xíu sau đó hay comment tiếp ! Xin cảm ơn.", "danger", "blocked", 5);
                          myAlert.alert();
                          return false
                        }
                      }
                    });
                }
              });
              // ajax send tra loi
              $(document).on('click', '.btn_rep', function() {
                var id_coment = $(this).attr('data-id-coment');
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var noidung = $('.detail_rep_' + id_coment).val();
                var name_coment = $('.name_rep_' + id_coment).val();
                var email = $('.email_rep_' + id_coment).val();
                var id_post = $(this).attr('data-id');
                var table = $(this).attr('data-table');
                var currentdate = new Date();
                var data_time = 1493957584;
                var conv = encodeURIComponent(noidung);
                if (noidung == '') {
                  var myAlert = new cAlert("Nội dung comment không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $('.detail_rep_' + id_coment).focus();
                  return false;
                } else if (email == '') {
                  var myAlert = new cAlert("Email không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $(".email_rep_" + id_coment).focus();
                  return false;
                } else if (!emailReg.test(email)) {
                  var myAlert = new cAlert("Email không hợp lệ !", "danger", "blocked", 5);
                  myAlert.alert();
                  $(".email_rep_" + id_coment).focus();
                  return false;
                } else if (name_coment == '') {
                  var myAlert = new cAlert("Họ tên không được để trống !", "danger", "blocked", 5);
                  myAlert.alert();
                  $('.name_rep_' + id_coment).focus();
                  return false;
                } else {
                  $('.name_rep_' + id_coment).val("");
                  $('.email_rep_' + id_coment).val("");
                  $('.detail_rep_' + id_coment).val("");
                  $('.start').removeClass('fa-star');
                  $('.start').addClass('fa-star-o');
                  $('.close_rep_rank').trigger('click');
                  var string = {
                    name: 'comment',
                    coment: conv,
                    ten: name_coment,
                    email: email,
                    id_bai: id_post,
                    table: table,
                    time: data_time,
                    id_coment: id_coment
                  };
                  loadAjax(
                    string,
                    'json', {
                      beforeSend: function() {
                        var myAlert = new cAlert("Xin chờ . . .", "warning", "blocked", 3);
                        myAlert.alert();
                      },
                      success: function(data) {
                        if (data.status == 1) {
                          $("#box_coment").html(data.html);
                          var myAlert = new cAlert("Thông Báo ! Bạn đã trả lời thành công ! Xin cảm ơn.", "success", "blocked", 5);
                          myAlert.alert();
                          return false;
                        } else if (data.status == 2) {
                          var myAlert = new cAlert("Thông Báo ! Hệ thống cảm ơn bạn đã nhiệt tình trả lời nhưng đành xin lỗi bạn vì để tránh quá tải nên mong bạn hãy nghỉ nghơi ít phút trước khi trả lời tiếp ! Xin cảm ơn.", "danger", "blocked", 5);
                          myAlert.alert();
                          return false;
                        }
                      }
                    });
                }
              });
            });
            </script>
          </aside>
          <div class="social_normal">
            <ul>
              <li>
                <div class="fb-like" data-href="http://mobilecity.vn/apple/iphone-5c-cu-prd1064.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
              </li>
              <li><a href="javascript:;" id="vibershare">Viber</a></li>
              <li>
                <div class="g-plusone" data-size="medium" data-href="http://mobilecity.vn/apple/iphone-5c-cu-prd1064.html"></div>
              </li>
            </ul>
          </div>
          <script>
          var buttonID = "vibershare";
          var text = "MobileCity: ";
          document.getElementById(buttonID).setAttribute("href", "viber://forward?text=" + encodeURIComponent(text + " " + window.location.href));
          </script>
          <style>
          .social_normal {
            width: 100%;
            margin: 15px 0px 5px 0px;
            padding: 10px 0px;
            border-top: 1px solid #e1e1e1;
            border-bottom: 1px solid #e1e1e1;
          }
          
          .social_normal ul:after {
            display: block;
            content: " ";
            clear: both;
          }
          
          .social_normal li {
            display: inline-block;
            float: left;
            margin-right: 5px;
          }
          
          #vibershare {
            display: block;
            height: 20px;
            line-height: 20px;
            padding: 0px 5px;
            border-radius: 2px;
            font-size: 11px;
            font-weight: bold;
            color: #fff;
            background-color: #7b519d;
          }
          </style>
          <div class="fb-comments" data-href="http://mobilecity.vn/apple/iphone-5c-cu-prd1064.html" data-width="100%" data-numposts="5" data-order-by="reverse_time"></div>
        </div>
        <div class="cungpk_mobile mobile_block">
          <p style="font-size: 16px; font-weight: bold; padding: 10px 0px 5px 0px;">Sản phẩm cùng phân khúc</p>
          <div class="cungpk_mobile_item pro_cungloai_con clearfix">
            <div class="img_cungloai clearfix">
              <a href="http://mobilecity.vn/apple/bo-sac-cap-iphone-7-chinh-hang-apple-boc-may.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/04/small-bo-sac-cap-iphone-7-chinh-hang-apple.jpg" alt="Bộ sạc cáp iPhone 7 chính hãng Apple (bóc máy)" /></a>
            </div>
            <div class="detail_cungloai clearfix" style="float: left;">
              <p><a href="http://mobilecity.vn/apple/bo-sac-cap-iphone-7-chinh-hang-apple-boc-may.html">Bộ sạc cáp iPhone 7 chính hãng Apple (bóc máy)</a></p>
              <p>290.000 ₫</p>
              <p>Màn hình 5</p>
              <p>Camera sau </p>
              <p>Pin </p>
            </div>
          </div>
          <div class="cungpk_mobile_item pro_cungloai_con clearfix">
            <div class="img_cungloai clearfix">
              <a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/04/small-iphone-7-plus-do-red.jpg" alt="iPhone 7 Plus đỏ (PRODUCT) RED" /></a>
            </div>
            <div class="detail_cungloai clearfix" style="float: left;">
              <p><a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html">iPhone 7 Plus đỏ (PRODUCT) RED</a></p>
              <p>22.100.000 ₫</p>
              <p>Màn hình 5.5</p>
              <p>Camera sau Dual 12 MP</p>
              <p>Pin 2900 mAh</p>
            </div>
          </div>
        </div>
      </section>
      <section class="right_pro clearfix">
        <aside class="tomtat_pro clearfix">
          <p>iPhone 5C Cũ - Fullbox</p>
          <p class="price_left">Liên hệ</p>
          <div class="box_sale clearfix">
            <p class="title_box_sale">5 khuyến mãi</p>
            <ul>
              <li class="clearfix">Trợ giá PDP chính hãng Xiaomi 10000 mAh chỉ còn 350.000 đ</li>
              <li class="clearfix">Trợ giá Tai nghe Bluetooth chính hãng Jellico chỉ từ 100.000 đ</li>
              <li class="clearfix">Hỗ trợ cài đặt, nâng cấp phần mềm miễn phí trọn đời</li>
              <li class="clearfix">Tặng Dán màn hình chống xước 3 lớp cao cấp</li>
              <li class="clearfix">Tặng phiếu giảm giá mua máy & sửa chữa trị giá 50.000 đ</li>
          </div>
          <div class="clearfix">
            <a href="javascript:;" class="btn-order-phone btn_pro_mua right_mua btn1 clearfix">
              <p>Mua ngay
                <br/><span>Giao hàng tận nơi miễn phí</span></p>
            </a>
            <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 right_mua clearfix">
              <p>MUA TRẢ GÓP
                <br/> <span>Lãi suất thấp</span></p>
            </a>
          </div>
          <div class="icon icon_phone clearfix"></div>
          <p class="clearfix"><span class="chudam">0969.120.120</span> (HN) <span class="chudam">0965.123.123</span> (HCM)</p>
        </aside>
      </section>
    </section>
  </section>
</section>
