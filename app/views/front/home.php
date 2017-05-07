<section class="banner clearfix">
  <div class="banner_left clearfix">
    <div id="slider_home" class="owl-carousel">
      <div class="item"><span class="centery"></span>
        <a href="tin-tuc/thu-mua-iphone-lock-cu-len-doi-iphone-quoc-te-full-box.html"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/02/web-3.jpg" alt="Đổi iPhone Lock - Lên đời iPhone Quốc tế" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="kashi/kashi-i7.html"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/02/web.jpg" alt="Kashi i7" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="dien-thoai-meizu/index.html"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/04/123.gif" alt="iphone 6 lock" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="tin-tuc/tuyen-nhan-vien-ban-hang-dien-thoai-ki-thuat-sua-chua-dtdd.html"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/02/mobilecity-tuyen-dung-nhan-su.jpg" alt="MobileCity tuyển dụng nhân sự" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="http://mcforum.vn/"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/02/dien-dan-mcforum.vn-slide-web.jpg" alt="MCForum.vn - Chuyên trang hỗ trợ người dùng Mobile" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="samsung/samsung-galaxy-s7-cu-prd1031.html"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2017/03/17218398_1264910930264205_8276486367668877654_o.jpg" alt="Xiaomi Redmi 4A" /></a>
      </div>
      <div class="item"><span class="centery"></span>
        <a href="https://goo.gl/lTc6NX"><img class="lazyOwl" data-src="http://images.mobilecity.vn/media/images/2016/12/website.jpg" alt="Galaxy On5/ on7" /></a>
      </div>
    </div>
  </div>
  <div class="banner_right clearfix">
    <ul id="slider_video_home">
      <li title="1" id="video" data-iframe="https://www.youtube.com/watch?v=T3OAl7u1pNs">
        <iframe src="https://www.youtube.com/embed/$1?autoplay=1" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
      </li>
      <li data-iframe="https://www.youtube.com/watch?v=T3OAl7u1pNs">
        <img title="1" src="../img.youtube.com/vi/T3OAl7u1pNs/0.jpg" alt="1" />
      </li>
      <li data-iframe="https://www.youtube.com/watch?v=XweQLrBd4iM">
        <img title="2" src="../img.youtube.com/vi/XweQLrBd4iM/0.jpg" alt="2" />
      </li>
      <li data-iframe="https://www.youtube.com/watch?v=1yHLSBNR2Q8">
        <img title="3" src="../img.youtube.com/vi/1yHLSBNR2Q8/0.jpg" alt="3" />
      </li>
    </ul>
  </div>
</section>
<section class="pro clearfix">
  <div class="top_pro clearfix">
    {{if(isset($dsCompanyDienThoai)):}}
    <div class="top_pro_left clearfix">
      <p class="text">Hãng: </p>
      {{for($i = 0; $i < count($dsCompanyDienThoai); $i++):}}
        <a href="{{# URL::base_url("/dien-thoai/{$dsCompanyDienThoai[$i]['slug']}")}}.html">{{# $dsCompanyDienThoai[$i]['name']}}</a>
        {{if($i == 5):}}
        {{break;}}
        {{endif}}
      {{endfor}}
      {{if(count($dsCompanyDienThoai) > 6):}}
      <select id="go_phone_made">
        <option>Khác</option>
        {{for($i = 5; $i < count($dsCompanyDienThoai); $i++):}}
          <option data-link='{{# URL::base_url("/dien-thoai/{$dsCompanyDienThoai[$i]['slug']}")}}.html'>{{# $dsCompanyDienThoai[$i]['name']}}</option>
        {{endfor}}
      </select>
      {{endif}}
      
      <!--<select>
                    <option>Tính năng</option>
                    <option>Việt teo</option>
                </select>-->
    </div>
    {{endif}}
    <div class="top_pro_right clearfix">
      <select style="float: left;" id="order_phone">
        <option data-link="/dien-thoai/?sx=gia-thap-den-cao">Giá từ cao đến thấp</option>
        <option data-link="/dien-thoai/?sx=gia-cao-den-thap">Giá từ thấp đến cao</option>
      </select>
      <!--<p class="text">Mức giá:</p>
                <a href="#">1 - 3 triệu</a>
                <a href="#">3 - 7 triệu</a>
                <a href="#">7 - 10 triệu</a>-->
    </div>
  </div>
  <!-- bat dau san pham -->
  <div class="product clearfix">
    <!-- lap san pham -->
    {{if(isset($diDongList)):}} {{foreach($diDongList as $kProduct => $vProduct):}}
    <div class="pro_con clearfix">
      <a href="{{# isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html">
        <div class="pro_con_image clearfix">
        {{if(isset($vProduct['type'])):}}
          <div class="bre">
            {{foreach($vProduct['type'] as $v):}}
            <span class="moi" style="background:{{# $v['color']}}">{{# $v['name']}}</span>
            {{endforeach}}
          </div>
        {{endif}}
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="{{# URL::base_path('/public/uploads/')}}{{# isset($vProduct['avatar'][0]) ? $vProduct['avatar'][0] :''}}" alt="iPhone 6 Cũ - Fullbox" />
          <div class="mask">
            <div class="mask-title">
              <div class="icon"></div>
              <div class="text">TáoĐộc Care</div>
            </div>
            <ul class="mask-list">
              <li>BH 12 tháng nguồn, màn hình</li>
              <li>Đổi mới 15 ngày đầu tiên</li>
              <li>Tặng ốp lưng, dán cường lực</li>
              <li>Hỗ trợ phần mềm trọn đời máy</li>
            </ul>
            <a class="mask-link" target="_blank" title="Xem chi tiết chính sách bảo hành tại MobileCity" href="#">Bảo hành vàng</a>
          </div>
        </div>
      </a>
      <div class="thongtin_pro clearfix">
        <div class="thongtin_pro_left clearfix">
          <p class="name_pro"><a href="{{# isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html">{{# isset($vProduct['name']) ? $vProduct['name'] : 'N/A'}}</a></p>
          <p class="gia_pro">{{# isset($vProduct['price']) && is_numeric($vProduct['price']) ? number_format($vProduct['price']) : 0}} ₫</p>
          <ul>
            <li class='clearfix'>
              <p>Bảo hành {{# $vProduct['guarantee']}} tháng phần cứng</p>
            </li>
            <li class='clearfix'>
              <p>Ship COD Toàn quốc</p>
            </li>
          </ul>
        </div>
        <div class="thongtin_pro_right clearfix">
          <div class="all_icon icon_khuyenmai"></div>
          <a href="{{# isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html" class="btn_mua">Mua</a>
        </div>
      </div>
    </div>
    {{endforeach}} {{endif}}
  </div>
  <div class="phone"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" alt="icon loading video" /></div>
  <div class="btn_them clearfix"><a data-type="phone" data-execute="318,658,485,716,717,600,610,701,710,693,697,606,688,714,193" class="more_pro" href="javascript:;">Xem thêm điện thoại</a></div>
</section>
<section class="banner_ngang clearfix">
  <div class="banner_ngang_left clearfix">
    <a href="samsung/index.html"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/01/samsung.gif" alt="MobileCity Banner Hot 1" /></a>
  </div>
  <div class="banner_ngang_right clearfix">
    <a href="tin-tuc/tuyen-nhan-vien-ban-hang-dien-thoai-ki-thuat-sua-chua-dtdd.html"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/tuyen-dung.jpg" alt="MobileCity Banner Hot 2" /></a>
  </div>
</section>
<section class="pro clearfix">
  <div class="top_pro clearfix">
    <div class="top_pro_left clearfix" style="width: 100%;">
      <p class="text">Phụ kiện: </p>
      <a href="phu-kien-phu-kien-jellico/index.html">Phụ kiện Jellico</a>
      <a href="phu-kien-phu-kien-w-mobile/index.html">Phụ kiện W-mobile</a>
      <a href="phu-kien-iphone/index.html">Phụ kiện iPhone</a>
      <a href="phu-kien-ipad/index.html">Phụ kiện iPad</a>
      <a href="phu-kien-samsung/index.html">Phụ kiện Samsung</a>
      <a href="phu-kien-sony/index.html">Phụ kiện Sony</a>
      <a href="phu-kien-lg/index.html">Phụ kiện LG</a>
      <a href="phu-kien-htc/index.html">Phụ kiện HTC</a>
    </div>
    <!--<div class="top_pro_right clearfix">
                <select style="float: right;">
                    <option>Giá từ cao đến thấp</option>
                    <option>Giá từ thấp đến cao</option>
                </select>
            </div>-->
  </div>
  <!-- phu kien -->
  <div class="phukien clearfix">
    <!-- phu kien con -->
    <div class="phukien_con clearfix">
      <a href="phu-kien/tai-nghe-xiaomi-in-ear-headphones-basic-2016-2148.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Xiaomi-In-Ear-headphones-Basic-2016.jpg" alt="Tai nghe Xiaomi In-Ear headphones Basic 2016" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/tai-nghe-xiaomi-in-ear-headphones-basic-2016-2148.html">Tai nghe Xiaomi In-Ear headphones Basic 2016</a></p>
      <div class="left_pk clearfix">
        <p>180.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/tai-nghe-xiaomi-in-ear-headphones-basic-2016-2148.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/dan-cuong-luc-xiaomi-redmi-3s-plus-2140.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-dan-cuong-luc-xiaomi-redmi-3s-Plus-chinh-hang.jpg" alt="Dán cường lực Xiaomi Redmi 3S Plus" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-redmi-3s-plus-2140.html">Dán cường lực Xiaomi Redmi 3S Plus</a></p>
      <div class="left_pk clearfix">
        <p>120.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-redmi-3s-plus-2140.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/op-lung-xiaomi-redmi-3s-plus-2139.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-op-lung-redmi-3-plus-chinh-hang-001.jpg" alt="Ốp lưng Xiaomi Redmi 3S Plus" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/op-lung-xiaomi-redmi-3s-plus-2139.html">Ốp lưng Xiaomi Redmi 3S Plus</a></p>
      <div class="left_pk clearfix">
        <p>80.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/op-lung-xiaomi-redmi-3s-plus-2139.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/dan-cuong-luc-xiaomi-mi5s-plus-2138.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Dan-cuong-luc-Xiaomi-Mi5S-Plus.jpg" alt="Dán cường lực Xiaomi Mi5S Plus" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-mi5s-plus-2138.html">Dán cường lực Xiaomi Mi5S Plus</a></p>
      <div class="left_pk clearfix">
        <p>120.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-mi5s-plus-2138.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/op-lung-blackberry-passport-2135.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-op-lung-black-berry-passport-trong-suo-imak-phu-nano-.jpg" alt="Ốp lưng BlackBerry Passport" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/op-lung-blackberry-passport-2135.html">Ốp lưng BlackBerry Passport</a></p>
      <div class="left_pk clearfix">
        <p>80.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/op-lung-blackberry-passport-2135.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/op-lung-xiaomi-mi5s-plus-2134.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-op-lung-xiaomi-mi5s-plus-xach-tay-gia-re-Mobilecity.jpg" alt="Ốp lưng Xiaomi Mi5S Plus" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/op-lung-xiaomi-mi5s-plus-2134.html">Ốp lưng Xiaomi Mi5S Plus</a></p>
      <div class="left_pk clearfix">
        <p>80.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/op-lung-xiaomi-mi5s-plus-2134.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/op-lung-xiaomi-mi5s-2132.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-op-lung-xiaomi-mi5s-mobilecity-001.jpg" alt="Ốp lưng Xiaomi Mi5S" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/op-lung-xiaomi-mi5s-2132.html">Ốp lưng Xiaomi Mi5S</a></p>
      <div class="left_pk clearfix">
        <p>80.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/op-lung-xiaomi-mi5s-2132.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/dan-cuong-luc-blackberry-passport-2130.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-dan-cuong-luc-blackberry-passsport-mobilecity.jpg" alt="Dán cường lực BlackBerry Passport" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/dan-cuong-luc-blackberry-passport-2130.html">Dán cường lực BlackBerry Passport</a></p>
      <div class="left_pk clearfix">
        <p>120.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/dan-cuong-luc-blackberry-passport-2130.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/dan-cuong-luc-xiaomi-redmi-note-4-2081.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-dan-cuong-luc-xiaomi-redmi-note-4.jpg" alt="Dán cường lực Xiaomi Redmi Note 4" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-redmi-note-4-2081.html">Dán cường lực Xiaomi Redmi Note 4</a></p>
      <div class="left_pk clearfix">
        <p>120.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/dan-cuong-luc-xiaomi-redmi-note-4-2081.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/vidonn-a6-2076.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-dong-ho-Vidonn-A6.jpg" alt="Vidonn A6" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/vidonn-a6-2076.html">Vidonn A6</a></p>
      <div class="left_pk clearfix">
        <p>670.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/vidonn-a6-2076.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/miband-1s-pulse-2075.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-dong-ho-MiBand-1s-Pulse.jpg" alt="MiBand 1s Pulse" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/miband-1s-pulse-2075.html">MiBand 1s Pulse</a></p>
      <div class="left_pk clearfix">
        <p>370.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/miband-1s-pulse-2075.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/tat-mo-khong-day-chuong-cua-xiaomi-2074.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Tat-mo-khong-day-chuong-cua-Xiaomi.jpg" alt="Tắt mở không dây (Chuông cửa) Xiaomi" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/tat-mo-khong-day-chuong-cua-xiaomi-2074.html">Tắt mở không dây (Chuông cửa) Xiaomi</a></p>
      <div class="left_pk clearfix">
        <p>130.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/tat-mo-khong-day-chuong-cua-xiaomi-2074.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/xiaomi-router-2-with-1tb-2073.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Xiaomi-Router-2-with-1TB.jpg" alt="Xiaomi Router 2 with 1TB" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/xiaomi-router-2-with-1tb-2073.html">Xiaomi Router 2 with 1TB</a></p>
      <div class="left_pk clearfix">
        <p>2.690.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/xiaomi-router-2-with-1tb-2073.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/o-cam-thong-minh-xiaomi-zigbee-2072.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-O-cam-thong-minh-Xiaomi-ZigBee.jpg" alt="Ổ cắm thông minh Xiaomi ZigBee" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/o-cam-thong-minh-xiaomi-zigbee-2072.html">Ổ cắm thông minh Xiaomi ZigBee</a></p>
      <div class="left_pk clearfix">
        <p>320.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/o-cam-thong-minh-xiaomi-zigbee-2072.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/phim-chuot-ukb-500-2071.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Phim-chuot-UKB-500.jpg" alt="Phím chuột UKB 500" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/phim-chuot-ukb-500-2071.html">Phím chuột UKB 500</a></p>
      <div class="left_pk clearfix">
        <p>190.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/phim-chuot-ukb-500-2071.html" class="btn_pk">Mua</a></div>
    </div>
    <div class="phukien_con clearfix">
      <a href="phu-kien/bo-phat-wifi-kiem-pin-sac-du-phong-zmi-mf855-2070.html">
        <div class="img_phukien clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/tiny-Bo-phat-wifi-kiem-pin-sac-du-phong-ZMI-MF855.jpg" alt="Bộ phát wifi kiêm pin sạc dự phòng ZMI MF855" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="phu-kien/bo-phat-wifi-kiem-pin-sac-du-phong-zmi-mf855-2070.html">Bộ phát wifi kiêm pin sạc dự phòng ZMI MF855</a></p>
      <div class="left_pk clearfix">
        <p>1.290.000 ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="phu-kien/bo-phat-wifi-kiem-pin-sac-du-phong-zmi-mf855-2070.html" class="btn_pk">Mua</a></div>
    </div>
  </div>
  <div class="fittings"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" /></div>
  <div class="btn_them clearfix"><a data-type="fittings" class="more_pro" href="javascript:;">Xem thêm phụ kiện</a></div>
</section>
<section class="banner_ngang clearfix">
  <div class="banner_ngang_left clearfix">
    <a href="samsung/samsung-galaxy-s7-cu-prd1031.html"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/slide-2.jpg" alt="MobileCity Banner Hot 3" /></a>
  </div>
  <div class="banner_ngang_right clearfix">
    <a href="dien-thoai-xiaomi/index.html"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/ship-COD.jpg" alt="MobileCity Banner Hot 4" /></a>
  </div>
</section>
<!-- dich vu -->
<section class="clearfix">
  <div class="ser clearfix ">
    <div class="ser_title clearfix top_pro" style="width: 100%;">
      <p class="text">Dịch vụ sửa chữa</p>
      <a href="sua-chua-iphone/index.html">iPhone</a>
      <a href="sua-chua-ipad/index.html">iPad</a>
      <a href="sua-chua-samsung/index.html">Samsung</a>
      <a href="sua-chua-sony/index.html">Sony</a>
      <a href="sua-chua-htc/index.html">HTC</a>
      <a href="sua-chua-lg/index.html">LG</a>
      <a href="sua-chua-oppo/index.html">Oppo</a>
      <a href="sua-chua-xiaomi/index.html">Xiaomi</a>
      <a href="sua-chua-lumia/index.html">Lumia</a>
      <a href="sua-chua-lenovo/index.html">Lenovo</a>
      <a href="sua-chua-asus/index.html">Asus</a>
      <a href="sua-chua-hang-khac/index.html">Hãng khác</a>
      <a href="sua-chua-blackberry/index.html">Blackberry</a>
    </div>
    <!-- dich vu con -->
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-mat-kinh-cam-ung-iphone-5s-iphone-5-5c-679.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-iphone-5s-iphone-5-5c.jpg" alt="Thay mặt kính iPhone 5, iPhone 5S, iPhone 5C" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-mat-kinh-cam-ung-iphone-5s-iphone-5-5c-679.html">Thay mặt kính iPhone 5, iPhone 5S, iPhone 5C</a></p>
        <p class="gia_pro clearfix">100.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-mat-kinh-cam-ung-iphone-5s-iphone-5-5c-679.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-mat-kinh-cam-ung-iphone-6-6-plus-6s-6s-plus-446.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-iphone-6-6-plus-6s-6s-plus.jpg" alt="Thay mặt kính iPhone 6, 6 Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-mat-kinh-cam-ung-iphone-6-6-plus-6s-6s-plus-446.html">Thay mặt kính iPhone 6, 6 Plus</a></p>
        <p class="gia_pro clearfix">150.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-mat-kinh-cam-ung-iphone-6-6-plus-6s-6s-plus-446.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-mat-kinh-iphone-7-7-plus-1028.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-iphone-7-7-plus.jpg" alt="Thay mặt kính iPhone 7, 7 Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-mat-kinh-iphone-7-7-plus-1028.html">Thay mặt kính iPhone 7, 7 Plus</a></p>
        <p class="gia_pro clearfix">300.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-mat-kinh-iphone-7-7-plus-1028.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-iphone-5-5s-726.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-iphone-5-5s.jpg" alt="Thay màn hình iPhone 5, 5S, 5C" />
          <div class="mask1 mask">
            <p class="clearfix">Tặng tấm dán màn hình cao cấp</p>
            <p class="clearfix">Miễn phí kiểm tra máy (không sửa không sao)</p>
            <p class="clearfix">Hỗ trợ phần mềm</p>
            <p class="clearfix">Tặng Giftcard khi sửa chữa đến 100.000đ</p>
            <p class="clearfix">Voucher ưu đãi khi mua máy tại MobileCity</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-iphone-5-5s-726.html">Thay màn hình iPhone 5, 5S, 5C</a></p>
        <p class="gia_pro clearfix">500.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-iphone-5-5s-726.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-iphone-6-6-plus-694.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-iphone-6-6-plus.jpg" alt="Thay màn hình iPhone 6, 6 Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-iphone-6-6-plus-694.html">Thay màn hình iPhone 6, 6 Plus</a></p>
        <p class="gia_pro clearfix">750.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-iphone-6-6-plus-694.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-mat-kinh-cam-ung-sony-xperia-z3v-1003.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-sony-xperia-z3v.jpg" alt="Thay mặt kính cảm ứng Sony Xperia Z3v" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-mat-kinh-cam-ung-sony-xperia-z3v-1003.html">Thay mặt kính cảm ứng Sony Xperia Z3v</a></p>
        <p class="gia_pro clearfix">500.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-mat-kinh-cam-ung-sony-xperia-z3v-1003.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-ban-phim-qwerty-cho-blackberry-passport-ban-phap-2129.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-ban-phim-qwerty-cho-blackberry-passport-ban-phap-1.jpg" alt="Thay bàn phím Qwerty cho Blackberry Passport bản Pháp" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-ban-phim-qwerty-cho-blackberry-passport-ban-phap-2129.html">Thay bàn phím Qwerty cho Blackberry Passport bản Pháp</a></p>
        <p class="gia_pro clearfix">350.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-ban-phim-qwerty-cho-blackberry-passport-ban-phap-2129.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-mat-kinh-man-hinh-cam-ung-sony-xperia-z3-352.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-man-hinh-cam-ung-sony-xperia.jpg" alt="Thay mặt kính, màn hình cảm ứng Sony Xperia Z3" />
          <div class="mask1 mask">
            <p class="clearfix">Giá Mặt kính Sony Xperia Z3: 250.000 BH 03 Tháng 1 đổi 1</p>
            <p class="clearfix">Giá cả bộ Màn hình Sony Xperia Z3: 850.000 BH 03 Tháng 1 đổi 1</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-mat-kinh-man-hinh-cam-ung-sony-xperia-z3-352.html">Thay mặt kính, màn hình cảm ứng Sony Xperia Z3</a></p>
        <p class="gia_pro clearfix">250.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-mat-kinh-man-hinh-cam-ung-sony-xperia-z3-352.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-1035.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-cam-ung-iphone-7-chinh-hang.jpg" alt="Thay màn hình cảm ứng iPhone 7" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-1035.html">Thay màn hình cảm ứng iPhone 7</a></p>
        <p class="gia_pro clearfix">3.400.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-1035.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-plus-2125.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/12/small-thay-man-hinh-cam-ung-iphone-7-plus-2125.jpg" alt="Thay màn hình cảm ứng iPhone 7 Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-plus-2125.html">Thay màn hình cảm ứng iPhone 7 Plus</a></p>
        <p class="gia_pro clearfix">4.200.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-cam-ung-iphone-7-plus-2125.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-xiaomi-redmi-4.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-mat-kinh-cam-ung-xiaomi-redmi-note-4-1.jpg" alt="Thay màn hình Xiaomi Redmi 4" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-xiaomi-redmi-4.html">Thay màn hình Xiaomi Redmi 4</a></p>
        <p class="gia_pro clearfix">Liên hệ</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-xiaomi-redmi-4.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-wifi-cho-blackberry-passport-2157.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-wifi-cho-blackberry-passport.jpg" alt="Thay wifi cho Blackberry Passport" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-wifi-cho-blackberry-passport-2157.html">Thay wifi cho Blackberry Passport</a></p>
        <p class="gia_pro clearfix">350.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-wifi-cho-blackberry-passport-2157.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/thay-man-hinh-cam-ung-xiaomi-mi5s-plus-2160.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-cam-ung-xiaomi-mi5s-plus.jpg" alt="Thay màn hình, cảm ứng Xiaomi Mi5s Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/thay-man-hinh-cam-ung-xiaomi-mi5s-plus-2160.html">Thay màn hình, cảm ứng Xiaomi Mi5s Plus</a></p>
        <p class="gia_pro clearfix">Liên hệ</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/thay-man-hinh-cam-ung-xiaomi-mi5s-plus-2160.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/sua-blackberry-passport-mat-song-2166.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-sua-blackberry-passport-mat-song.jpg" alt="Sửa Blackberry Passport bị mất sóng" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/sua-blackberry-passport-mat-song-2166.html">Sửa Blackberry Passport bị mất sóng</a></p>
        <p class="gia_pro clearfix">450.000 ₫</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/sua-blackberry-passport-mat-song-2166.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
    <div class="ser_con clearfix">
      <a href="dich-vu/sim-ghep-iphone-7-iphone-7-plus-2137.html">
        <div class="ser_image clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-sim-ghep.jpg" alt="Sim ghép iPhone 7 / iPhone 7 Plus" />
          <div class="mask1 mask">
            <p class="clearfix">Miễn phí cài đặt phần mềm</p>
            <p class="clearfix">Tặng tấm dán màn hình chống xước</p>
            <p class="clearfix">Tặng Gift Cards giảm giá sửa chữa 50.000₫</p>
          </div>
        </div>
      </a>
      <div class="left_ser clearfix">
        <p class="nam_ser clearfix"><a href="dich-vu/sim-ghep-iphone-7-iphone-7-plus-2137.html">Sim ghép iPhone 7 / iPhone 7 Plus</a></p>
        <p class="gia_pro clearfix">Liên hệ</p>
      </div>
      <div class="right_ser clearfix">
        <a href="dich-vu/sim-ghep-iphone-7-iphone-7-plus-2137.html" class="btn_mua clearfix">Mua</a>
      </div>
    </div>
  </div>
  <div class="fix_phone"><img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" /></div>
  <div class="btn_them clearfix"><a data-type="fix_phone" class="more_pro" href="javascript:;">Xem thêm dịch vụ sửa chữa</a></div>
</section>
<!-- tin tuc -->
<section class="clearfix">
  <div class="news clearfix">
    <!-- tin tuc con -->
    <article class="new_con clearfix">
      <a href="tin-tuc/mobilecity-tuyen-nhan-vien-call-center-cham-soc-khach-hang.html">
        <div class="news_img clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/small-mobilecity-tuyen-dung.jpg" alt="MobileCity tuyển nhân viên Call Center - Chăm sóc Khách hàng" />
        </div>
      </a>
      <div class="right_new_home clearfix">
        <p class="title_new_home clearfix"><a title="MobileCity tuyển nhân viên Call Center - Chăm sóc Khách hàng" href="tin-tuc/mobilecity-tuyen-nhan-vien-call-center-cham-soc-khach-hang.html">MobileCity tuyển nhân viên Call Center - ...</a></p>
        <p class="detail_new_home clearfix"> MobileCity cần tuyển 02 nhân viên Call Center - Chăm sóc Khách hàng  Những Quyền lợi mà bạn sẽ nhận được khi làm việc ở vị trí Call Center tại MobileCity:  1. Môi trường làm việc thoải mái, dễ chịu 2. Có khả năng thăng tiến, nâng cấp ...</p>
      </div>
    </article>
    <article class="new_con clearfix">
      <a href="tin-tuc/mobilecity-tuyen-dung-vi-tri-ban-hang-full-time-part-time.html">
        <div class="news_img clearfix">
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/05/small-can-tuyen.jpg" alt="MobileCity tuyển dụng vị trí Bán hàng (Full Time, Part Time)" />
        </div>
      </a>
      <div class="right_new_home clearfix">
        <p class="title_new_home clearfix"><a title="MobileCity tuyển dụng vị trí Bán hàng (Full Time, Part Time)" href="tin-tuc/mobilecity-tuyen-dung-vi-tri-ban-hang-full-time-part-time.html">MobileCity tuyển dụng vị trí Bán hàng (Full ...</a></p>
        <p class="detail_new_home clearfix"> MobileCity cần tìm nhân viên Bán hàng Full Time &amp; Part Time Tại vị trí bán hàng của MobileCity bạn sẽ nhận được những gì ? - Công việc nhẹ nhàng, không nặng nhọc - Môi trường sạch sẽ, yên tĩnh, trong phòng máy lạnh - Thu ...</p>
      </div>
    </article>
  </div>
</section>
