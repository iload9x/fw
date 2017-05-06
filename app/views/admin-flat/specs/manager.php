<div class="row">
  <div class="col-md-12">
    <div class="panel panel-filled panel-c-success">
    <div class="loader"><div class="loader-spin"></div></div>
      <div class="panel-heading">
        <div class="panel-tools">
	        <a style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">{{# isset($count_all_member) ? $count_all_member : 0}} thành viên </i></a>
	        <a href="{{# URL::base_path('/admin/cart/specs/add')}}" style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">Thêm <i class="fa fa-plus"></i></a>
	        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
	        <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Danh sách thông số kỹ thuật
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
		        <th>Tên định danh</th>
		        <th>Hệ điều hành</th>
		        <th>Vi xử lý</th>
		        <th>RAM</th>
		        <th>Bộ nhớ trong</th>
		        <th>Camera Sau</th>
		        <th>Camera Trước</th>
		      </tr>
		    </thead>
		    <tbody>
		    {{if(isset($dsCategory)):}}
		    	{{$id = 1;}}
			    {{foreach($dsCategory as $v):}}
			      <tr>
			        <th scope="row">{{# $id}}</th>
			        <td><a href="{{# URL::base_path('/admin/cart/specs/edit?id='.$v['id'])}}">{{# isset($v['name']) ? $v['name'] : 'N/A'}}</a></td>
			        <td>{{# isset($v['operatingSystem']) ? $v['operatingSystem'] : 'N/A'}}</td>
			        <td>{{# isset($v['processor']) ? $v['processor'] : 'N/A'}}</td>
			        <td>{{# isset($v['RAM']) ? $v['RAM'] : 'N/A'}}</td>
			        <td>{{# isset($v['storage']) ? $v['storage'] : 'N/A'}}</td>
			        <td>{{# isset($v['rear_camera']) ? $v['rear_camera'] : 'N/A'}}</td>
			        <td>{{# isset($v['front_camera']) ? $v['front_camera'] : 'N/A'}}</td>
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
