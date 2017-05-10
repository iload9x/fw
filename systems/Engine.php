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
<div class="col-md-12">
<div class="tabs-container">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Nội dung</a></li>
  <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Hình ảnh</a></li>
</ul>
<div class="tab-content">
  <div id="tab-1" class="tab-pane active">
  	<div class="loader"><div class="loader-spin"></div></div>
    <div class="panel-body">
    <?php if(isset($validate['errors']) && is_array($validate['errors'])):?>
    	<div class="alert alert-danger" role="alert" style="">
    	<?php   foreach($validate['errors'] as $v):?>
    	<div><?php echo $v; ?></div>
    	<?php   endforeach; ?>
    	</div>
    <?php endif;?>
    <?php if(isset($validate['success'])):?>
	<div class="alert alert-success" role="alert" style="border-color:#3d6f5f;background:#3d6f5f"><?php echo $validate['success']; ?></div>
    <?php endif;?>
    <form action="" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="_csrfToken" value="<?php echo $csrf_token?>">
    	<input type="hidden" name="type" value="<?php echo $type?>">
    	<input type="hidden" name="id" value="<?php echo isset($infoBlog['id'])?$infoBlog['id']:0?>">
      	<div class="col-md-8">
			<div class="form-group">
				<label for="exampleInputName">Tên:</label>
				<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
						<input type="text" value="<?php echo isset($infoBlog['name'])?$infoBlog['name']:null?>" name="name" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
		    </div>
	      	<div class="form-group">
		      	<label for="exampleInputName">URL:</label>
		      	<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-link"></i></div>
						<input type="text" value="<?php echo isset($infoBlog['name'])? StringLib::convertUrl($infoBlog['name']):null?>" name="url" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Tiêu đề:</label>
		      	<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
						<input type="text" value="<?php echo isset($infoBlog['title'])?$infoBlog['title']:null?>" name="title" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
	      	</div> 
	      	<div class="form-group">
		      	<label for="exampleInputName">Nội dung:</label>
		      	<textarea class="form-control txtContent" name="content"><?php echo isset($infoBlog['content'])?$infoBlog['content']:null?></textarea>
	      	</div>
            <?php if(isset($infoBlog['images']) && count($infoBlog['images'])):?>
            <div class="col-md-12 css2">
              <div class="col-md-12 css1">
                <div class="rowItem col-md-12">
                <?php foreach($infoBlog['images'] as $image):?>
                  <div class="col-md-3" style="position: relative; margin-bottom:5px;text-align: center;">
                    <input type="hidden" name="images_old[]" value="<?php echo $image?>">
                    <img src="<?php echo URL::base_path('/public/uploads/')?><?php echo $image?>" style="max-width:100%;height:128px">
                    <div class="lg-image">
                      <button class="btn btn-default btn-xs btnXem">Xem</button>
                      <button class="btn btn-danger btn-xs btnDelete">Xóa</button>
                    </div>
                  </div>
                <?php endforeach;?>
                </div>
              </div>
            </div>
            <?php endif;?>
            <div class="form-group">
              <label for="">Avatar:</label>
              <input type="file" name="files">
            </div>
      	</div>
      	<div class="col-md-4">
			<div class="form-group">
		      	<label for="exampleInputName">Chọn thư mục:</label>
		      	<select class="form-control" name="parent">
		      	<option value="">Chọn thư mục</option>
	      			<?php   blogLib::treeMenuCat($dsCatParentRoot, '', isset($infoBlog['parent'])?$infoBlog['parent']:null); ?>
		      	</select>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Keyword:</label>
		      	<textarea class="form-control" name="keyword"><?php echo isset($infoBlog['keyword'])?$infoBlog['keyword']:null?></textarea>
	      		<span class="pull-right">Keyword:<?php echo isset($infoBlog['keyword'])? count(explode(',', $infoBlog['keyword'])):0?></span>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Mô tả:</label>
		      	<textarea class="form-control" name="des"><?php echo isset($infoBlog['des'])?$infoBlog['des']:null?></textarea>
	      		<span class="pull-right"><?php echo isset($infoBlog['des'])? strlen($infoBlog['des']):0?>: ký tự</span>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Tag:</label>
		      	<textarea class="form-control" name="tag"><?php echo isset($infoBlog['tag'])?$infoBlog['tag']:null?></textarea>
	      		<span class="pull-right">Tags:<?php echo isset($infoBlog['tag'])? count(explode(',', $infoBlog['tag'])):0?></span>
	      	</div>
      	</div>
      	<div class="col-md-12">
      		<button class="btn btn-w-md btn-primary btn-squared btnOk" name="btnOk" value="publish">Public <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
      		<button class="btn btn-w-md btn-default btn-squared btnOk" name="btnOk" value="draf">Lưu nháp <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
      	</div>
     </form>
    </div>
  </div>
  <div id="tab-2" class="tab-pane">
    <div class="panel-body">
    	<div class="col-md-4">
    		<div class="form-group">
		      	<label for="exampleInputName">Upload thông qua URL:</label>
		      	<textarea class="form-control"></textarea>
	      	</div>
      		<label class="btn btn-accent" for="file-selector2">
			  <input id="file-selector2" type="file" style="display:none;" onchange="$('#upload-file-info2').html($(this).val());">
			  <span id="upload-file-info2">Upload file</span>
			</label>
			<br><br>
			<div class="form-group">
	      		<a href="#" class="btn btn-w-md btn-primary btn-squared">Tải lên <i class="fa fa-upload"></i></a>
	      	</div>
    	</div>
		<div class="col-md-8">
		  <div class="panel">
			<div class="panel-tools">
	        <a href="#" style="text-decoration: none;border: #f7af3e 1px solid;color: #fff;padding: 4px 6px;">Tải lại <i class="fa fa-refresh"></i></a>
			  <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
			  <a class="panel-close"><i class="fa fa-times"></i></a>
			</div>
		    <div class="panel-heading">Danh sách ảnh đã tải lên</div>
		    <div class="panel-body">
		      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
		    </div>
		    <div class="panel-footer">Panel footer</div>
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
<script src="<?php echo URL::base_path('/') ?><?php echo $v?>"></script>
<?php endforeach;?>
<?php endif;?>
</body>
</html>