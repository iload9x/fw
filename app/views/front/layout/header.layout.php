<header>
  <div class="bocnoidung clearfix">
    <div class="logo clearfix">
      <a href="index.html">
        <div class="icon_logo clearfix" style="background-image: url({{# isset($configs['logo']) ? $configs['logo'] : null}});background-repeat: no-repeat;"></div>
      </a>
    </div>
    <div class="input_search clearfix">
      <form method="GET" action="{{# URL::base_path()}}/tim-kiem.html">
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
          <a href="{{# URL::base_path()}}/dien-thoai.html">
            <div class="all_icon clearfix icon_dienthoai"></div>
            <p>Điện thoại</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_1">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Hãng sản xuất</p>
              </div>
              <ul>
                {{if(isset($dsCompanyDienThoai)):}}
                  {{foreach($dsCompanyDienThoai as $company):}}
                    <li><a href="{{# URL::base_path()}}/dien-thoai/{{# $company['slug']}}.html">{{# $company['name']}}</a></li>
                  {{endforeach}}
                {{endif}}
              </ul>
            </div>
            <div class="right_menu clearfix">
              <div class="title_menu clearfix">
                <p>Mức giá</p>
              </div>
              <ul>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-1-trieu">Dưới 1 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-2-trieu">Dưới 2 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-3-trieu">Dưới 3 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-5-trieu">Dưới 5 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-8-trieu">Dưới 8 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=duoi-10-trieu">Dưới 10 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/dien-thoai.html?gia=tren-10-trieu">Trên 10 triệu</a></li>
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
          <a href="{{# URL::base_path()}}/may-tinh-bang.html">
            <div class="all_icon icon_tablet"></div>
            <p>Tablet</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_2">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Hãng sản xuất</p>
              </div>
              <ul>
                {{if(isset($dsCompanyTablet)):}}
                  {{foreach($dsCompanyTablet as $company):}}
                    <li><a href="{{# URL::base_path()}}/may-tinh-bang/{{# $company['slug']}}.html">{{# $company['name']}}</a></li>
                  {{endforeach}}
                {{endif}}              </ul>
            </div>
            <div class="right_menu clearfix">
              <div class="title_menu clearfix">
                <p>Mức giá</p>
              </div>
              <ul>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-1-trieu">Dưới 1 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-2-trieu">Dưới 2 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-3-trieu">Dưới 3 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-5-trieu">Dưới 5 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-8-trieu">Dưới 8 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=duoi-10-trieu">Dưới 10 triệu</a></li>
                <li><a href="{{# URL::base_path()}}/may-tinh-bang.html?gia=tren-10-trieu">Trên 10 triệu</a></li>
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
          <a href="{{# URL::base_path()}}/phu-kien.html">
            <div class="all_icon icon_phukien"></div>
            <p>Phụ kiện</p>
          </a>
          <div class="sub-menu clearfix" id="box_menu_3">
            <div class="left_menu clearfix">
              <div class="title_menu clearfix">
                <p>Danh mục phụ kiện</p>
              </div>
              <ul>
                {{if(isset($dsCompanyPhuKien)):}}
                  {{foreach($dsCompanyPhuKien as $company):}}
                    <li><a href="{{# URL::base_path()}}/phu-kien/{{# $company['slug']}}.html">{{# $company['name']}}</a></li>
                  {{endforeach}}
                {{endif}}
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
