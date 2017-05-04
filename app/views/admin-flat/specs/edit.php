<div class="row">
	<div class="col-md-12">
	  <div class="panel panel-filled">
		<div class="loader"><div class="loader-spin"></div></div>
	    <div class="panel-body">
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

	    <form action="" method="POST" enctype="multipart/form-data">
	    	<input type="hidden" name="_csrfToken" value="{{# $csrf_token }}">
	    	<input type="hidden" name="id" value="{{# isset($infoSpecs['id'])?$infoSpecs['id']: '---' }}">
	    	<div class="col-md-12">
	    		<div class="form-group">
				  <label for="exampleInputName">Tên định danh:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['name'])?$infoSpecs['name']:null }}" name="name" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
	    	</div>
	    	<div class="col-md-6">
				<div class="form-group">
				  <label for="exampleInputName">Hệ điều hành:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['operatingSystem'])?$infoSpecs['operatingSystem']:null }}" name="specs[operatingSystem]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Màn hình:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['display'])?$infoSpecs['display']:null }}" name="specs[display]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Vi xử lý:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['processor'])?$infoSpecs['processor']:null }}" name="specs[processor]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Bộ nhớ trong:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['storage'])?$infoSpecs['storage']:null }}" name="specs[storage]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Khe cắm mở rộng:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['expandable'])?$infoSpecs['expandable']:null }}" name="specs[expandable]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">RAM:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['RAM'])?$infoSpecs['RAM']:null }}" name="specs[RAM]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">SIM:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['sim'])?$infoSpecs['sim']:null }}" name="specs[sim]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				  <label for="exampleInputName">Camera sau:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['rear_camera'])?$infoSpecs['rear_camera']:null }}" name="specs[rear_camera]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Camera trước:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['front_camera'])?$infoSpecs['front_camera']:null }}" name="specs[front_camera]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Kết nối:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['connectivity'])?$infoSpecs['connectivity']:null }}" name="specs[connectivity]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Sạc:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['charging'])?$infoSpecs['charging']:null }}" name="specs[charging]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">PIN:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['battery'])?$infoSpecs['battery']:null }}" name="specs[battery]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Chống nước:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['water_resistance'])?$infoSpecs['water_resistance']:null }}" name="specs[water_resistance]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Bảo mật:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['security'])?$infoSpecs['security']:null }}" name="specs[security]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
				<div class="form-group">
				  <label for="exampleInputName">Kích thước:</label>
				  <div class="input-group">
				    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
				    <input type="text" value="{{# isset($infoSpecs['dimensions'])?$infoSpecs['dimensions']:null }}" name="specs[dimensions]" class="form-control" placeholder="">
				    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
				  </div>
				</div>
			</div>
	    <div class="panel-footer">
			<div class="form-group">
				<button class="btn btn-w-md btn-primary btn-squared btnOk" type="submit" name="btnOk">Cập nhật <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
			</div>
	    </div>
	    </form>
	  </div>

	</div>
</div>

