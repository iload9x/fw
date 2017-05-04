<aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Dashboard
                </li>
                <li>
                    <a href="#menuNhanh" data-toggle="collapse" aria-expanded="false">
                        Menu nhanh<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="menuNhanh" class="nav nav-second collapse">
                        <li><a href="{{# URL::base_path('admin/blog/create?type=post')}}"> Viết bài</a></li>
                        <li><a href="{{# URL::base_path('admin/blog')}}"> Quản lý blogs</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                    General Dashboard
                </li>
                <li>
                    <a href="#uielements" data-toggle="collapse" aria-expanded="false">
                        Blogs<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="uielements" class="nav nav-second collapse">
                        <li><a href="panels.html">Quản lý blogs</a></li>
                        <li><a href="typography.html">Cài đặt blogs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#tables" data-toggle="collapse" aria-expanded="false">
                        Thành viên<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="tables" class="nav nav-second collapse">
                        <li><a href="{{# URL::base_path('admin/member')}}">Danh sách</a></li>
                        <li><a href="dataTables.html">Cài đặt đăng ký</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        Cài đặt <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="forms" class="nav nav-second collapse">
                        <li><a href="{{# URL::base_path('admin/manager/blogConfigs')}}"> Cấu hình Blogs</a></li>
                        <li><a href="{{# URL::base_path('admin/manager/templates')}}"> Quản lý templates</a></li>
                        <li><a href="{{# URL::base_path('admin/manager/modules')}}"> Quản lý modules</a></li>
                        <li><a href="{{# URL::base_path('admin/manager/access')}}"> Quản lý quyền truy cập</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                    Giỏ hàng
                </li>
                <li>
                    <a href="#products" data-toggle="collapse" aria-expanded="false">
                        Sản phẩm<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="products" class="nav nav-second collapse">
                        <li><a href="{{# URL::base_path('admin/cart/products')}}">Danh sách</a></li>
                        <li><a href="{{# URL::base_path('admin/cart/products/add')}}">Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{# URL::base_path('admin/cart/categories')}}">
                    Chuyên mục sản phẩm</a>
                </li>
                <li>
                    <a href="{{# URL::base_path('admin/cart/companies')}}">
                    Hãng sản xuất</a>
                </li>
                <li>
                    <a href="{{# URL::base_path('admin/cart/types')}}">
                    Loại sản phẩm</a>
                </li>

                <li>
                    <a href="{{# URL::base_path('admin/cart/specs')}}">
                    Thông số kỹ thuật</a>
                </li>
               
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>

                    <div class="m-t-xs">
                        <span class="c-white">LUNA</span> admin theme with Dark UI style for monitoring and administration web applications.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>