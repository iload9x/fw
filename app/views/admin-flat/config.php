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
	    	{{if(isset($configList)):}}
	    	{{foreach($configList as $kConfig => $vConfig):}}
	    	{{if($vConfig['type'] == 'input'):}}
			<div class="form-group">
			  <label for="exampleInputName">{{# isset($vConfig['description']) ? $vConfig['description'] : '---'}}:</label>
			  <div class="input-group">
			    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
			    <input type="text" value="{{# isset($vConfig['value'])?$vConfig['value']: null }}" name="config[{{# isset($vConfig['keyword'])?$vConfig['keyword']: null }}]" class="form-control" placeholder="">
			    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
			  </div>
			</div>
			{{endif}}
			{{endforeach}}
			{{endif}}
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

