<div class="row">
  <div class="col-md-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Nội dung</a></li>
        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Thông số kỹ thuật</a></li>
        <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Hình ảnh</a></li>
      </ul>
      <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
          <div class="loader">
            <div class="loader-spin"></div>
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
            <form action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_csrfToken" value="{{# $csrf_token}}">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputName">Tên:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
                    <input type="text" id="txtName" name="name" class="form-control" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">URL:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-link"></i></div>
                    <input type="text" id="txtUrl" name="url" class="form-control" id="exampleInputAmount" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Giá sản phẩm:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                    <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="4">4GB</option>
                            <option value="8">8GB</option>
                            <option value="16">16GB</option>
                            <option value="32">32GB</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="4">4GB</option>
                            <option value="8">8GB</option>
                            <option value="16">16GB</option>
                            <option value="32">32GB</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12 col-xs-12 col-sm-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="white">Màu trắng</option>
                            <option value="black">Màu đen</option>
                            <option value="gold">Màu vàng</option>
                            <option value="sliver">Màu bạc</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-8">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Trong hộp có: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Bảo hành: </div>
                          <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                            <option value="0">Không có bảo hành</option>
                            <option value="1">1 tháng</option>
                            <option value="12">12 tháng</option>
                            <option value="24">24 tháng</option>
                          </select>
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Giao hàng: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Khuyến mãi 1: </div>
                          <input type="text" name="price" class="form-control" id="exampleInputAmount" placeholder="" value="0">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả chỉ tiết sản phẩm:</label>
                  <textarea class="form-control txtContent summernote" name="detail"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Avatar:</label>
                  <input type="file" name="files">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputName">Danh mục:</label>
                  <select class="form-control select2_demo_2" name="categoryId" style="width: 100%">
                    {{if(isset($dsCategory)):}} {{foreach($dsCategory as $v):}}
                    <option value="{{# $v['id']}}">{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Hãng sản xuất:</label>
                  <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                    {{if(isset($dsCompany)):}} {{foreach($dsCompany as $v):}}
                    <option value="{{# $v['id']}}">{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Thông số kỹ thuật:</label>
                  <select class="form-control select2_demo_2" name="specsId" style="width: 100%">
                    {{if(isset($dsSpecs)):}} {{foreach($dsSpecs as $v):}}
                    <option value="{{# $v['id']}}">{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Loại sản phẩm:</label>
                  <select class="form-control select2_demo_2" name="typeId" style="width: 100%">
                    {{if(isset($dsType)):}} {{foreach($dsType as $v):}}
                    <option value="{{# $v['id']}}">{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Keyword:</label>
                  <textarea class="form-control" name="keyword"></textarea>
                  <span class="pull-right">Keyword:0</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả:</label>
                  <textarea class="form-control" name="description"></textarea>
                  <span class="pull-right">0: ký tự</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Tag:</label>
                  <textarea class="form-control" name="tag"></textarea>
                  <span class="pull-right">Tags:0</span>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-w-md btn-primary btn-squared btnOk" name="btnOk" value="publish">Public <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                <button class="btn btn-w-md btn-default btn-squared btnOk" name="btnOk" value="draf">Lưu nháp <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
              </div>
          </div>
        </div>
        </form>
        <div id="tab-2" class="tab-pane">
          <div class="panel-body">
            <form id="specsForm" method="post">
              <input type="hidden" name="_csrfToken" value="{{# $csrf_token}}">
              <input type="hidden" name="type" value="ajax">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputName">Tên định danh:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="name" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName">Hệ điều hành:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[operatingSystem]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Màn hình:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[display]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Vi xử lý:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[processor]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Bộ nhớ trong:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[storage]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Khe cắm mở rộng:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[expandable]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">RAM:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[RAM]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">SIM:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[sim]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName">Camera sau:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[rear_camera]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Camera trước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[front_camera]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Kết nối:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[connectivity]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Sạc:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[charging]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">PIN:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[battery]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Chống nước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[water_resistance]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Bảo mật:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[security]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Kích thước:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-user"></i></div>
                    <input type="text" value="" name="specs[dimensions]" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-w-md btn-primary btn-squared" name="btnOk" value="publish">Thêm <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
              </div>
            </form>
          </div>
        </div>
        <div id="tab-3" class="tab-pane">
          <div class="loader">
            <div class="loader-spin"></div>
          </div>
          <div class="panel-body">
            <form id="uploadImages" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_csrfToken" value="{{# $csrf_token}}">
              <div class="col-md-4">
                <div class="panel">
                  <div class="panel-heading">Chọn ảnh để tải lên</div>
                  <div class="panel-body">
                    <input type="file" id="selectImages" name="files">
                  </div>
                  <div class="panel-footer">
                    <button name="btnOk" class="btnOk btn btn-w-md btn-primary">Tải lên <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
                  </div>
                </div>
              </div>
            </form>
            <div class="col-md-8">
              <div class="panel">
                <div class="panel-heading">Danh sách ảnh đã tải lên</div>
                <div class="panel-body listImageUploaded">
                  {{if(isset($dsImages)):}} {{foreach($dsImages as $v):}}
                  <div class="col-md-3" style="position: relative; margin-bottom:5px;">
                    <img src="{{# URL::base_path('public/uploads/')}}{{# $v}}" width="100%">
                    <div class="lg-image">
                      <button class="btn btn-default btn-xs btnXem">Xem</button>
                      <button class="btn btn-default btn-xs btnCopy">Copy</button>
                    </div>
                  </div>
                  {{endforeach}} {{endif}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
