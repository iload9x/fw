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
	    	{{if(isset($bannerList) && is_array($bannerList)):}}
            {{foreach($bannerList as $banner):}}
		 	<form action="" method="POST" enctype="multipart/form-data">
		    	<input type="hidden" name="_csrfToken" value="{{# $csrf_token }}">
		    	<input type="hidden" name="id" value="{{# $banner['id'] }}">
		    	{{if(isset($banner['image_src'])):}}
	            <div class="col-md-12 css2">
	              <div class="col-md-12 css1">
	                <div class="rowItem col-md-12">
	    			{{foreach((array)json_decode($banner['image_src']) as $src):}}
	                  <div class="col-md-3" style="position: relative; margin-bottom:5px;text-align: center;">
	                    <input type="hidden" name="image_src_old[]" value="{{# $src->src}}">
						<div class="form-group">
						    <input type="text" value="{{# $src->link}}" name="link[]" class="form-control" placeholder="Đường dẫn: http://domain.com/abc.html">
						</div>
	                    <img src="{{# URL::base_path('/public/uploads/')}}{{# $src->src}}" style="max-width:100%;height:128px">
	                    <div class="lg-image">
	                      <button class="btn btn-default btn-xs btnXem">Xem</button>
	                      <button class="btn btn-danger btn-xs btnDelete">Xóa</button>
	                    </div>
	                  </div>
      	            {{endforeach}}
	                </div>
	              </div>
	            </div>
	            {{endif}}
	            <div class="form-group">
	              <label for="exampleInputName">{{# $banner['title']}}</label>
	              <input type="file" name="files">
	            </div>
	            <div class="form-group">
					<button class="btn btn-w-md btn-primary btn-squared btnOk" type="submit" name="btnOk">Cập nhật <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
				</div>
            </form>
            {{endforeach}}
		{{endif}}

	    </div>
	    <div class="panel-footer">

	    </div>
	    </form>
	  </div>

	</div>
</div>
