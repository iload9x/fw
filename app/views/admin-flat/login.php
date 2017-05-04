 <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="{{# URL::base_path('admin'); }}" class="btn btn-accent">Back to Dashboard</a>
        </div>

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
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
                    <form action="" id="loginForm" novalidate method="POST">
                        <input type="hidden" name="_csrfToken" value="{{# $csrf_token }}">
                        <div class="form-group">
                            <label class="control-label" for="username">Tài khoản</label>
                            <input type="text" placeholder="example" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Mật khẩu</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-accent">Đăng nhập</button>
                            <a class="btn btn-default" href="{{# URL::base_path('admin/register'); }}">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->