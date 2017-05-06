<section class="content">
    <div class="back-link">
      <a href="{{# URL::base_path('/admin'); }}" class="btn btn-accent">Back to Dashboard</a>
    </div>

    <div class="container-center lg animated slideInDown">


      <div class="view-header">
        <div class="header-icon">
          <i class="pe page-header-icon pe-7s-add-user"></i>
        </div>
        <div class="header-title">
          <h3>Register</h3>
          <small>
            Please enter your data to register.
          </small>
        </div>
      </div>

      <div class="panel panel-filled">
        <div class="panel-body">
          {{ if(isset($validate['errors']) && is_array($validate['errors'])){
            foreach($validate['errors'] as $v) { }}
            <p style="color:#ff5f5f">{{# $v}}</p>
          {{
             }
            } 
          }}
          <form action="" id="loginForm" novalidate="" method="POST">
          <input type="hidden" name="_csrfToken" value="{{# $csrf_token }}">
            <div class="row">
              <div class="form-group col-lg-6">
                <label>Tài khoản</label>
                <input type="" value="" id="username" class="form-control" name="username">
                <span class="help-block small">Your unique username to app</span>
              </div>
              <div class="form-group col-lg-6">
                <label>Mật khẩu</label>
                <input type="password" value="" id="password" class="form-control" name="password">
                <span class="help-block small">Your hard to guess password</span>
              </div>
              <div class="form-group col-lg-6">
                <label>Tên hiện thị</label>
                <input type="text" value="" id="nickname" class="form-control" name="nickname">
                <span class="help-block small">Please repeat your pasword</span>
              </div>
              <div class="form-group col-lg-6">
                <label>Địa chỉ EMAIL</label>
                <input type="" value="" id="email" class="form-control" name="email">
                <span class="help-block small">Your address email to contact</span>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-accent">Đăng ký</button>
              <a class="btn btn-default" href="{{# URL::base_path('/admin/login'); }}">Đăng nhập</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>