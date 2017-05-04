<div class="row">
	<div class="col-md-6 col-md-offset-3">
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
	    	<input type="hidden" name="id" value="{{# Input::get('id') }}">
			<div class="form-group">
			  <label for="exampleInputName">Tên sử dụng:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
			    <input type="text" disabled value="{{# isset($infoMember['username'])?$infoMember['username']:'N/A'}}" name="username" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Nick name:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
			    <input type="text" value="{{# isset($infoMember['nickname'])?$infoMember['nickname']:'N/A'}}"  name="nickname" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Email:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-envelope"></i></div>
			    <input type="text" value="{{# isset($infoMember['email'])?$infoMember['email']:'N/A'}}"  name="email" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Mật khẩu:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-key"></i></div>
			    <input type="password" value="{{# isset($infoMember['password'])?$infoMember['password']:null}}"  name="password" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Mật khẩu 2:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-key"></i></div>
			    <input type="password2" value="{{# isset($infoMember['password2'])?$infoMember['password2']:null}}"  name="password2" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Level:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-modx"></i></div>
			    <select class="form-control" name="level">
			    	{{foreach($levelNameList as $k => $v):}}
			    		{{if($k == $infoMember['level']):}}
			    			<option value="{{# $k}}" selected="">{{# $v}}</option>
			    		{{endif}}
			    		{{if($k != $infoMember['level']):}}
			    			<option value="{{# $k}}">{{# $v}}</option>
			    		{{endif}}
			    	{{endforeach}}
			    </select>
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputName">Trạng thái:</label>
			  <div class="input-group">
			    <div class="radio radio-success radio-inline">
				  <input type="radio" id="inlineRadio1" value="1" name="status" {{if($infoMember['status'] == 1):}} checked="1" {{endif}}>
				  <label for="inlineRadio1"> Hoạt động </label>
				</div>
				<div class="radio radio-inline">
				  <input type="radio" id="inlineRadio2" value="0" name="status" {{if($infoMember['status'] != 1):}} checked="1" {{endif}}>
				  <label for="inlineRadio2"> Khóa </label>
				</div>
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

