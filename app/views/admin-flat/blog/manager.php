<div class="row">
  <div class="col-md-12">
    <div class="panel panel-filled panel-c-success">
    <div class="loader"><div class="loader-spin"></div></div>
      <div class="panel-heading">
        <div class="panel-tools">
	        <a style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">{{# isset($blog['countAllPost']) ? $blog['countAllPost'] : 0}} bài </i></a>
	        <a href="{{# URL::base_path('/admin/blog/create?type=post') }}" style="text-decoration: none;border: #1bbf89 1px solid;color: #fff;padding: 4px 6px;">Thêm <i class="fa fa-plus"></i></a>
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
            {{endif}} {{if(isset($validate['success'])):}}
            <div class="alert alert-success" role="alert" style="border-color:#3d6f5f;background:#3d6f5f">{{# $validate['success']; }}</div>
            {{endif}}
        <div class="table-responsive">
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Tên bài viết</th>
		        <th>Thư mục chứa</th>
		        <th>Người viết</th>
		        <th>Ngày viết</th>
		        <th>Trạng thái</th>
		      </tr>
		    </thead>
		    <tbody>
		    {{if(isset($blog['dsPost'])):}}
		    	{{$id = 1;}}
			    {{foreach($blog['dsPost'] as $v):}}
			      <tr>
			        <th scope="row">{{# $id}}</th>
			        <td><a href="{{# URL::base_path('/admin/blog/edit?type=post&id='.$v['id'])}}">{{# isset($v['name']) ? $v['name'] : 'N/A'}}</a></td>
			        <td>{{# isset($v['parentName']) ? $v['parentName'] : 'N/A'}}</td>
			        <td><a href="{{# URL::base_path('/admin/members/edit?id='.$v['uid'])}}">{{# $v['nickname']}}</a></td>
			        <td>{{# $v['time_created']}}</td>
			        <td>
			        {{if($v['status'] != 1):}}
			        <span class="pe-7s-close-circle"></span>
			        {{endif}}
			        {{if($v['status'] == 1):}}
			        <span class="pe-7s-check" style="color:green"></span>
			        {{endif}}
			        <a class="btn btn-default btn-xs" href="{{# URL::base_path('/admin/blog/edit?type=post&id='.$v['id'])}}"><i class="fa fa-paste"></i> Edit</a>
			        <a class="btn btn-default btn-xs" href="{{# URL::base_path('/admin/blog/delete?type=post&id='.$v['id'])}}"><i class="fa fa-trash-o"></i> <span class="bold">Delete</span></a>

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
			<input type="hidden" name="catPage" value="{{# isset($_GET['catPage']) ? $_GET['catPage'] : 1 }}">
		  {{# isset($paginationPost) ? $paginationPost : null }}
		</form>
		</div>
      </div>
    </div>

  </div>
  <div class="col-md-12">

    <div class="panel panel-filled panel-c-warning">
      <div class="panel-heading">
        <div class="panel-tools">
	        <a style="text-decoration: none;border: #f7af3e 1px solid;color: #fff;padding: 4px 6px;">{{# isset($blog['countAllCat']) ? $blog['countAllCat'] : 0 }} thư mục </i></a>
	        <a href="{{# URL::base_path('/admin/blog/create?type=cat') }}" style="text-decoration: none;border: #f7af3e 1px solid;color: #fff;padding: 4px 6px;">Thêm <i class="fa fa-plus"></i></a>
          <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
          <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Danh sách thư mục
      </div>
      <div class="panel-body">
        <div class="table-responsive">
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Tên thư mục</th>
		        <th>Thư mục cha</th>
		        <th>Người tạo</th>
		        <th>Ngày tạo</th>
		        <th>Trạng thái</th>
		      </tr>
		    </thead>
		    <tbody>
		    {{if(isset($blog['dsCat'])):}}
		    	{{$id = 1;}}
			    {{foreach($blog['dsCat'] as $v):}}
			      <tr>
			        <th scope="row">{{# $id}}</th>
			        <td><a href="{{# URL::base_path('/admin/blog/edit?type=cat&id='.$v['id'])}}">{{# isset($v['name']) ? $v['name'] : 'N/A'}}</a></td>
			        <td>{{# isset($v['parentName']) ? $v['parentName'] : 'N/A'}}</td>
			        <td><a href="{{# URL::base_path('/admin/members/edit?id='.$v['uid'])}}">{{# $v['nickname']}}</a></td>
			        <td>{{# $v['time_created']}}</td>
			        <td>
			        {{if($v['status'] != 1):}}
			        <span class="pe-7s-close-circle"></span>
			        {{endif}}
			        {{if($v['status'] == 1):}}
			        <span class="pe-7s-check" style="color:green"></span>
			        {{endif}}
			        <a class="btn btn-default btn-xs" href="{{# URL::base_path('/admin/blog/edit?type=cat&id='.$v['id'])}}"><i class="fa fa-paste"></i> Edit</a>
			        <a class="btn btn-default btn-xs" href="{{# URL::base_path('/admin/blog/delete?type=cat&id='.$v['id'])}}"><i class="fa fa-trash-o"></i> <span class="bold">Delete</span></a>
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
			<input type="hidden" name="postPage" value="{{# isset($_GET['postPage']) ? $_GET['postPage'] : 1 }}">
		  {{# isset($paginationCat) ? $paginationCat : null }}
		</form>
		</div>
      </div>
    </div>

  </div>
  <div class="col-md-12">

    <div class="panel panel-filled panel-c-info">
      <div class="panel-heading">
        <div class="panel-tools">
          <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
          <a class="panel-close"><i class="fa fa-times"></i></a>
        </div>
        Filled panel with custom color
      </div>
      <div class="panel-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
      </div>
      <div class="panel-footer">Panel footer</div>
    </div>

  </div>
</div>
