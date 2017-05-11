<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="<?php echo isset($configs['shortcut-icon']) ? $configs['shortcut-icon'] : null?>" type="image/x-icon" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="Index,Follow" />
  <title><?php echo isset($seo['title'])?$seo['title']:'---'?><?php echo isset($configs['suffix-title']) ? $configs['suffix-title'] : null?></title>
  <meta content="<?php echo isset($seo['description'])?$seo['description']:'---'?>" name="description" />
  <meta content="<?php echo isset($seo['keywords'])?$seo['keywords']:'---'?>" name="keywords" />
  <link rel="canonical" href="<?php echo URL::thisUrl()?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/main.css" />
  <?php if(isset($styles)):?>
    <?php foreach($styles as $style):?>
      <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/') . $style ?>" />
    <?php endforeach;?>
  <?php endif;?>
  <link rel="stylesheet" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/responsive.css" />
</head>

<body>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/icons.css" />
  <link rel="stylesheet" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/component.css" />
  <link rel="stylesheet" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/cAlert.css" />
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
          <form method="GET" action="<?php echo URL::base_url('/tim-kiem.html')?>">
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
      <nav id="mp-menu" class="mp-menu">
  <div class="mp-level">
    <ul>
      <li class=""><a href="index.html">Trang Chủ</a></li>
      <li class="icon icon-arrow-left">
        <a href="javascript:;">Điện thoại</a>
        <div class="mp-level">
          <a class="prmp" href="">Điện thoại</a>
          <a class="mp-back" href="javascript:;">Quay Lại</a>
          <ul>
            <li class=""><a class="" href="dien-thoai-apple/index.html">Apple (iPhone)</a></li>
            <li class=""><a class="" href="dien-thoai-xiaomi/index.html">Xiaomi</a></li>
            <li class=""><a class="" href="dien-thoai-samsung/index.html">Samsung</a></li>
            <li class=""><a class="" href="dien-thoai-w-mobile/index.html">W-Mobile</a></li>
          </ul>
        </div>
      </li>
      <li class="icon icon-arrow-left">
        <a href="javascript:;">Tablet</a>
        <div class="mp-level">
          <a class="prmp" href="may-tinh-bang/index.html">Tablet</a>
          <a class="mp-back" href="javascript:;">Quay Lại</a>
          <ul>
            <li><a href="may-tinh-bang-ipad/index.html">iPad</a></li>
            <li><a href="may-tinh-bang-samsung-galaxy-tab/index.html">Samsung Galaxy Tab</a></li>
          </ul>
        </div>
      </li>
      <li class="icon icon-arrow-left">
        <a href="javascript:;">Phụ kiện</a>
        <div class="mp-level">
          <a class="prmp" href="phu-kien/index.html">Phụ kiện</a>
          <a class="mp-back" href="javascript:;">Quay Lại</a>
          <ul>
            <li><a href="phu-kien-phu-kien-jellico/index.html">Phụ kiện Jellico</a></li>
            <li><a href="phu-kien-phu-kien-w-mobile/index.html">Phụ kiện W-mobile</a></li>
          </ul>
        </div>
      </li>
      <li class="icon icon-arrow-left">
        <a href="javascript:;">Sửa chữa</a>
        <div class="mp-level">
          <a class="prmp" href="sua-chua-dien-thoai/index.html">Sửa chữa</a>
          <a class="mp-back" href="javascript:;">Quay Lại</a>
          <ul>
            <li><a href="sua-chua-iphone/index.html">iPhone</a></li>
            <li><a href="sua-chua-iphone-4-4s/index.html">iPhone 4, 4S</a></li>
            <li><a href="sua-chua-iphone-5-5s-5c/index.html">iPhone 5, 5S, 5C</a></li>
          </ul>
        </div>
      </li>
      <li class="icon icon-arrow-left">
        <a href="javascript:;">Tin tức</a>
        <div class="mp-level">
          <a class="prmp" href="tin-tuc/index.html">Tin tức</a>
          <a class="mp-back" href="javascript:;">Quay Lại</a>
          <ul>
            <li><a href="tin-tuc-khuyen-mai/index.html">Tin khuyến mại</a></li>
            <li><a href="tin-tuc-tu-van-chon-mua/index.html">Tư vấn chọn mua</a></li>
            <li><a href="tin-tuc-goc-ky-thuat/index.html">Góc kỹ thuật</a></li>
            <li><a href="tin-tuc-cong-nghe/index.html">Tin công nghệ</a></li>
            <li><a href="tin-tuc-tuyen-dung/index.html">Tuyển dụng</a></li>
          </ul>
        </div>
      </li>
      <li class=""><a href="lien-he/index.html">Liên hệ</a></li>
      <li class=""><a target="" href="http://forum.mobilecity.vn/">Diễn đàn</a></li>
    </ul>
  </div>
</nav>

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
                <p>Hotline <span class="chucam"><?php echo isset($configs['hotline']) ? $configs['hotline'] : null?></span></p>
              </div>
              <div class="top_web_right clearfix">
                <p>
                  <a style="font-weight: bold;" href="tin-tuc-tuyen-dung/index.html">Tuyển dụng</a>&nbsp;|&nbsp;
                  <a id="btn-login" href="javascript:;" rel="nofollow">Đăng nhập</a> | <a id="btn-signup" href="javascript:;" rel="nofollow">Đăng ký</a>
                </p>
              </div>
            </div>
          </section>
          <header>
  <div class="bocnoidung clearfix">
    <div class="logo clearfix">
      <a href="index.html">
        <div class="icon_logo clearfix" style="background-image: url(<?php echo isset($configs['logo']) ? $configs['logo'] : null?>);background-repeat: no-repeat;"></div>
      </a>
    </div>
    <div class="input_search clearfix">
      <form method="GET" action="<?php echo URL::base_path()?>/tim-kiem.html">
        <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Tìm kiếm sản phẩm . . ." />
        <button class="btn_search">
          <div class="all_icon icon_search"></div>
        </button>
      </form>
      <div class="suggest-search"></div>
    </div>
    <nav id="menu" class=" clearfix">
      <ul>
        <li>
          <a href="<?php echo URL::base_path()?>/dien-thoai.html">
            <div class="all_icon clearfix icon_dienthoai"></div>
            <p>Điện thoại</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_1">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Hãng sản xuất</p>
              </div>
              <ul>
                <?php if(isset($dsCompanyDienThoai)):?>
                  <?php foreach($dsCompanyDienThoai as $company):?>
                    <li><a href="<?php echo URL::base_path()?>/dien-thoai/<?php echo $company['slug']?>.html"><?php echo $company['name']?></a></li>
                  <?php endforeach;?>
                <?php endif;?>
              </ul>
            </div>
            <div class="right_menu clearfix">
              <div class="title_menu clearfix">
                <p>Mức giá</p>
              </div>
              <ul>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-1-trieu">Dưới 1 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-2-trieu">Dưới 2 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-3-trieu">Dưới 3 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-5-trieu">Dưới 5 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-8-trieu">Dưới 8 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=duoi-10-trieu">Dưới 10 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/dien-thoai.html?gia=tren-10-trieu">Trên 10 triệu</a></li>
              </ul>
            </div>
            <div class="bottom_menu clearfix">
              <div class="all_icon icon_rank"></div>
              <a href="#">
                <p>Bảng xếp hạng điện thoại của tháng</p>
              </a>
            </div>
          </div>
        </li>
        <li>
          <a href="<?php echo URL::base_path()?>/may-tinh-bang.html">
            <div class="all_icon icon_tablet"></div>
            <p>Tablet</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_2">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Hãng sản xuất</p>
              </div>
              <ul>
                <?php if(isset($dsCompanyTablet)):?>
                  <?php foreach($dsCompanyTablet as $company):?>
                    <li><a href="<?php echo URL::base_path()?>/may-tinh-bang/<?php echo $company['slug']?>.html"><?php echo $company['name']?></a></li>
                  <?php endforeach;?>
                <?php endif;?>              </ul>
            </div>
            <div class="right_menu clearfix">
              <div class="title_menu clearfix">
                <p>Mức giá</p>
              </div>
              <ul>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-1-trieu">Dưới 1 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-2-trieu">Dưới 2 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-3-trieu">Dưới 3 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-5-trieu">Dưới 5 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-8-trieu">Dưới 8 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=duoi-10-trieu">Dưới 10 triệu</a></li>
                <li><a href="<?php echo URL::base_path()?>/may-tinh-bang.html?gia=tren-10-trieu">Trên 10 triệu</a></li>
              </ul>
            </div>
            <div class="bottom_menu clearfix">
              <div class="all_icon icon_rank"></div>
              <a href="#">
                <p>Bảng xếp hạng tablet của tháng</p>
              </a>
            </div>
          </div>
        </li>
        <li>
          <a href="<?php echo URL::base_path()?>/phu-kien.html">
            <div class="all_icon icon_phukien"></div>
            <p>Phụ kiện</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_3">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Danh mục phụ kiện</p>
              </div>
              <ul>
                <?php if(isset($dsCompanyPhuKien)):?>
                  <?php foreach($dsCompanyPhuKien as $company):?>
                    <li><a href="<?php echo URL::base_path()?>/phu-kien/<?php echo $company['slug']?>.html"><?php echo $company['name']?></a></li>
                  <?php endforeach;?>
                <?php endif;?>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="sua-chua-dien-thoai/index.html">
            <div class="all_icon icon_suachua"></div>
            <p>Sửa chữa</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_4">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Danh mục sửa chữa phần cứng, phần mềm</p>
              </div>
              <ul>
                <li><a href="sua-chua-iphone/index.html">iPhone</a></li>
                <li><a href="sua-chua-ipad/index.html">iPad</a></li>
                <li><a href="sua-chua-samsung/index.html">Samsung</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="tin-tuc-khuyen-mai/index.html">
            <div class="all_icon icon_uudai"></div>
            <p>Ưu đãi</p>
          </a>
        </li>
        <li>
          <a href="http://forum.mobilecity.vn/" target="_blank">
            <div class="all_icon icon_diendan"></div>
            <p>Diễn đàn</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div id="bg_menu">
    <button class="c-hamburger c-hamburger--htx" id="open_menu">
      <span>toggle menu</span>
    </button>
  </div>
  <div id="mb-search">
    <i class="fa fa-search"></i>
  </div>
</header>

          <main class="clearfix bocnoidung">
            <section class="banner clearfix">
  <div class="banner_left clearfix">
    <div id="slider_home" class="owl-carousel">
      <?php if(isset($banner['home'])):?>
      <?php foreach((array)json_decode($banner['home']['image_src']) as $img):?>

      <div class="item"><span class="centery"></span>
        <a href="<?php echo $img->link?>"><img class="lazyOwl" data-src="<?php echo URL::base_url('/public/uploads/')?><?php echo $img->src?>" alt="" /></a>
      </div>
      <?php endforeach;?>
      <?php endif;?>
    </div>
  </div>
  <div class="banner_right clearfix">
    <ul id="slider_video_home">
      <li title="1" id="video" data-iframe="https://www.youtube.com/watch?v=TXpGtTCXZ00">
        <iframe src="https://www.youtube.com/embed/$1?autoplay=1" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
      </li>
      <li data-iframe="https://www.youtube.com/watch?v=TXpGtTCXZ00">
        <img title="1" src="../img.youtube.com/vi/TXpGtTCXZ00/0.jpg" alt="1" />
      </li>
    </ul>
  </div>
</section>
<section class="pro clearfix">
  <div class="top_pro clearfix">
    <?php if(isset($dsCompanyDienThoai)):?>
    <div class="top_pro_left clearfix">
      <p class="text">Hãng: </p>
      <?php for($i = 0; $i < count($dsCompanyDienThoai); $i++):?>
        <a href="<?php echo URL::base_url("/dien-thoai/{$dsCompanyDienThoai[$i]['slug']}")?>.html"><?php echo $dsCompanyDienThoai[$i]['name']?></a>
        <?php if($i == 5):?>
        <?php  break;?>
        <?php endif;?>
      <?php endfor;?>
      <?php if(count($dsCompanyDienThoai) > 6):?>
      <select id="go_phone_made">
        <option>Khác</option>
        <?php for($i = 5; $i < count($dsCompanyDienThoai); $i++):?>
          <option data-link='<?php echo URL::base_url("/dien-thoai/{$dsCompanyDienThoai[$i]['slug']}")?>.html'><?php echo $dsCompanyDienThoai[$i]['name']?></option>
        <?php endfor;?>
      </select>
      <?php endif;?>
    </div>
    <?php endif;?>
  </div>
  <!-- bat dau san pham -->
  <div class="product clearfix">
    <!-- lap san pham -->
    <?php if(isset($diDongList)):?> <?php foreach($diDongList as $kProduct => $vProduct):?>
    <div class="pro_con clearfix">
      <a href="<?php echo isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null ?>/<?php echo isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null ?>/<?php echo isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null ?>-prd<?php echo $vProduct['id'] ?>.html">
        <div class="pro_con_image clearfix">
        <?php if(isset($vProduct['type'])):?>
          <div class="bre">
            <?php foreach($vProduct['type'] as $v):?>
            <span class="moi" style="background:<?php echo $v['color']?>"><?php echo $v['name']?></span>
            <?php endforeach;?>
          </div>
        <?php endif;?>
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="<?php echo URL::base_path('/public/uploads/')?><?php echo isset($vProduct['avatar'][0]) ? $vProduct['avatar'][0] :''?>" alt="iPhone 6 Cũ - Fullbox" />
<!--           <div class="mask">
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
          </div> -->
        </div>
      </a>
      <div class="thongtin_pro clearfix">
        <div class="thongtin_pro_left clearfix">
          <p class="name_pro"><a href="<?php echo isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null ?>/<?php echo isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null ?>/<?php echo isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null ?>-prd<?php echo $vProduct['id'] ?>.html"><?php echo isset($vProduct['name']) ? $vProduct['name'] : 'N/A'?></a></p>
          <p class="gia_pro"><?php echo isset($vProduct['price']) && is_numeric($vProduct['price']) ? number_format($vProduct['price']) : 0?> ₫</p>
          <?php if(isset($vProduct['counpons'])):?>
          <ul>
          <?php  $id = 0;?>
          <?php foreach($vProduct['counpons'] as $counpon):?>
          <?php if(!empty($counpon)):?>
            <li class='clearfix'>
              <p><?php echo $counpon?></p>
            </li>
          <?php  $id ++ ;?>
          <?php if($id == 2):?>
          <?php  break;?>
          <?php endif;?>
          <?php endif;?>
          <?php endforeach;?>
          </ul>
          <?php endif;?>
        </div>
        <div class="thongtin_pro_right clearfix">
          <div class="all_icon icon_khuyenmai"></div>
          <a href="<?php echo isset($vProduct['categorySlug']) ? $vProduct['categorySlug'] : null ?>/<?php echo isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null ?>/<?php echo isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null ?>-prd<?php echo $vProduct['id'] ?>.html" class="btn_mua">Mua</a>
        </div>
      </div>
    </div>
    <?php endforeach;?> <?php endif;?>
  </div>
<!--   <div class="phone"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" alt="icon loading video" /></div>
  <div class="btn_them clearfix"><a data-type="phone" data-execute="318,658,485,716,717,600,610,701,710,693,697,606,688,714,193" class="more_pro" href="javascript:;">Xem thêm điện thoại</a></div>
 --></section>
<!-- <section class="banner_ngang clearfix">
  <div class="banner_ngang_left clearfix">
    <a href="samsung/index.html"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/01/samsung.gif" alt="MobileCity Banner Hot 1" /></a>
  </div>
  <div class="banner_ngang_right clearfix">
    <a href="tin-tuc/tuyen-nhan-vien-ban-hang-dien-thoai-ki-thuat-sua-chua-dtdd.html"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/tuyen-dung.jpg" alt="MobileCity Banner Hot 2" /></a>
  </div>
</section> -->
<?php if(isset($phukienList)):?>
<section class="pro clearfix">
  <div class="top_pro clearfix">
    <?php if(isset($dsCompanyPhuKien)):?>
    <div class="top_pro_left clearfix">
      <p class="text">Hãng: </p>
      <?php for($i = 0; $i < count($dsCompanyPhuKien); $i++):?>
        <a href="<?php echo URL::base_url("/phu-kien/{$dsCompanyPhuKien[$i]['slug']}")?>.html"><?php echo $dsCompanyPhuKien[$i]['name']?></a>
        <?php if($i == 5):?>
        <?php  break;?>
        <?php endif;?>
      <?php endfor;?>
      <?php if(count($dsCompanyPhuKien) > 6):?>
      <select id="go_phone_made">
        <option>Khác</option>
        <?php for($i = 5; $i < count($dsCompanyPhuKien); $i++):?>
          <option data-link='<?php echo URL::base_url("/phu-kien/{$dsCompanyPhuKien[$i]['slug']}")?>.html'><?php echo $dsCompanyPhuKien[$i]['name']?></option>
        <?php endfor;?>
      </select>
      <?php endif;?>
    </div>
    <?php endif;?>

  </div>
  <!-- phu kien -->
  <div class="phukien clearfix">
    <!-- phu kien con -->
    <?php foreach($phukienList as $phukien):?>
    <div class="phukien_con clearfix">
      <a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id'] ?>.html">
        <div class="img_phukien clearfix">
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="<?php echo URL::base_url('/public/uploads/')?><?php echo isset($phukien['avatar'][0]) ? $phukien['avatar'][0] : null?>" alt="<?php echo $phukien['name']?>" />
        </div>
      </a>
      <p class="name_pk clearfix"><a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id'] ?>.html"><?php echo $phukien['name']?></a></p>
      <div class="left_pk clearfix">
        <p><?php echo isset($phukien['price']) ? number_format($phukien['price']) : 0 ?> ₫</p>
      </div>
      <div class="right_pk clearfix"><a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id'] ?>.html" class="btn_pk">Mua</a></div>
    </div>
    <?php endforeach;?>
  </div>
</section>
<?php endif;?>
<!-- <section class="banner_ngang clearfix">
  <div class="banner_ngang_left clearfix">
    <a href="samsung/samsung-galaxy-s7-cu-prd1031.html"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/slide-2.jpg" alt="MobileCity Banner Hot 3" /></a>
  </div>
  <div class="banner_ngang_right clearfix">
    <a href="dien-thoai-xiaomi/index.html"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/ship-COD.jpg" alt="MobileCity Banner Hot 4" /></a>
  </div>
</section> -->
<!-- dich vu -->
<?php if(isset($suachuaList)):?>
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-iphone-5s-iphone-5-5c.jpg" alt="Thay mặt kính iPhone 5, iPhone 5S, iPhone 5C" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-iphone-6-6-plus-6s-6s-plus.jpg" alt="Thay mặt kính iPhone 6, 6 Plus" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-iphone-7-7-plus.jpg" alt="Thay mặt kính iPhone 7, 7 Plus" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-iphone-5-5s.jpg" alt="Thay màn hình iPhone 5, 5S, 5C" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-iphone-6-6-plus.jpg" alt="Thay màn hình iPhone 6, 6 Plus" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-cam-ung-sony-xperia-z3v.jpg" alt="Thay mặt kính cảm ứng Sony Xperia Z3v" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-ban-phim-qwerty-cho-blackberry-passport-ban-phap-1.jpg" alt="Thay bàn phím Qwerty cho Blackberry Passport bản Pháp" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-mat-kinh-man-hinh-cam-ung-sony-xperia.jpg" alt="Thay mặt kính, màn hình cảm ứng Sony Xperia Z3" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-cam-ung-iphone-7-chinh-hang.jpg" alt="Thay màn hình cảm ứng iPhone 7" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/12/small-thay-man-hinh-cam-ung-iphone-7-plus-2125.jpg" alt="Thay màn hình cảm ứng iPhone 7 Plus" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-mat-kinh-cam-ung-xiaomi-redmi-note-4-1.jpg" alt="Thay màn hình Xiaomi Redmi 4" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-wifi-cho-blackberry-passport.jpg" alt="Thay wifi cho Blackberry Passport" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-thay-man-hinh-cam-ung-xiaomi-mi5s-plus.jpg" alt="Thay màn hình, cảm ứng Xiaomi Mi5s Plus" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-sua-blackberry-passport-mat-song.jpg" alt="Sửa Blackberry Passport bị mất sóng" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2016/11/small-sim-ghep.jpg" alt="Sim ghép iPhone 7 / iPhone 7 Plus" />
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
  <div class="fix_phone"><img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" /></div>
  <div class="btn_them clearfix"><a data-type="fix_phone" class="more_pro" href="javascript:;">Xem thêm dịch vụ sửa chữa</a></div>
</section>
<?php endif;?>
<!-- tin tuc -->
<section class="clearfix">
  <div class="news clearfix">
    <!-- tin tuc con -->
    <article class="new_con clearfix">
      <a href="tin-tuc/mobilecity-tuyen-nhan-vien-call-center-cham-soc-khach-hang.html">
        <div class="news_img clearfix">
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/02/small-mobilecity-tuyen-dung.jpg" alt="MobileCity tuyển nhân viên Call Center - Chăm sóc Khách hàng" />
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
          <img src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/load_video.svg" class="lazy" data-original="http://images.mobilecity.vn/media/images/2017/05/small-can-tuyen.jpg" alt="MobileCity tuyển dụng vị trí Bán hàng (Full Time, Part Time)" />
        </div>
      </a>
      <div class="right_new_home clearfix">
        <p class="title_new_home clearfix"><a title="MobileCity tuyển dụng vị trí Bán hàng (Full Time, Part Time)" href="tin-tuc/mobilecity-tuyen-dung-vi-tri-ban-hang-full-time-part-time.html">MobileCity tuyển dụng vị trí Bán hàng (Full ...</a></p>
        <p class="detail_new_home clearfix"> MobileCity cần tìm nhân viên Bán hàng Full Time &amp; Part Time Tại vị trí bán hàng của MobileCity bạn sẽ nhận được những gì ? - Công việc nhẹ nhàng, không nặng nhọc - Môi trường sạch sẽ, yên tĩnh, trong phòng máy lạnh - Thu ...</p>
      </div>
    </article>
  </div>
</section>

          </main>
         <footer>
  <div class="bocnoidung clearfix">
    <div class="footer_chia_3 footerc1 clearfix">
      <div class="title_chia_3 chudam clearfix">
        <div class="all_icon clearfix icon_hethong"></div>
        <p>Hệ thống cửa hàng</p>
      </div>
      <div class="address_group">
        <div class="title">Hà Nội</div>
        <div class="main">
          <div class="address_item">
            <address><?php echo isset($configs['address']) ? $configs['address'] : null?></address>
            <p>Điện thoại: <?php echo isset($configs['hotline']) ? $configs['hotline'] : null?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_chia_3 footerc2 clearfix">
      <div class="title_chia_3 clearfix chudam">
        <div class="all_icon clearfix icon_chinhsach"></div>
        <p>quy định - chính sách</p>
      </div>
      <ul>
        <li><a href="page/chinh-sach-bao-hanh.html">Chính sách bảo hành</a></li>
        <li><a href="page/chinh-sach-van-chuyen.html">Chính sách vận chuyển</a></li>
        <li><a href="page/chinh-sach-doi-tra-hang.html">Chính sách đổi trả hàng</a></li>
        <li><a href="page/chinh-sach-bao-mat-thong-tin.html">Chính sách bảo mật thông tin</a></li>
        <li><a href="page/huong-dan-thanh-toan.html">Hướng dẫn thanh toán</a></li>
        <li><a href="page/huong-dan-mua-hang-online.html">Hướng dẫn mua hàng Online</a></li>
        <li><a href="page/dich-vu-van-chuyen-hang-thu-tien-tan-noi-mobilecity.html">Dịch vụ Ship COD Toàn quốc</a></li>
      </ul>
    </div>
    <div class="footer_chia_3 footerc3 clearfix">
      <div class="title_chia_3 clearfix chudam">
        <div class="all_icon clearfix icon_nhan"></div>
        <p>Đăng ký nhận bảng tin</p>
      </div>
      <div class="form_nhan clearfix" id="subscribe-form">
        <input id="subscribe-email" type="text" name="" value="" placeholder="Nhập email của bạn . . ." />
        <button id="subscribe-btn" class="btn_nhan">Gửi</button>
      </div>
      <div class="lienket clearfix">
        <div class="title_chia_3 clearfix chudam">
          <div class="all_icon clearfix icon_lienket"></div>
          <p>Liên kết</p>
        </div>
        <div class="lienket_con clearfix">
          <div class="all_icon clearfix icon_face"></div>
          <a target="_blank" href="<?php echo isset($configs['linkFacebook']) ? $configs['linkFacebook'] : null?>">
            <p>Facebook</p>
          </a>
        </div>
        <div class="lienket_con clearfix">
          <div class="all_icon clearfix icon_you"></div>
          <a target="_blank" href="<?php echo isset($configs['linkYoutube']) ? $configs['linkYoutube'] : null?>">
            <p>Youtube</p>
          </a>
        </div>
        <div class="lienket_con clearfix">
          <div class="all_icon clearfix icon_ins"></div>
          <a target="_blank" href="<?php echo isset($configs['linkGoogle']) ? $configs['linkGoogle'] : null?>">
            <p>Google +</p>
          </a>
        </div>
      </div>
    </div>
    <div class="icon_footer footerc4 clearfix">
      <div class="all_icon icon_norton clearfix"></div>
      <div class="all_icon icon_thongbao clearfix"></div>
    </div>
  </div>
</footer>

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
                <p>Tư vấn và phát triển bởi: <a href="https://sudo.vn/" target="_blank" rel="nofollow">SUDO</a></p>
              </div>
            </div>
          </section>
          <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/popup.css" />
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
  <script src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/cAlert.js"></script>
  <script src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/mlpushmenu.js"></script>
  <script src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/modernizr-custom.js"></script>
  <script src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/classie.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lightslider.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.bpopup.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.lazyload.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/functions.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/script.js"></script>
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

</html>
