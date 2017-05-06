<div class="row">
  <div class="col-md-12">
    <div class="panel panel-filled panel-c-success">
    <div class="loader"><div class="loader-spin"></div></div>
      <div class="panel-heading">
        <div class="panel-tools">
	        <a style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">{{# isset($count_all_member) ? $count_all_member : 0}} thành viên </i></a>
	        <a href="{{# URL::base_path('/admin/cart/companies/add')}}" style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">Thêm <i class="fa fa-plus"></i></a>
	        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
	        <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Danh sách hãng sản xuất
      </div>
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
        <div class="table-responsive">
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Tên hãng</th>
		        <th>Người tạo</th>
		        <th>Số sản phẩm</th>
		        <th>Ngày tạo</th>
		        <th>Ngày cập nhật</th>
		      </tr>
		    </thead>
		    <tbody>
		    {{if(isset($dsCategory)):}}
		    	{{$id = 1;}}
			    {{foreach($dsCategory as $v):}}
			      <tr>
			        <th scope="row">{{# $id}}</th>
			        <td><a href="{{# URL::base_path('/admin/cart/companies/edit?id='.$v['id'])}}">{{# isset($v['name']) ? $v['name'] : 'N/A'}}</a></td>
			        <td>{{# isset($v['username']) ? $v['username'] : 'N/A'}}</td>
			        <td>{{# isset($v['qtyProducts']) ? $v['qtyProducts'] : 'N/A'}}</td>
			        <td>{{# isset($v['time_created']) ? $v['time_created'] : 'N/A'}}</td>
			        <td>{{# isset($v['time_updated']) ? $v['time_updated'] : 'N/A'}}</td>
			      </tr>
			      {{ $id++; }}
			    {{endforeach}}
		     {{endif}}
		    </tbody>
		  </table>
		</div>
      </div>
      <div class="panel-footer">
		<div class="btn-group">
		<form>
		  {{# isset($pagination) ? $pagination : null }}
		</form>
		</div>
      </div>
    </div>

  </div>
</div>
