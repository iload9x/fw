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
    <form action="" method="POST">
    	<input type="hidden" name="_csrfToken" value="{{# $csrf_token}}">
    	<input type="hidden" name="type" value="{{# $type}}">
    	<input type="hidden" name="id" value="{{# isset($infoBlog['id'])?$infoBlog['id']:0}}">
      	<div class="col-md-8">
			<div class="form-group">
				<label for="exampleInputName">Tên:</label>
				<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
						<input type="text" value="{{# isset($infoBlog['name'])?$infoBlog['name']:null}}" name="name" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
		    </div>
	      	<div class="form-group">
		      	<label for="exampleInputName">URL:</label>
		      	<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-link"></i></div>
						<input type="text" value="{{# isset($infoBlog['name'])? StringLib::convertUrl($infoBlog['name']):null}}" name="url" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Tiêu đề:</label>
		      	<div class="input-group">
					<div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
						<input type="text" value="{{# isset($infoBlog['title'])?$infoBlog['title']:null}}" name="title" class="form-control" id="exampleInputAmount" placeholder="">
					<div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin"></i></div>
				</div>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Nội dung:</label>
		      	<textarea class="form-control txtContent" name="content">{{# isset($infoBlog['content'])?$infoBlog['content']:null}}</textarea>
	      	</div>
      	</div>
      	<div class="col-md-4">
			<div class="form-group">
		      	<label for="exampleInputName">Chọn thư mục:</label>
		      	<select class="form-control" name="parent">
		      	<option value="">Chọn thư mục</option>
	      			{{ blogLib::treeMenuCat($dsCatParentRoot, '', isset($infoBlog['parent'])?$infoBlog['parent']:null); }}
		      	</select>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Keyword:</label>
		      	<textarea class="form-control" name="keyword">{{# isset($infoBlog['keyword'])?$infoBlog['keyword']:null}}</textarea>
	      		<span class="pull-right">Keyword:{{# isset($infoBlog['keyword'])? count(explode(',', $infoBlog['keyword'])):0}}</span>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Mô tả:</label>
		      	<textarea class="form-control" name="des">{{# isset($infoBlog['des'])?$infoBlog['des']:null}}</textarea>
	      		<span class="pull-right">{{# isset($infoBlog['des'])? strlen($infoBlog['des']):0}}: ký tự</span>
	      	</div>
	      	<div class="form-group">
		      	<label for="exampleInputName">Tag:</label>
		      	<textarea class="form-control" name="tag">{{# isset($infoBlog['tag'])?$infoBlog['tag']:null}}</textarea>
	      		<span class="pull-right">Tags:{{# isset($infoBlog['tag'])? count(explode(',', $infoBlog['tag'])):0}}</span>
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

