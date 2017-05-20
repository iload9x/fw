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
          {{if(!empty($infoProduct['storage'])):}}
          <div class="clearfix bonho">Bộ nhớ 
            <select id="dungluong">
            {{foreach($infoProduct['storage'] as $storage => $price):}}
              <option value="{{# number_format($price)}} ₫">{{# $storage}}GB</option>
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
        {{if(isset($infoProduct['counpons']) && !empty($infoProduct['counpons'][0]) ):}}
        <div class="box_sale clearfix">
          <p class="title_box_sale">Khuyến mãi</p>
          <ul>
            {{foreach($infoProduct['counpons'] as $counpon):}}
              {{if(!empty($counpon)):}}
                <li class="clearfix">{{# $counpon}}</li>
              {{endif}}
            {{endforeach}}
          </ul>
        </div>
        {{endif}}

        <ul class="bust clearfix">
          <li class="clearfix">Trong hộp có: {{# isset($infoProduct['inbox']) ? $infoProduct['inbox']: '' }}</li>
          <li>Giao hàng {{# isset($infoProduct['delivery']) ? $infoProduct['delivery']: '' }} <a target="_blank" href="#">Tìm hiểu thêm</a></li>
        </ul>
        <div class="clearfix">
        {{if(isset($infoProduct['status']) && $infoProduct['status'] == 1):}}
          <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
            <p>Mua ngay
              <br/><span>Giao hàng tận nơi miễn phí</span></p>
          </a>
        {{endif}}
        {{if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):}}
          <a href="#" class="btn_pro_mua btn2 clearfix">
            <p>MUA TRẢ GÓP
              <br/> <span>Lãi suất thấp</span></p>
          </a>
        {{endif}}
        </div>
        <div class="all_icon icon_phone clearfix"></div>
        <p class="hlmua mobile_none clearfix">Đặt mua: <span class="chudam">{{# isset($configs['hotline']) ? $configs['hotline'] : 'N/A'}}</span> (HN) : 7:00 - 22:00</p>
        <p class="hlmua_mobile mobile_block clearfix">Đặt mua Hà Nội: <a href="#" class="chudam">{{# isset($configs['hotline']) ? $configs['hotline'] : 'N/A'}}</a>
      </div>
    </section>
    {{if(isset($random_phukien)):}}
    <aside class="right_content_top clearfix">
      {{foreach($random_phukien as $phukien):}}
      <div class="pk_con clearfix">
        <a href="{{# URL::base_url()}}/{{# $phukien['categorySlug']}}/{{# $phukien['companySlug']}}/{{# isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null }}-prd{{# $phukien['id']}}.html">
          <div class="img_pk_con clearfix"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="{{# URL::base_url('/public/uploads/')}}{{# isset($phukien['avatar'][0]) ? $phukien['avatar'][0] : null }}" alt="{{# isset($phukien['name']) ? $phukien['name'] : null }}" /></div>
        </a>
        <div class="title_pk_con clearfix">
          <p><a href="{{# URL::base_url()}}/{{# $phukien['categorySlug']}}/{{# $phukien['companySlug']}}/{{# isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null }}-prd{{# $phukien['id']}}.html">{{# isset($phukien['name']) ? $phukien['name'] : 0 }}</a></p>
          <p class="gia_pk_sing clearfix">{{# isset($phukien['price']) ? number_format($phukien['price']) : 0 }} ₫</p>
          <a href="{{# URL::base_url()}}/{{# $phukien['categorySlug']}}/{{# $phukien['companySlug']}}/{{# isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null }}-prd{{# $phukien['id']}}.html" class="btn_mua_pk clearfix">mua</a>
        </div>
      </div>
      {{endforeach}}
    </aside>
    {{endif}}
  </section>
  <section class="clearfix content_main">
  {{if(isset($infoProduct['specs']) || !empty($infoProduct['videoLinks'][0])):}}
    <section class="content_main_top clearfix">
      {{if(isset($infoProduct['specs']) && is_array($infoProduct['specs'])):}}
      <div class="detail_pro_left detail_pro_left_phone clearfix">
        <div class="title_main_content clearfix">
          <p>Thông số kỹ thuật</p>
        </div>
        <div class="clearfix text_tt"><span>Màn hình:</span>
          <p>{{# isset($infoProduct['specs']['display']) ? $infoProduct['specs']['display'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Hệ điều hành:</span>
          <p>{{# isset($infoProduct['specs']['operatingSystem']) ? $infoProduct['specs']['operatingSystem'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Camera sau:</span>
          <p>{{# isset($infoProduct['specs']['rear_camera']) ? $infoProduct['specs']['rear_camera'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Camera trước:</span>
          <p>{{# isset($infoProduct['specs']['front_camera']) ? $infoProduct['specs']['front_camera'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>CPU:</span>
          <p>{{# isset($infoProduct['specs']['processor']) ? $infoProduct['specs']['processor'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>RAM:</span>
          <p>{{# isset($infoProduct['specs']['RAM']) ? $infoProduct['specs']['RAM'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Bộ nhớ trong:</span>
          <p>{{# isset($infoProduct['specs']['storage']) ? $infoProduct['specs']['storage'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Thẻ SIM:</span>
          <p>{{# isset($infoProduct['specs']['sim']) ? $infoProduct['specs']['sim'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Dung lượng pin:</span>
          <p>{{# isset($infoProduct['specs']['battery']) ? $infoProduct['specs']['battery'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Bảo mật:</span>
          <p>{{# isset($infoProduct['specs']['security']) ? $infoProduct['specs']['security'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Chống nước:</span>
          <p>{{# isset($infoProduct['specs']['water_resistance']) ? $infoProduct['specs']['water_resistance'] : 'N/A'}}</p>
        </div>
        <div class="clearfix text_tt"><span>Trọng lượng:</span>
          <p>{{# isset($infoProduct['specs']['weight']) ? $infoProduct['specs']['weight'] : 'N/A'}}</p>
        </div>
        <div class="detail_pro_more css-content clearfix"></div>
        <p style="clear: both;"></p>
        <div class="btn_more clearfix">
          <p>Xem thêm cấu hình chi tiết</p>
        </div>
      </div>
      {{endif}}
      {{if(isset($infoProduct['videoLinks']) && is_array($infoProduct['videoLinks']) && !empty($infoProduct['videoLinks'][0])):}}
      <div class="detail_pro_right clearfix">
        <div class="clearfix title_main_content">
          <p>Video {{# isset($infoProduct['name']) ? $infoProduct['name'] : ""}}</p>
        </div>
        <ul id="slider_video">
          <li id="video" data-iframe="https://www.youtube.com/watch?v={{# isset($infoProduct['videoLinks'][0]) ? $infoProduct['videoLinks'][0] : ""}}">
            <iframe src="https://www.youtube.com/embed/$1?autoplay=1" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
          </li>
          {{foreach($infoProduct['videoLinks'] as $link):}}
          <li data-iframe="https://www.youtube.com/watch?v={{# $link}}">
            <img src="http://img.youtube.com/vi/{{# $link}}/mqdefault.jpg" />
          </li>
          {{endforeach}}
        </ul>
      </div>
      {{endif}}
    {{if(isset($random_phukien)):}}
      <aside class="pro_cungloai clearfix">
        <div class="clearfix title_main_content">
          <p>Sản phẩm cùng phân khúc</p>
        </div>
      {{foreach($random_dienthoai as $dienthoai):}}
        <div class="pro_cungloai_con clearfix">
          <div class="img_cungloai clearfix">
            <a href="{{# URL::base_url()}}/{{# $dienthoai['categorySlug']}}/{{# $dienthoai['companySlug']}}/{{# isset($dienthoai['name']) ? StringLib::convertUrl($dienthoai['name']) : null }}-prd{{# $dienthoai['id']}}.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="{{# URL::base_url('/public/uploads/')}}{{# isset($dienthoai['avatar'][0]) ? $dienthoai['avatar'][0] : null }}" alt="{{# isset($dienthoai['name']) ? $dienthoai['name'] : 0 }}" /></a>
          </div>
          <div class="detail_cungloai clearfix">
            <p><a href="{{# URL::base_url()}}/{{# $dienthoai['categorySlug']}}/{{# $dienthoai['companySlug']}}/{{# isset($dienthoai['name']) ? StringLib::convertUrl($dienthoai['name']) : null }}-prd{{# $dienthoai['id']}}.html">{{# isset($dienthoai['name']) ? $dienthoai['name'] : 0 }}</a></p>
          </div>
        </div>
      {{endforeach}}
    </aside>
    {{endif}}
    </section>
    {{endif}}
    <section id="box_detail" class="clearfix">
      <section class="left_pro">
        <div class="title_main_content">
          <h2 class="title_sp">Thông tin chi tiết {{# isset($infoProduct['name']) ? $infoProduct['name'] : ""}}</h2></div>
        <section id="content" class="clearfix css_content detail_pk">
          <div class="box">
            {{# isset($infoProduct['detail']) ? $infoProduct['detail'] : "Không có thông tin!"}}
          </div>
        </section>
        <div class="btn_show clearfix">
          <p><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Xem thêm chi tiết bài viết<i class="fa fa-long-arrow-down" aria-hidden="true"></i></p>
        </div>
        <section class="plus_pro clearfix">
          <div class="thongtin_plus clearfix">
            <div class="anh_thongtin_plus clearfix">
              <img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="{{# URL::base_path('/public/uploads/')}}{{# isset($infoProduct['avatar'][0]) ? $infoProduct['avatar'][0] : ""}}" alt="{{# isset($infoProduct['name']) ? $infoProduct['name'] : "---"}}" />
            </div>
            <p>{{# isset($infoProduct['name']) ? $infoProduct['name'] : ""}}</p>
            <p class="price_plus">{{# isset($infoProduct['price']) ? number_format($infoProduct['price']) . '₫': "Liên hệ"}}</p>
          </div>
          <div class="clearfix btn_plus">
          {{if(isset($infoProduct['status']) && $infoProduct['status'] == 1):}}
            <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
              <p>Mua ngay
                <br/><span>Giao hàng tận nơi miễn phí</span></p>
            </a>
          {{endif}}
          {{if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):}}
            <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 clearfix">
              <p>MUA TRẢ GÓP
                <br/> <span>Lãi suất thấp</span></p>
            </a>
          {{endif}}
          </div>
        </section>
        <!-- all box coment website -->
        <div class="coment_web clearfix">
          <aside class="clearfix">
            <h4 class="clearfix" style="font-size: 20px;color: #424242;margin: 5px 0 20px 0;float: left;font-weight: normal;max-width: 658px;display: block;">Đánh giá về {{# isset($infoProduct['name']) ? $infoProduct['name'] : "---"}}</h4>
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
              <a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/04/small-iphone-7-plus-do-red.jpg" alt="iPhone 7 Plus đỏ (PRODUCT) RED" /></a>
            </div>
            <div class="detail_cungloai clearfix" style="float: left;">
              <p><a href="http://mobilecity.vn/apple/iphone-7-plus-mau-do-red.html">iPhone 7 Plus đỏ (PRODUCT) RED</a></p>
            </div>
          </div>
        </div>
      </section>
      <section class="right_pro clearfix">
        <aside class="tomtat_pro clearfix">
          <p>{{# isset($infoProduct['name']) ? $infoProduct['name'] : ""}}</p>
          <p class="price_left">{{# isset($infoProduct['price']) ? number_format($infoProduct['price']) . '₫' : "Liên hệ"}}</p>
          {{if(isset($infoProduct['counpons']) && !empty($infoProduct['counpons'][0])):}}
          <div class="box_sale clearfix">
            <p class="title_box_sale">Khuyến mãi</p>
            <ul>
            {{foreach($infoProduct['counpons'] as $counpon):}}
              {{if(!empty($counpon)):}}
              <li class="clearfix">{{# $counpon}}</li>
              {{endif}}
            {{endforeach}}
            </ul>
          </div>
          {{endif}}
          <div class="clearfix">
          {{if(isset($infoProduct['status']) && $infoProduct['status'] == 1):}}
              <a href="javascript:;" class="btn-order-phone btn_pro_mua right_mua btn1 clearfix">
                <p>Mua ngay
                  <br/><span>Giao hàng tận nơi miễn phí</span></p>
              </a>
          {{endif}}
          {{if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):}}
              <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 right_mua clearfix">
                <p>MUA TRẢ GÓP
                  <br/> <span>Lãi suất thấp</span></p>
              </a>
          {{endif}}
          </div>
          <div class="icon icon_phone clearfix"></div>
          <p class="clearfix"><span class="chudam">{{# isset($configs['hotline'])?$configs['hotline']:'N/A'}}</span> (HN)</p>
        </aside>
      </section>
    </section>
  </section>
</section>
