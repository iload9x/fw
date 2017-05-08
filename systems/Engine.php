<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title><?php echo isset($seo['title']) ? $seo['title'] : '----' ?></title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/toastr/toastr.min.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/summernote/dist/summernote.css"/>
    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="<?php echo URL::base_path() ?>/public/templates/admin-flat/styles/style.css">
    <link href="<?php echo URL::base_path() ?>/public/templates/plugins/uploader/css/jquery.fileuploader.css" media="all" rel="stylesheet">
    <link href="<?php echo URL::base_path() ?>/public/templates/plugins/uploader/css/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
    <?php if(isset($styles)):?>
    <?php foreach($styles as $v):?>
    <link href="<?php echo URL::base_path('/') ?><?php echo $v?>" media="all" rel="stylesheet">
    <?php endforeach;?>
    <?php endif;?>
    <script type="text/javascript">
        var base_url = '<?php echo URL::base_path("/") ?>';
    </script>

</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="<?php echo URL::base_path('/admin') ?>">
                    NGOAN
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="<?php echo URL::base_path('/admin/logout'); ?>" >Logout <span class="pe-7s-angle-right-circle"></span></a>
                    </li>
                    <li class=" profil-link">
                        <a href="<?php echo URL::base_path('/admin/profile'); ?>">
                            <span class="profile-address"><?php echo $globals['infoUser']['nickname'] ?></span>
                            <img src="<?php echo URL::base_path(); ?>/<?php echo $globals['infoUser']['avatar']?>" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
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
                        <li><a href="<?php echo URL::base_path('/admin/blog/create?type=post')?>"> Viết bài</a></li>
                        <li><a href="<?php echo URL::base_path('/admin/blog')?>"> Quản lý blogs</a></li>
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
                        <li><a href="<?php echo URL::base_path('/admin/member')?>">Danh sách</a></li>
                        <li><a href="dataTables.html">Cài đặt đăng ký</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        Cài đặt <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="forms" class="nav nav-second collapse">
                        <li><a href="<?php echo URL::base_path('/admin/manager/blogConfigs')?>"> Cấu hình Blogs</a></li>
                        <li><a href="<?php echo URL::base_path('/admin/manager/templates')?>"> Quản lý templates</a></li>
                        <li><a href="<?php echo URL::base_path('/admin/manager/modules')?>"> Quản lý modules</a></li>
                        <li><a href="<?php echo URL::base_path('/admin/manager/access')?>"> Quản lý quyền truy cập</a></li>
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
                        <li><a href="<?php echo URL::base_path('/admin/cart/products')?>">Danh sách</a></li>
                        <li><a href="<?php echo URL::base_path('/admin/cart/products/add')?>">Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('/admin/cart/categories')?>">
                    Chuyên mục sản phẩm</a>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('/admin/cart/companies')?>">
                    Hãng sản xuất</a>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('/admin/cart/types')?>">
                    Loại sản phẩm</a>
                </li>

                <li>
                    <a href="<?php echo URL::base_path('/admin/cart/specs')?>">
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
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                       
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs"><?php echo $name ?></h3>
                            <small>
                                Special minimal admin theme with Dark UI style for monitoring or administration web applications.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
    
<div class="row">

    <div class="col-lg-2 col-xs-6">
        <div class="panel panel-filled">

            <div class="panel-body">
                <h2 class="m-b-none">
                    206 
                </h2>
                <div class="small"> Bài viết đã được viết!</div>
                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">10:22pm</span>  </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-xs-6">
        <div class="panel panel-filled">
            <div class="panel-body">
                <h2 class="m-b-none">
                    1 
                </h2>
                <div class="small">Module đã được cài!</div>
                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">9:10am</span> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-xs-6">
        <div class="panel panel-filled">
            <div class="panel-body">
                <h2 class="m-b-none">
                    262
                </h2>
                <div class="small">Thành viên đã đăng ký!</div>
                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">05:42pm</span> </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-xs-6">
        <div class="panel panel-filled">
            <div class="panel-body">
                <h2 class="m-b-none">
                    62
                </h2>
                <div class="small">Giao diện đã cài đặt!</div>
                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Updated: <span class="c-white">04:00am</span> </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-xs-12">
        <div class="panel panel-filled" style="position:relative;height: 114px">
            <div style="position: absolute;bottom: 0;left: 0;right: 0">
                <span class="sparkline"></span>
            </div>
            <div class="panel-body">
                <div class="m-t-sm">
                    <div class="pull-right">
                        <a href="#" class="btn btn-default btn-xs">See locations</a>
                    </div>
                    <div class="c-white"><span class="label label-accent">+45</span> New visitor</div>
                    <span class="small c-white">120,312 <i class="fa fa-play fa-rotate-270 text-warning"> </i> -22%</span>
                    <!--<span class="sparkline"></span>-->
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
<div class="row">

  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-tools">
          <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
          <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Tổng quản số lượt xem
      </div>
      <div class="panel-body">
        <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
          <canvas id="barOptions" height="292" width="488" style="display: block; width: 488px; height: 292px;"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-tools">
          <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
          <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Tổng quan số bài đã viết
      </div>
      <div class="panel-body">
        <div><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
          <canvas id="lineOptions" height="292" width="488" style="display: block; width: 488px; height: 292px;"></canvas>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-body">
                <div class="table-responsive">
                    <table  class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Street Address</th>
                            <th>% Share</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Abraham</td>
                            <td>076 9477 4896</td>
                            <td>294-318 Duis Ave</td>
                            <td><div class="sparkline8"></div> </td>
                            <td>Vosselaar</td>
                            <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                        </tr>
                        <tr>
                            <td>Phelan</td>
                            <td>0500 034548</td>
                            <td>680-1097 Mi Rd.</td>
                            <td><div class="sparkline10"></div></td>
                            <td>Lavoir</td>
                            <td><a href="#" class="btn btn-default btn-xs active">View</a></td>
                        </tr>
                        <tr>
                            <td>Raya</td>
                            <td>(01315) 27698</td>
                            <td>Ap #289-8161 In Avenue</td>
                            <td><div class="sparkline11"></div></td>
                            <td>Santomenna</td>
                            <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                        </tr>
                        <tr>
                            <td>Azalia</td>
                            <td>0500 854198</td>
                            <td>226-4861 Augue. St.</td>
                            <td><div class="sparkline12"></div></td>
                            <td>Newtown</td>
                            <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                        </tr>
                        <tr>
                            <td>Garth</td>
                            <td>(01662) 59083</td>
                            <td>3219 Elit Avenue</td>
                            <td><div class="sparkline13"></div></td>
                            <td>Ternitz</td>
                            <td><a href="#" class="btn btn-default btn-xs">View</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        <div class="panel panel-b-accent m-t-sm">
            <div class="panel-body text-center p-m">
                <h2 class="font-light">
                    +280k downloads
                </h2>
                <small>New downloads from the last month.</small>
                <br/>
                120,312 <span class="slight"><i class="fa fa-play fa-rotate-270 c-white"> </i> -22%</span>
                <div class="sparkline7 m-t-xs"></div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var postDataThisMonth = <?php echo $postDataThisMonth ?>;
    var viewDataThisMonth = <?php echo $viewDataThisMonth ?>;
    var postDataLastMonth = <?php echo $postDataLastMonth ?>;
    var viewDataLastMonth = <?php echo $viewDataLastMonth ?>;
    var labelsDataThisMonth = <?php echo $labelsDataThisMonth ?>;
</script>
    </div>
    </section>

    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/pacejs/pace.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/summernote/dist/summernote.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/toastr/toastr.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/vendor/chart.js/dist/Chart.min.js"></script>

<!-- App scripts -->
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/scripts/luna.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/admin-flat/scripts/app.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/plugins/uploader/js/jquery.fileuploader.min.js"></script>
<script src="<?php echo URL::base_path() ?>/public/templates/plugins/uploader/js/custom.js"></script>
<?php if(isset($scripts)):?>
<?php foreach($scripts as $v):?>
<script src="<?php echo URL::base_path('/') ?><?php echo $v?>"></script>
<?php endforeach;?>
<?php endif;?>
</body>
</html>