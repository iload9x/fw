<div class="row">
	<div class="col-md-12">
		{{if(isset($validate['errors']) && is_array($validate['errors'])):}}
		<div class="alert alert-danger" role="alert" style="">
			{{ foreach($validate['errors'] as $v):}}
			<div>{{# $v; }}</div>
			{{ endforeach; }}
		</div>
		{{endif}}
		{{if(isset($validate['success'])):}}
		<div class="alert alert-success" role="alert" style="border-color:#3d6f5f;background:#3d6f5f">{{# $validate['success']; }}</div>
		{{endif}}
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
							<a href="{{# URL::base_path('admin/cart/products/add')}}" class="btn btn-primary btn-rounded" style="padding: 10px 18px;    font-size: 21px;"><i class="fa fa-plus"></i></a>
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
								<input class="form-control" type="text" name="txtSearch" value="{{# (Input::get('txtSearch')) ? Input::get('txtSearch') : null;}}" placeholder="Nhập ký tự..." style="width: 100%">
								<div class="input-group-btn">
									<button class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<select class="form-control m-b-xs m-t-xs" name="field" style="width: 100%">
								<option value="" selected="">Tìm kiếm theo: </option>
								<option value="name" {{# (Input::get('field') && Input::get('field') == 'name')? 'selected' : null;}}>Tên sản phẩm</option>
								<option value="price" {{# (Input::get('field') && Input::get('field') == 'price')? 'selected' : null;}}>Giá</option>
								<option value="companyId" {{# (Input::get('field') && Input::get('field') == 'companyId')? 'selected' : null;}}>Hãng sản xuất</option>
								<option value="categoryId" {{# (Input::get('field') && Input::get('field') == 'categoryId')? 'selected' : null;}}>Chuyên mục</option>
								<option value="typeId" {{# (Input::get('field') && Input::get('field') == 'typeId')? 'selected' : null;}}>Loại sản phẩm</option>
								<option value="view" {{# (Input::get('field') && Input::get('field') == 'view')? 'selected' : null;}}>Lượt xem</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select class="form-control m-t-xs" name="sort" style="width: 100%">
								<option value="" selected="">Sắp xếp:</option>
								<option value="DESC" {{# (Input::get('sort') && Input::get('sort') == 'DESC')? 'selected' : null;}}>Mới nhất</option>
								<option value="ASC" {{# (Input::get('sort') && Input::get('sort') == 'ASC')? 'selected' : null;}}>Cũ nhất</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{if(isset($dsProduct)  && is_array($dsProduct)):}}
	{{$id = 1;}}
	{{foreach($dsProduct as $v):}}
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-filled">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
							<div class="media">
								{{if(isset($v['avatar'])):}}
								{{ $id2 = 0;}}
								{{foreach($v['avatar'] as $vImage):}}
								{{if($id2 < 3):}}
								<img src="{{# URL::base_path('public/uploads/') . $vImage}}" width="70px" height="70px">
								{{endif}}
								{{ $id2 ++;}}
								{{endforeach}}
								{{endif}}
								<h2 class="m-t-xs m-b-none">
								{{# isset($v['name']) ? $v['name'] : 'N/A'}}
								</h2>
								<small>
								{{# strip_tags(substr($v['detail'],0,250)) }}...
								</small>
							</div>
						</div>
						<div class="col-md-4">
							<table class="table small m-t-sm">
								<tbody>
									<tr>
										<td>
											Giá: <strong class="c-white">{{# isset($v['price']) ? number_format($v['price']) : 'N/A'}}đ</strong>
										</td>
										<td>
											Chuyên muc: <strong class="c-white">{{# isset($v['categoryName']) ? $v['categoryName'] : 'N/A'}}</strong>
										</td>
									</tr>
									<tr>
										<td>
											Lượt xem: <strong class="c-white">{{# isset($v['view']) ? $v['view'] : 'N/A'}}</strong>
										</td>
										<td>
											Loại sản phẩm: <strong class="c-white">{{# isset($v['typeName']) ? $v['typeName'] : 'N/A'}}</strong>
										</td>
									</tr>
									<tr>
										<td>
											Trạng thái: <strong class="c-white">{{# isset($v['status']) ? $v['status'] : 'N/A'}}</strong>
										</td>
										<td>
											Hãng: <strong class="c-white">{{# isset($v['companyName']) ? $v['companyName'] : 'N/A'}}</strong>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-3 m-t-sm">
							Người tạo: <span class="c-white"> Administrator</span>
							<br>
							Ngày tạo: <span class="c-white"> {{# isset($v['time_created']) ? $v['time_created'] : 'N/A'}}</span>
							<div class="btn-group m-t-sm">
								<a href="{{# URL::base_path('admin/cart/products/edit-'.$v['id'])}}" class="btn btn-default btn-sm"><i class="fa fa-envelope"></i> Sửa</a>
								<a href="{{# URL::base_path('admin/cart/products/delete-'.$v['id'])}}" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Xóa</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{ $id++; }}
	{{endforeach}}
	{{endif}}
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group">
				{{# isset($pagination) ? $pagination : null }}
			</div>
		</div>
	</div>
</form>