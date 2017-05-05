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
    <link href="<?php echo URL::base_path() ?><?php echo $v?>" media="all" rel="stylesheet">
    <?php endforeach;?>
    <?php endif;?>
    <script type="text/javascript">
        var base_url = '<?php echo URL::base_path() ?>';
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
                <a class="navbar-brand" href="<?php echo URL::base_path('admin') ?>">
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
                        <a href="<?php echo URL::base_path('admin/logout'); ?>" >Logout <span class="pe-7s-angle-right-circle"></span></a>
                    </li>
                    <li class=" profil-link">
                        <a href="<?php echo URL::base_path('admin/profile'); ?>">
                            <span class="profile-address"><?php echo $globals['infoUser']['nickname'] ?></span>
                            <img src="<?php echo URL::base_path($globals['infoUser']['avatar']); ?>" class="img-circle" alt="">
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
                        <li><a href="<?php echo URL::base_path('admin/blog/create?type=post')?>"> Viết bài</a></li>
                        <li><a href="<?php echo URL::base_path('admin/blog')?>"> Quản lý blogs</a></li>
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
                        <li><a href="<?php echo URL::base_path('admin/member')?>">Danh sách</a></li>
                        <li><a href="dataTables.html">Cài đặt đăng ký</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        Cài đặt <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="forms" class="nav nav-second collapse">
                        <li><a href="<?php echo URL::base_path('admin/manager/blogConfigs')?>"> Cấu hình Blogs</a></li>
                        <li><a href="<?php echo URL::base_path('admin/manager/templates')?>"> Quản lý templates</a></li>
                        <li><a href="<?php echo URL::base_path('admin/manager/modules')?>"> Quản lý modules</a></li>
                        <li><a href="<?php echo URL::base_path('admin/manager/access')?>"> Quản lý quyền truy cập</a></li>
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
                        <li><a href="<?php echo URL::base_path('admin/cart/products')?>">Danh sách</a></li>
                        <li><a href="<?php echo URL::base_path('admin/cart/products/add')?>">Thêm sản phẩm</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('admin/cart/categories')?>">
                    Chuyên mục sản phẩm</a>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('admin/cart/companies')?>">
                    Hãng sản xuất</a>
                </li>
                <li>
                    <a href="<?php echo URL::base_path('admin/cart/types')?>">
                    Loại sản phẩm</a>
                </li>

                <li>
                    <a href="<?php echo URL::base_path('admin/cart/specs')?>">
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
  <div class="col-md-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Nội dung</a></li>
        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Thông số kỹ thuật</a></li>
        <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Hình ảnh</a></li>
      </ul>
      <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
          <div class="loader">
            <div class="loader-spin"></div>
          </div>
          <div class="panel-body">
            <?php if(isset($validate['errors']) && is_array($validate['errors'])):?>
            <div class="alert alert-danger" role="alert" style="">
              <?php   foreach($validate['errors'] as $v):?>
              <div><?php echo $v; ?></div>
              <?php   endforeach; ?>
            </div>
            <?php endif;?> <?php if(isset($validate['success'])):?>
            <div class="alert alert-success" role="alert" style="border-color:#3d6f5f;background:#3d6f5f"><?php echo $validate['success']; ?></div>
            <?php endif;?>
            <form action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_csrfToken" value="<?php echo $csrf_token?>">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputName">Tên:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
                    <input type="text" id="txtName" name="name" class="form-control" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">URL:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-link"></i></div>
                    <input type="text" id="txtUrl" name="url" class="form-control" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Giá sản phẩm:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                    <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="4">4GB</option>
                            <option value="8">8GB</option>
                            <option value="16">16GB</option>
                            <option value="32">32GB</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="4">4GB</option>
                            <option value="8">8GB</option>
                            <option value="16">16GB</option>
                            <option value="32">32GB</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12 col-xs-12 col-sm-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="white">Màu trắng</option>
                            <option value="black">Màu đen</option>
                            <option value="gold">Màu vàng</option>
                            <option value="sliver">Màu bạc</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Trong hộp có: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Bảo hành: </div>
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="0">Không có bảo hành</option>
                            <option value="1">1 tháng</option>
                            <option value="12">12 tháng</option>
                            <option value="24">24 tháng</option>
                          </select>
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Giao hàng: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Khuyến mãi 1: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả chỉ tiết sản phẩm:</label>
                  <textarea class="form-control txtContent summernote" name="detail"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Avatar:</label>
                  <input type="file" name="files">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputName">Danh mục:</label>
                  <select class="form-control select2_demo_2" name="categoryId" style="width: 100%">
                    <?php if(isset($dsCategory)):?> <?php foreach($dsCategory as $v):?>
                    <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                    <?php endforeach;?> <?php endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Hãng sản xuất:</label>
                  <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                    <?php if(isset($dsCompany)):?> <?php foreach($dsCompany as $v):?>
                    <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                    <?php endforeach;?> <?php endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Thông số kỹ thuật:</label>
                  <select class="form-control select2_demo_2" name="specsId" style="width: 100%">
                    <?php if(isset($dsSpecs)):?> <?php foreach($dsSpecs as $v):?>
                    <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                    <?php endforeach;?> <?php endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Loại sản phẩm:</label>
                  <select class="form-control select2_demo_2" name="typeId" style="width: 100%">
                    <?php if(isset($dsType)):?> <?php foreach($dsType as $v):?>
                    <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                    <?php endforeach;?> <?php endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Keyword:</label>
                  <textarea class="form-control" name="keyword"></textarea>
                  <span class="pull-right">Keyword:0</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả:</label>
                  <textarea class="form-control" name="description"></textarea>
                  <span class="pull-right">0: ký tự</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Tag:</label>
                  <textarea class="form-control" name="tag"></textarea>
                  <span class="pull-right">Tags:0</span>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-w-md btn-primary btn-squared btnOk" name="btnOk" value="publish">Public <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                <button class="btn btn-w-md btn-default btn-squared btnOk" name="btnOk" value="draf">Lưu nháp <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
              </div>
          </div>
        </div>
        </form>
        <div id="tab-2" class="tab-pane">
          <div class="panel-body">
            <form id="specsForm" method="post">
              <input type="hidden" name="_csrfToken" value="<?php echo $csrf_token?>">
              <input type="hidden" name="type" value="ajax">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputName">Tên định danh:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="name" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName">Hệ điều hành:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[operatingSystem]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Màn hình:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[display]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Vi xử lý:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[processor]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Bộ nhớ trong:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[storage]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Khe cắm mở rộng:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[expandable]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">RAM:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[RAM]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">SIM:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[sim]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName">Camera sau:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[rear_camera]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Camera trước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[front_camera]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Kết nối:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[connectivity]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Sạc:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[charging]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">PIN:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[battery]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Chống nước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[water_resistance]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Bảo mật:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[security]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Kích thước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[dimensions]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-w-md btn-primary btn-squared" name="btnOk" value="publish">Thêm <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
              </div>
            </form>
          </div>
        </div>
        <div id="tab-3" class="tab-pane">
          <div class="loader">
            <div class="loader-spin"></div>
          </div>
          <div class="panel-body">
            <form id="uploadImages" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_csrfToken" value="<?php echo $csrf_token?>">
              <div class="col-md-4">
                <div class="panel">
                  <div class="panel-heading">Chọn ảnh để tải lên</div>
                  <div class="panel-body">
                    <input type="file" id="selectImages" name="files">
                  </div>
                  <div class="panel-footer">
                    <button name="btnOk" class="btnOk btn btn-w-md btn-primary">Tải lên <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                  </div>
                </div>
              </div>
            </form>
            <div class="col-md-8">
              <div class="panel">
                <div class="panel-heading">Danh sách ảnh đã tải lên</div>
                <div class="panel-body listImageUploaded">
                  <?php if(isset($dsImages)):?> <?php foreach($dsImages as $v):?>
                  <div class="col-md-3" style="position: relative; margin-bottom:5px;">
                    <img src="<?php echo URL::base_path('public/uploads/')?><?php echo $v?>" width="100%">
                    <div class="lg-image">
                      <button class="btn btn-default btn-xs btnXem">Xem</button>
                      <button class="btn btn-default btn-xs btnCopy">Copy</button>
                    </div>
                  </div>
                  <?php endforeach;?> <?php endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
<script src="<?php echo URL::base_path() ?><?php echo $v?>"></script>
<?php endforeach;?>
<?php endif;?>
</body>
</html>