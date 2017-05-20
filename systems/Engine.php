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
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/products.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/lightslider.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/lightgallery.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL::base_path('/public/templates/front/')?>themes/css/responsive.css" />
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
                  <a style="font-weight: bold;" href="#">Tuyển dụng</a>&nbsp;|&nbsp;
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
           	<?php echo ($infoProduct['name'][5]);die; ?>

<?php if(isset($breadCrumbs) && is_array($breadCrumbs)):?>
<ul class="breadcrumb">
<?php foreach($breadCrumbs as $kbreadCrumb => $vbreadCrumb):?>
  <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="itemscope" class="crumb_item">
    <a itemprop="url" rel="up" class="crumb" href="<?php echo $vbreadCrumb['url'] ?>"><span itemprop="title"><?php echo isset($vbreadCrumb['name']) ? $vbreadCrumb['name'] : '' ?></span></a>
  	<?php if(isset($breadCrumbs[$kbreadCrumb + 1])):?>
  	<span class="arrow"> › </span>
  	<?php endif;?>
  </li>
<?php endforeach;?>
</ul>
<?php endif;?>

<section class="clearfix">
  <section class="clearfix content_top">
    <div class="title_pro clearfix">
      <h1><?php echo isset($infoProduct['name']) ? $infoProduct['name'] : "---"?></h1>
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
        <?php if(isset($infoProduct['avatar'])):?>
          <?php foreach($infoProduct['avatar'] as $avatar):?>
          <li data-thumb="<?php echo URL::base_path('/public/uploads/')?><?php echo $avatar?>" data-sub-html="<?php echo isset($infoProduct['name']) ? $infoProduct['name'] : "---"?>" data-src="<?php echo URL::base_path('/public/uploads/')?><?php echo $avatar?>">
            <img src="<?php echo URL::base_path('/public/uploads/')?><?php echo $avatar?>" alt="<?php echo isset($infoProduct['name']) ? $infoProduct['name'] : null?>" />
          </li>
          <?php endforeach;?>
        <?php endif;?>
        </ul>
      </div>
      <div class="thongtin_pro clearfix">
        <div class="top_thongtin_pro clearfix">
          <p class="price" data-price="<?php echo isset($infoProduct['price']) ? $infoProduct['price']: 0 ?>"><?php echo isset($infoProduct['price']) ? number_format($infoProduct['price']) . ' ₫' : 'Liên hệ' ?></p>
          <div class="center_top_thong clearfix">
          <?php if(isset($infoProduct['color'])):?>
            <p>Màu sắc</p>
            <?php foreach($infoProduct['color'] as $color => $price):?>
            <div data-color="<?php echo $color?>" style="background-color:<?php echo $color?>;" data-price="<?php echo $price?>" class="colo clearfix"></div>
            <?php endforeach;?>
          <?php endif;?>
          </div>
          <p class="pro_instock_status"><i class="fa fa-check-square-o"></i><?php echo isset($infoProduct['status']) && $infoProduct['status'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></p>
        </div>
        <div class="bottom_thong clearfix">
          <?php if(!empty($infoProduct['storage'])):?>
          <div class="clearfix bonho">Bộ nhớ 
            <select id="dungluong">
            <?php foreach($infoProduct['storage'] as $storage => $price):?>
              <option value="<?php echo number_format($price)?> ₫"><?php echo $storage?>GB</option>
            <?php endforeach;?>
            </select>
          </div>
          <?php endif;?>

          <div class="baohanh">Bảo hành
            <select id="baohanh">
              <option value="<?php echo isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 ?>">Bảo hành <?php echo isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 ?> tháng</option>
            </select>
          </div>
        </div>
        <?php if(isset($infoProduct['counpons']) && !empty($infoProduct['counpons'][0]) ):?>
        <div class="box_sale clearfix">
          <p class="title_box_sale">Khuyến mãi</p>
          <ul>
            <?php foreach($infoProduct['counpons'] as $counpon):?>
              <?php if(!empty($counpon)):?>
                <li class="clearfix"><?php echo $counpon?></li>
              <?php endif;?>
            <?php endforeach;?>
          </ul>
        </div>
        <?php endif;?>

        <ul class="bust clearfix">
          <li class="clearfix">Trong hộp có: <?php echo isset($infoProduct['inbox']) ? $infoProduct['inbox']: '' ?></li>
          <li>Giao hàng <?php echo isset($infoProduct['delivery']) ? $infoProduct['delivery']: '' ?> <a target="_blank" href="#">Tìm hiểu thêm</a></li>
        </ul>
        <div class="clearfix">
        <?php if(isset($infoProduct['status']) && $infoProduct['status'] == 1):?>
          <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
            <p>Mua ngay
              <br/><span>Giao hàng tận nơi miễn phí</span></p>
          </a>
        <?php endif;?>
        <?php if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):?>
          <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 clearfix">
            <p>MUA TRẢ GÓP
              <br/> <span>Lãi suất thấp</span></p>
          </a>
        <?php endif;?>
        </div>
        <div class="all_icon icon_phone clearfix"></div>
        <p class="hlmua mobile_none clearfix">Đặt mua: <span class="chudam"><?php echo isset($configs['hotline']) ? $configs['hotline'] : 'N/A'?></span> (HN) : 7:00 - 22:00</p>
        <p class="hlmua_mobile mobile_block clearfix">Đặt mua Hà Nội: <a href="#" class="chudam"><?php echo isset($configs['hotline']) ? $configs['hotline'] : 'N/A'?></a>
      </div>
    </section>
    <?php if(isset($random_phukien)):?>
    <aside class="right_content_top clearfix">
      <?php foreach($random_phukien as $phukien):?>
      <div class="pk_con clearfix">
        <a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id']?>.html">
          <div class="img_pk_con clearfix"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="<?php echo URL::base_url('/public/uploads/')?><?php echo isset($phukien['avatar'][0]) ? $phukien['avatar'][0] : null ?>" alt="<?php echo isset($phukien['name']) ? $phukien['name'] : null ?>" /></div>
        </a>
        <div class="title_pk_con clearfix">
          <p><a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id']?>.html"><?php echo isset($phukien['name']) ? $phukien['name'] : 0 ?></a></p>
          <p class="gia_pk_sing clearfix"><?php echo isset($phukien['price']) ? number_format($phukien['price']) : 0 ?> ₫</p>
          <a href="<?php echo URL::base_url()?>/<?php echo $phukien['categorySlug']?>/<?php echo $phukien['companySlug']?>/<?php echo isset($phukien['name']) ? StringLib::convertUrl($phukien['name']) : null ?>-prd<?php echo $phukien['id']?>.html" class="btn_mua_pk clearfix">mua</a>
        </div>
      </div>
      <?php endforeach;?>
    </aside>
    <?php endif;?>
  </section>
  <section class="clearfix content_main">
  <?php if(isset($infoProduct['specs']) || !empty($infoProduct['videoLinks'][0])):?>
    <section class="content_main_top clearfix">
      <?php if(isset($infoProduct['specs']) && is_array($infoProduct['specs'])):?>
      <div class="detail_pro_left detail_pro_left_phone clearfix">
        <div class="title_main_content clearfix">
          <p>Thông số kỹ thuật</p>
        </div>
        <div class="clearfix text_tt"><span>Màn hình:</span>
          <p><?php echo isset($infoProduct['specs']['display']) ? $infoProduct['specs']['display'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Hệ điều hành:</span>
          <p><?php echo isset($infoProduct['specs']['operatingSystem']) ? $infoProduct['specs']['operatingSystem'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Camera sau:</span>
          <p><?php echo isset($infoProduct['specs']['rear_camera']) ? $infoProduct['specs']['rear_camera'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Camera trước:</span>
          <p><?php echo isset($infoProduct['specs']['front_camera']) ? $infoProduct['specs']['front_camera'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>CPU:</span>
          <p><?php echo isset($infoProduct['specs']['processor']) ? $infoProduct['specs']['processor'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>RAM:</span>
          <p><?php echo isset($infoProduct['specs']['RAM']) ? $infoProduct['specs']['RAM'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Bộ nhớ trong:</span>
          <p><?php echo isset($infoProduct['specs']['storage']) ? $infoProduct['specs']['storage'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Thẻ SIM:</span>
          <p><?php echo isset($infoProduct['specs']['sim']) ? $infoProduct['specs']['sim'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Dung lượng pin:</span>
          <p><?php echo isset($infoProduct['specs']['battery']) ? $infoProduct['specs']['battery'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Bảo mật:</span>
          <p><?php echo isset($infoProduct['specs']['security']) ? $infoProduct['specs']['security'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Chống nước:</span>
          <p><?php echo isset($infoProduct['specs']['water_resistance']) ? $infoProduct['specs']['water_resistance'] : 'N/A'?></p>
        </div>
        <div class="clearfix text_tt"><span>Trọng lượng:</span>
          <p><?php echo isset($infoProduct['specs']['weight']) ? $infoProduct['specs']['weight'] : 'N/A'?></p>
        </div>
        <div class="detail_pro_more css-content clearfix"></div>
        <p style="clear: both;"></p>
        <div class="btn_more clearfix">
          <p>Xem thêm cấu hình chi tiết</p>
        </div>
      </div>
      <?php endif;?>
      <?php if(isset($infoProduct['videoLinks']) && is_array($infoProduct['videoLinks']) && !empty($infoProduct['videoLinks'][0])):?>
      <div class="detail_pro_right clearfix">
        <div class="clearfix title_main_content">
          <p>Video <?php echo isset($infoProduct['name']) ? $infoProduct['name'] : ""?></p>
        </div>
        <ul id="slider_video">
          <li id="video" data-iframe="https://www.youtube.com/watch?v=<?php echo isset($infoProduct['videoLinks'][0]) ? $infoProduct['videoLinks'][0] : ""?>">
            <iframe src="https://www.youtube.com/embed/$1?autoplay=1" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
          </li>
          <?php foreach($infoProduct['videoLinks'] as $link):?>
          <li data-iframe="https://www.youtube.com/watch?v=<?php echo $link?>">
            <img src="http://img.youtube.com/vi/<?php echo $link?>/mqdefault.jpg" />
          </li>
          <?php endforeach;?>
        </ul>
      </div>
      <?php endif;?>
    <?php if(isset($random_phukien)):?>
      <aside class="pro_cungloai clearfix">
        <div class="clearfix title_main_content">
          <p>Sản phẩm cùng phân khúc</p>
        </div>
      <?php foreach($random_dienthoai as $dienthoai):?>
        <div class="pro_cungloai_con clearfix">
          <div class="img_cungloai clearfix">
            <a href="<?php echo URL::base_url()?>/<?php echo $dienthoai['categorySlug']?>/<?php echo $dienthoai['companySlug']?>/<?php echo isset($dienthoai['name']) ? StringLib::convertUrl($dienthoai['name']) : null ?>-prd<?php echo $dienthoai['id']?>.html"><img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="<?php echo URL::base_url('/public/uploads/')?><?php echo isset($dienthoai['avatar'][0]) ? $dienthoai['avatar'][0] : null ?>" alt="<?php echo isset($dienthoai['name']) ? $dienthoai['name'] : 0 ?>" /></a>
          </div>
          <div class="detail_cungloai clearfix">
            <p><a href="<?php echo URL::base_url()?>/<?php echo $dienthoai['categorySlug']?>/<?php echo $dienthoai['companySlug']?>/<?php echo isset($dienthoai['name']) ? StringLib::convertUrl($dienthoai['name']) : null ?>-prd<?php echo $dienthoai['id']?>.html"><?php echo isset($dienthoai['name']) ? $dienthoai['name'] : 0 ?></a></p>
          </div>
        </div>
      <?php endforeach;?>
    </aside>
    <?php endif;?>
    </section>
    <?php endif;?>
    <section id="box_detail" class="clearfix">
      <section class="left_pro">
        <div class="title_main_content">
          <h2 class="title_sp">Thông tin chi tiết <?php echo isset($infoProduct['name']) ? $infoProduct['name'] : ""?></h2></div>
        <section id="content" class="clearfix css_content detail_pk">
          <div class="box">
            <?php echo isset($infoProduct['detail']) ? $infoProduct['detail'] : "Không có thông tin!"?>
          </div>
        </section>
        <div class="btn_show clearfix">
          <p><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Xem thêm chi tiết bài viết<i class="fa fa-long-arrow-down" aria-hidden="true"></i></p>
        </div>
        <section class="plus_pro clearfix">
          <div class="thongtin_plus clearfix">
            <div class="anh_thongtin_plus clearfix">
              <img src="http://mobilecity.vn/themes/img/load_video.svg" class="lazy" data-original="<?php echo URL::base_path('/public/uploads/')?><?php echo isset($infoProduct['avatar'][0]) ? $infoProduct['avatar'][0] : ""?>" alt="<?php echo isset($infoProduct['name']) ? $infoProduct['name'] : "---"?>" />
            </div>
            <p><?php echo isset($infoProduct['name']) ? $infoProduct['name'] : ""?></p>
            <p class="price_plus"><?php echo isset($infoProduct['price']) ? number_format($infoProduct['price']) . '₫': "Liên hệ"?></p>
          </div>
          <div class="clearfix btn_plus">
          <?php if(isset($infoProduct['status']) && $infoProduct['status'] == 1):?>
            <a href="javascript:;" class="btn-order-phone btn_pro_mua btn1 clearfix">
              <p>Mua ngay
                <br/><span>Giao hàng tận nơi miễn phí</span></p>
            </a>
          <?php endif;?>
          <?php if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):?>
            <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 clearfix">
              <p>MUA TRẢ GÓP
                <br/> <span>Lãi suất thấp</span></p>
            </a>
          <?php endif;?>
          </div>
        </section>
        <!-- all box coment website -->
        <div class="coment_web clearfix">
          <aside class="clearfix">
            <h4 class="clearfix" style="font-size: 20px;color: #424242;margin: 5px 0 20px 0;float: left;font-weight: normal;max-width: 658px;display: block;">Đánh giá về <?php echo isset($infoProduct['name']) ? $infoProduct['name'] : "---"?></h4>
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
          <p><?php echo isset($infoProduct['name']) ? $infoProduct['name'] : ""?></p>
          <p class="price_left"><?php echo isset($infoProduct['price']) ? number_format($infoProduct['price']) . '₫' : "Liên hệ"?></p>
          <?php if(isset($infoProduct['counpons']) && !empty($infoProduct['counpons'][0])):?>
          <div class="box_sale clearfix">
            <p class="title_box_sale">Khuyến mãi</p>
            <ul>
            <?php foreach($infoProduct['counpons'] as $counpon):?>
              <?php if(!empty($counpon)):?>
              <li class="clearfix"><?php echo $counpon?></li>
              <?php endif;?>
            <?php endforeach;?>
            </ul>
          </div>
          <?php endif;?>
          <div class="clearfix">
          <?php if(isset($infoProduct['status']) && $infoProduct['status'] == 1):?>
              <a href="javascript:;" class="btn-order-phone btn_pro_mua right_mua btn1 clearfix">
                <p>Mua ngay
                  <br/><span>Giao hàng tận nơi miễn phí</span></p>
              </a>
          <?php endif;?>
          <?php if(isset($infoProduct['tra_gop']) && $infoProduct['tra_gop'] == 1):?>
              <a href="http://mobilecity.vn/mua-tra-gop/iphone-5c-cu-prd1064.html" class="btn_pro_mua btn2 right_mua clearfix">
                <p>MUA TRẢ GÓP
                  <br/> <span>Lãi suất thấp</span></p>
              </a>
          <?php endif;?>
          </div>
          <div class="icon icon_phone clearfix"></div>
          <p class="clearfix"><span class="chudam"><?php echo isset($configs['hotline'])?$configs['hotline']:'N/A'?></span> (HN)</p>
        </aside>
      </section>
    </section>
  </section>
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
                <p>Tư vấn và phát triển bởi: <a href="#" target="_blank" rel="nofollow">SUDO</a></p>
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
            background-image: url('<?php echo URL::base_path('/public/templates/front/')?>themes/img/all_icon.png');
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
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lightgallery.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-thumbnail.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-fullscreen.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-autoplay.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-hash.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-pager.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-share.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-video.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lg-zoom.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.stickyelement.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.bpopup.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/lightslider.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/jquery.lazyload.min.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/functions.js"></script>
  <script type="text/javascript" src="<?php echo URL::base_path('/public/templates/front/')?>themes/js/script.js"></script>
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
      var proLink = '<?php echo URL::thisUrl()?>';
      var proName = $('.popup-product-name').html();
      var proColor = $('.popup-product-color-item.active').attr('data-name');
      if (typeof proColor == 'undefined') {
        proColor = 'Không chọn';
      }
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
          categoryId: <?php echo $infoProduct['categoryId']?>,
          productId: <?php echo $infoProduct['id']?>,
          link: '<?php echo URL::thisUrl()?>',
          price: <?php echo $infoProduct['price']?>,
          gender: cusGender,
          fullname: cusName,
          phone: cusPhone,
          email: cusEmail,
          address: cusAddress,
          note: cusNote
        };
        $.ajax({
            type:'post',
            url:'<?php echo URL::base_url()?>/orders/send',
            data: data,
            dataType:'json',
            beforeSend:function(){
              $('.popup-customer-info').append('<img class="loading" src="<?php echo URL::base_path('/public/templates/front/')?>themes/img/loading.gif"/>');
              btnOrder.prop('disabled', true);
            },
            success:function(result){
              if (result.status == 1) {
                $('.popup-customer-info').html('<div class="popup-message success">Chúc mừng quý khách đã đặt hàng thành công! Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất. Xin cảm ơn!<div>');
              } else {
                alert(result.message);
                btnOrder.prop('disabled', false);
                $('.loading').remove();
              }
            }
        })
      }
    });
  });
  </script>
</body>
<div id="popup-order-product" class="sudo-popup" style="left: 299.5px; position: absolute; top: 418px; z-index: 100001; display: none; opacity: 1;">
  <div class="popup-close" onclick="closebPopup('popup-order-product')"><i class="fa fa-times" aria-hidden="true"></i></div>
  <div class="popup-title"><?php echo helperLib::checkIsset($infoProduct['title'],$infoProduct['title'],null) ?></div>
  <div class="popup-main">
    <div class="popup-product-info">
      <div class="popup-product-img"><img src="<?php echo URL::base_url('/public/uploads/')?><?php echo helperLib::checkIsset($infoProduct['avatar'][0],$infoProduct['avatar'][0],null) ?>" alt="iPhone 7 Cũ - Fullbox"></div>
      <p class="popup-product-name"><?php echo helperLib::checkIsset($infoProduct['name'],$infoProduct['name'],null) ?></p>
      <p class="popup-product-price" data-price="1190<?php echo helperLib::checkIsset($infoProduct['price'], $infoProduct['price'], 0) ?>" data-realprice="<?php echo helperLib::checkIsset($infoProduct['price'], $infoProduct['price'], 0) ?>"><?php echo helperLib::checkIsset($infoProduct['price'], number_format($infoProduct['price']),null) ?> ₫</p>
      <div class="clear"></div>
      <div class="popup-product-color">
        <div class="popup-product-color-title">Chọn màu:</div>
          <?php if(isset($infoProduct['color'])):?>
            <?php foreach($infoProduct['color'] as $color => $price):?>
            <div data-color="<?php echo $color?>" style="background-color:<?php echo $color?>;" data-price="<?php echo $price?>" data-name="Đen" class="popup-product-color-item"></div>
            <?php endforeach;?>
          <?php endif;?>
      </div>
          <?php if(!empty($infoProduct['storage'])):?>
          <div class="popup-product-storage">Chọn bộ nhớ:
            <select class="popup-product-storage-select">
            <?php foreach($infoProduct['storage'] as $storage => $price):?>
              <option value="<?php echo $price?>"><?php echo $storage?>GB</option>
            <?php endforeach;?>
            </select>
          </div>
          <?php endif;?>
      <div class="popup-product-warranty">Bảo hành: 
        <select class="popup-product-warranty-select">
          <option value="<?php echo isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 ?>">Bảo hành <?php echo isset($infoProduct['guarantee']) ? $infoProduct['guarantee']: 0 ?> tháng</option>
        </select>
      </div>
    </div>
    <div class="popup-customer-info">
      <div class="popup-customer-info-title">Thông tin người mua</div>
      <div class="popup-customer-info-group">
        <div class="popup-customer-info-item-13">
          <select class="customer-gender">
            <option value="1">Anh</option>
            <option value="2">Chị</option>
          </select>
        </div>
        <div class="popup-customer-info-item-23">
          <input type="text" class="customer-name" name="customer-name" placeholder="Họ tên bạn (bắt buộc)">
        </div>
      </div>
      <div class="popup-customer-info-group">
        <div class="popup-customer-info-item-2">
          <input type="text" class="customer-phone" name="customer-phone" placeholder="Số điện thoại (bắt buộc)">
        </div>
        <div class="popup-customer-info-item-2">
          <input type="text" class="customer-email" name="customer-email" placeholder="Địa chỉ email (bắt buộc)">
        </div>
      </div>
      <div class="popup-customer-info-group">
        <div class="popup-customer-info-item-1">
          <textarea class="customer-address" placeholder="Địa chỉ nhận hàng"></textarea>
        </div>
      </div>
      <div class="popup-customer-info-group">
        <div class="popup-customer-info-item-1">
          <textarea class="order-note" placeholder="Ghi chú đơn hàng"></textarea>
        </div>
      </div>
      <div class="popup-customer-info-group">
        <div class="popup-customer-info-item-1">
          <button class="popup-order-btn" data-id="485">Đặt hàng ngay</button>
        </div>
      </div>
    </div>
  </div>
</div>
</html>
