<div class="row">
  <div class="col-md-12">
    <div class="panel panel-filled panel-c-success">
    <div class="loader"><div class="loader-spin"></div></div>
      <div class="panel-heading">
        <div class="panel-tools">
	        <a style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">{{# isset($count_all_member) ? $count_all_member : 0}} thành viên </i></a>
	        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
	        <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Danh sách bài viết
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
		        <th>Tên thành viên</th>
		        <th>NickName</th>
		        <th>Chức vụ</th>
		        <th>Ngày đăng ký</th>
		        <th>Trạng thái</th>
		      </tr>
		    </thead>
		    <tbody>
		    {{if(isset($dsMember)):}}
		    	{{$id = 1;}}
			    {{foreach($dsMember as $v):}}
			      <tr>
			        <th scope="row">{{# $id}}</th>
			        <td><a href="{{# URL::base_path('/admin/member/edit?id='.$v['id'])}}">{{# isset($v['username']) ? $v['username'] : 'N/A'}}</a></td>
			        <td>{{# isset($v['nickname']) ? $v['nickname'] : 'N/A'}}</td>
			        <td>{{# isset($v['levelName']) ? $v['levelName'] : 'N/A'}}</td>
			        <td>{{# isset($v['time_reg']) ? $v['time_reg'] : 'N/A'}}</td>
			        <td>
			        {{if($v['status'] != 1):}}
			        <span class="pe-7s-close-circle"></span>
			        {{endif}}
			        {{if($v['status'] == 1):}}
			        <span class="pe-7s-check" style="color:green"></span>
			        {{endif}}
			        </td>
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
