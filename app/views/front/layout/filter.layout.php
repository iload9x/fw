<div class="filter_wrap clearfix">
  <ul class="filter">
    <li class="first-li">Tìm theo <i class="icon-arrfilter"></i></li>
    <li>
      <a href="javascript:;">Mức giá<span class="arrdown"></span></a>
      <ul class="dropfilter">
        <li>
          <a class="checked" href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}.html">Tất cả</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-1-trieu">Dưới 1 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-2-trieu">Dưới 2 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-3-trieu">Dưới 3 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-5-trieu">Dưới 5 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-8-trieu">Dưới 8 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=duoi-10-trieu">Dưới 10 triệu</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?gia=tren-10-trieu">Trên 10 triệu</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;">Hãng sản xuất<span class="arrdown"></span></a>
      <ul class="dropfilter tcolum">
        <li class="nofloat"><a class="checked" href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}.html">Tất cả</a></li>
        {{if(isset($companyList) && is_array($companyList)):}}
        <li>
        {{foreach($companyList as $company):}}
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}/{{# $company['slug']}}.html">{{# $company['name']}}</a>
        {{endforeach}}
        </li>
        <!-- <li>
          <a href="../dien-thoai-lenovo/index.html">Lenovo</a>
          <a href="../dien-thoai-wiko/index.html">Wiko</a>
        </li> -->
        {{endif}}
      </ul>
    </li>
    <li class="last-li"><a href="javascript:;">Sắp xếp theo giá<span class="arrdown"></span></a>
      <ul class="dropfilter" style="width: 160px;">
        <li>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?sort=ASC">Giá thấp đến cao</a>
          <a href="{{# URL::base_url()}}/{{# isset($categorySlug) ? $categorySlug : null}}{{# isset($companySlug) ? "/{$companySlug}.html" : ".html" }}?sort=DESC">Giá cao đến thấp</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
