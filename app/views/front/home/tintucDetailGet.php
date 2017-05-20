<section class="content clearfix">
  <ul class="breadcrumb">
    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="itemscope" class="crumb_item">
      <a itemprop="url" rel="up" class="crumb" href="http://mobilecity.vn"><span itemprop="title">Trang chủ</span></a>
      <span class="arrow"> › </span>
    </li>
    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="itemscope" class="crumb_item">
      <a itemprop="url" rel="up" class="crumb" href="/tin-tuc/"><span itemprop="title">Tin tức</span></a>
      <span class="arrow"> › </span>
    </li>
    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="itemscope" class="crumb_item">
      <a itemprop="url" rel="up" class="crumb" href="/tin-tuc-cong-nghe/"><span itemprop="title">Tin công nghệ</span></a>
    </li>
  </ul>
  <section class="left_content clearfix">
    <article>
      <h1>{{# helperLib::checkIsset($infoBlog['name'], $infoBlog['name'], null)}}</h1>
      <div class="top_content clearfix">
        <p>{{# helperLib::checkIsset($infoBlog['time_created'], $infoBlog['time_created'], null)}}</p>
        <a href="/tin-tuc-cong-nghe/">
          <p>Tin công nghệ</p>
        </a>
        <div class="box_like">
          <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;">
            <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1495244224524" name="I0_1495244224524" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=vi&amp;origin=http%3A%2F%2Fmobilecity.vn&amp;url=http%3A%2F%2Fmobilecity.vn%2Ftin-tuc%2Flo-thong-tin-galaxy-s8-chay-he-dieu-hanh-windows-10-mobile.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.9IxHDlXXj_g.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCO6dF7cABbcVEIyM2B-gevqrO6oqQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1495244224524&amp;parent=http%3A%2F%2Fmobilecity.vn&amp;pfname=&amp;rpctoken=29242700" data-gapiattached="true" title="+1"></iframe>
          </div>
        </div>
      </div>
      <div class="detail_news css_content">
        {{# helperLib::checkIsset($infoBlog['content'], $infoBlog['content'], null)}}
      </div>
      <div class="all_tags">
      </div>
    </article>
    <div class="news_lienquan clearfix">
      <div class="title_lienquan clearfix">
        <p>bài liên quan</p>
      </div>
      {{if(isset($dsLienQuan)):}}
      {{foreach($dsLienQuan as $k => $v):}}
      <div class="news_con" style="height: 226px;">
        <a href="/tin-tuc/smartphone-dep-nhu-galaxy-s7-edge-gia-chi-re-bang-1-phan-3.html">
          <div class="img_lienquan clearfix"><img src="{{# URL::base_url('/public/uploads/')}}{{# helperLib::checkIsset($v['images'][0], $v['time_created'][0], 'no-image.jpg')}}" alt="{{# helperLib::checkIsset($v['name'], $v['name'], null)}}"></div>
        </a>
        <h3 style="height: 54px;"><a href="/tin-tuc/smartphone-dep-nhu-galaxy-s7-edge-gia-chi-re-bang-1-phan-3.html">{{# helperLib::checkIsset($v['name'], $v['name'], null)}}</a></h3>
        <p>{{# helperLib::checkIsset($v['time_created'], $v['time_created'], null)}}</p>
      </div>
      {{endforeach}}
      {{endif}}
    </div>
  </section>
</section>
