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
	</div>
</div>
<!-- -->
<form method="GET" action="">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3 col-xs-6 text-center">
							<h2 class="no-margins">
							<a href="#" class="btn btn-default btn-rounded" style="padding: 10px 18px;    font-size: 21px;">534</a>
							</h2>
							<span class="c-white">Commits</span> in last week
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<h2 class="no-margins">
							<a href="#" class="btn btn-default btn-rounded" style="padding: 10px 18px;    font-size: 21px;">126</a>
							</h2>
							<span class="c-white">Public</span> gists
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<h2 class="no-margins">
							<a href="#" class="btn btn-default btn-rounded" style="padding: 10px 18px;    font-size: 21px;">680</a>
							</h2>
							<span class="c-white">New code</span> line
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<h2 class="no-margins">
							<a href="<?php echo URL::base_path('admin/cart/products/add')?>" class="btn btn-primary btn-rounded" style="padding: 10px 18px;    font-size: 21px;"><i class="fa fa-plus"></i></a>
							</h2>
							<span class="c-white">Thêm</span> mới
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group m-b-xs m-t-xs">
								<input class="form-control" type="text" name="txtSearch" value="<?php echo (Input::get('txtSearch')) ? Input::get('txtSearch') : null;?>" placeholder="Nhập ký tự..." style="width: 100%">
								<div class="input-group-btn">
									<button class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<select class="form-control m-b-xs m-t-xs" name="field" style="width: 100%">
								<option value="" selected="">Tìm kiếm theo: </option>
								<option value="name" <?php echo (Input::get('field') && Input::get('field') == 'name')? 'selected' : null;?>>Tên sản phẩm</option>
								<option value="price" <?php echo (Input::get('field') && Input::get('field') == 'price')? 'selected' : null;?>>Giá</option>
								<option value="companyId" <?php echo (Input::get('field') && Input::get('field') == 'companyId')? 'selected' : null;?>>Hãng sản xuất</option>
								<option value="categoryId" <?php echo (Input::get('field') && Input::get('field') == 'categoryId')? 'selected' : null;?>>Chuyên mục</option>
								<option value="typeId" <?php echo (Input::get('field') && Input::get('field') == 'typeId')? 'selected' : null;?>>Loại sản phẩm</option>
								<option value="view" <?php echo (Input::get('field') && Input::get('field') == 'view')? 'selected' : null;?>>Lượt xem</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select class="form-control m-t-xs" name="sort" style="width: 100%">
								<option value="" selected="">Sắp xếp:</option>
								<option value="DESC" <?php echo (Input::get('sort') && Input::get('sort') == 'DESC')? 'selected' : null;?>>Mới nhất</option>
								<option value="ASC" <?php echo (Input::get('sort') && Input::get('sort') == 'ASC')? 'selected' : null;?>>Cũ nhất</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(isset($dsProduct)  && is_array($dsProduct)):?>
	<?php  $id = 1;?>
	<?php foreach($dsProduct as $v):?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<div class="media">
								<?php if(isset($v['avatar'])):?>
								<?php   $id2 = 0;?>
								<?php foreach($v['avatar'] as $vImage):?>
								<?php if($id2 < 3):?>
								<img src="<?php echo URL::base_path('public/uploads/') . $vImage?>" width="70px" height="70px">
								<?php endif;?>
								<?php   $id2 ++;?>
								<?php endforeach;?>
								<?php endif;?>
								<h2 class="m-t-xs m-b-none">
								<?php echo isset($v['name']) ? $v['name'] : 'N/A'?>
								</h2>
								<small>
								<?php echo strip_tags(substr($v['detail'],0,250)) ?>...
								</small>
							</div>
						</div>
						<div class="col-md-4">
							<table class="table small m-t-sm">
								<tbody>
									<tr>
										<td>
											Giá: <strong class="c-white"><?php echo isset($v['price']) ? number_format($v['price']) : 'N/A'?>đ</strong>
										</td>
										<td>
											Chuyên muc: <strong class="c-white"><?php echo isset($v['categoryName']) ? $v['categoryName'] : 'N/A'?></strong>
										</td>
									</tr>
									<tr>
										<td>
											Lượt xem: <strong class="c-white"><?php echo isset($v['view']) ? $v['view'] : 'N/A'?></strong>
										</td>
										<td>
											Loại sản phẩm: <strong class="c-white"><?php echo isset($v['typeName']) ? $v['typeName'] : 'N/A'?></strong>
										</td>
									</tr>
									<tr>
										<td>
											Trạng thái: <strong class="c-white"><?php echo isset($v['status']) ? $v['status'] : 'N/A'?></strong>
										</td>
										<td>
											Hãng: <strong class="c-white"><?php echo isset($v['companyName']) ? $v['companyName'] : 'N/A'?></strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-3 m-t-sm">
							Người tạo: <span class="c-white"> Administrator</span>
							<br>
							Ngày tạo: <span class="c-white"> <?php echo isset($v['time_created']) ? $v['time_created'] : 'N/A'?></span>
							<div class="btn-group m-t-sm">
								<a href="<?php echo URL::base_path('admin/cart/products/edit-'.$v['id'])?>" class="btn btn-default btn-sm"><i class="fa fa-envelope"></i> Sửa</a>
								<a href="<?php echo URL::base_path('admin/cart/products/delete-'.$v['id'])?>" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Xóa</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php   $id++; ?>
	<?php endforeach;?>
	<?php endif;?>
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group">
				<?php echo isset($pagination) ? $pagination : null ?>
			</div>
		</div>
	</div>
</form>
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