{{{include front/layout/breadcrumb.layout}}}
  <div class="intro_cate clearfix">
    <h1 class="intro_cate_title">{{ isset($seo['title']) ? $seo['title'] : null}}</h1>
  </div>
  {{{include front/layout/filter.layout}}}
  <!-- filter_wrap -->
  <section class="content clearfix">
    <section class="product clearfix" style="padding-bottom: 20px;">
        {{if(isset($productList)):}} {{foreach($productList as $kProduct => $vProduct):}}
    <div class="pro_con clearfix">
      <a href="{{# $categorySlug }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html">
        <div class="pro_con_image clearfix">
        {{if(isset($vProduct['type'])):}}
          <div class="bre">
            {{foreach($vProduct['type'] as $v):}}
            {{if(!empty($v['name'])):}}
            <span class="moi" style="background:{{# $v['color']}}">{{# $v['name']}}</span>
            {{endif}}
            {{endforeach}}
          </div>
        {{endif}}
          <img src="{{# URL::base_path('/public/templates/front/')}}themes/img/load_video.svg" class="lazy" data-original="{{# URL::base_path('/public/uploads/')}}{{# isset($vProduct['avatar'][0]) ? $vProduct['avatar'][0] :''}}" alt="iPhone 6 Cũ - Fullbox" />
<!--           <div class="mask">
            <div class="mask-title">
              <div class="icon"></div>
              <div class="text">MobileCity Care</div>
            </div>
            <ul class="mask-list">
              <li>BH 12 tháng nguồn, màn hình</li>
              <li>Đổi mới 15 ngày đầu tiên</li>
              <li>Tặng ốp lưng, dán cường lực</li>
              <li>Hỗ trợ phần mềm trọn đời máy</li>
            </ul>
            <a class="mask-link" target="_blank" title="Xem chi tiết chính sách bảo hành tại MobileCity" href="page/chinh-sach-bao-hanh.html">Bảo hành vàng</a>
          </div> -->
        </div>
      </a>
      <div class="thongtin_pro clearfix">
        <div class="thongtin_pro_left clearfix">
          <p class="name_pro"><a href="{{# $categorySlug }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html">{{# isset($vProduct['name']) ? $vProduct['name'] : 'N/A'}}</a></p>
          <p class="gia_pro">{{# isset($vProduct['price']) && is_numeric($vProduct['price']) ? number_format($vProduct['price']) : 0}} ₫</p>
          {{if(isset($vProduct['counpons'])):}}
          <ul>
          {{$id = 0;}}
          {{foreach($vProduct['counpons'] as $counpon):}}
          {{if(!empty($counpon)):}}
            <li class='clearfix'>
              <p>{{# $counpon}}</p>
            </li>
          {{$id ++ ;}}
          {{if($id == 2):}}
          {{break;}}
          {{endif}}
          {{endif}}
          {{endforeach}}
          </ul>
          {{endif}}
        </div>
        <div class="thongtin_pro_right clearfix">
          <div class="all_icon icon_khuyenmai"></div>
          <a href="{{# $categorySlug }}/{{# isset($vProduct['companySlug']) ? $vProduct['companySlug'] : null }}/{{# isset($vProduct['name']) ? StringLib::convertUrl($vProduct['name']) : null }}-prd{{# $vProduct['id'] }}.html" class="btn_mua">Mua</a>
        </div>
      </div>
    </div>
    {{endforeach}} {{endif}}
    </section>
    <div class="phone"><img src="../themes/img/load_video.svg" alt="icon loading video"></div>
    <div class="btn_them clearfix"><a data-type="phone" class="more_pro" href="javascript:;">Xem thêm điện thoại</a></div>
  </section>