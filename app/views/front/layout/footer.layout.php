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
            <address>{{# isset($configs['address']) ? $configs['address'] : null}}</address>
            <p>Điện thoại: {{# isset($configs['hotline']) ? $configs['hotline'] : null}}</p>
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
          <a target="_blank" href="{{# isset($configs['linkFacebook']) ? $configs['linkFacebook'] : null}}">
            <p>Facebook</p>
          </a>
        </div>
        <div class="lienket_con clearfix">
          <div class="all_icon clearfix icon_you"></div>
          <a target="_blank" href="{{# isset($configs['linkYoutube']) ? $configs['linkYoutube'] : null}}">
            <p>Youtube</p>
          </a>
        </div>
        <div class="lienket_con clearfix">
          <div class="all_icon clearfix icon_ins"></div>
          <a target="_blank" href="{{# isset($configs['linkGoogle']) ? $configs['linkGoogle'] : null}}">
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
