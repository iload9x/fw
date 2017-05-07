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
            <form action="{{# URL::base_path('/admin/cart/products/edit')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_csrfToken" value="{{# $csrf_token}}">
              <input type="hidden" name="id" value="{{# $infoProduct['id']}}">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputName">Tên:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
                    <input type="text" id="txtName" name="name" value="{{# isset($infoProduct['name'])  ? $infoProduct['name'] : null }}" class="form-control" id="" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Tiêu đề:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-pencil"></i></div>
                    <input type="text" id="" name="title" value="{{# isset($infoProduct['title'])  ? $infoProduct['title'] : null }}" class="form-control" id="" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">URL:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-link"></i></div>
                    <input type="text" id="txtUrl" name="url" value="{{# isset($infoProduct['url'])  ? $infoProduct['url'] : null }}" class="form-control" placeholder="">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Giá sản phẩm:</label>
                  <div class="input-group">
                    <div class="input-group-addon" style="background:#52555f; color:#fff; border:none"><i class="fa fa-usd"></i></div>
                    <input type="text" name="price" class="form-control" placeholder="" value="{{# isset($infoProduct['price'])  ? $infoProduct['price'] : '0' }}">
                    <div class="input-group-addon" style="color:#fff"><i class="fa fa-spinner fa-spin" style="display:none"></i></div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2 selectStorage" style="width: 100%">
                            <option value="">Phiên bản</option>
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
                          <input type="text" class="form-control selectStoragePrice" placeholder="" value="0">
                          <div class="btnAddItemStorage input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{if(isset($infoProduct['storage']) && is_array($infoProduct['storage'])):}}
                    {{foreach($infoProduct['storage'] as $k => $v):}}
                    <div class="rowItem">
                      <div class="form-group col-md-12">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <input type="hidden" name="storage[]" value="{{# $k}}" data-storage="{{# $k}}">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">{{# $k}}GB</div>
                          <input type="text" name="storagePrice[]" class="form-control" id="exampleInputAmount" placeholder="" value="{{# $v }}">
                          <div class="btnRemoveItemStorage input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{endforeach}}
                    {{endif}}
                  </div>
                  <div class="col-md-6 css1">
                    <div class="rowItem">
                      <div class="form-group col-md-4">
                        <div class="input-group col-xs-12 col-sm-12">
                          <select class="form-control select2_demo_2 selectColor" style="width: 100%">
                            <option value="">Chọn Màu</option>
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
                          <input type="text" class="form-control selectColorPrice" id="exampleInputAmount" placeholder="" value="0">
                          <div class="btnAddItemColor input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{if(isset($infoProduct['color']) && is_array($infoProduct['color'])):}}
                    {{foreach($infoProduct['color'] as $k => $v):}}
                    <div class="rowItem">
                      <div class="form-group col-md-12">
                        <div class="input-group col-md-12  col-xs-12 col-sm-12">
                          <input type="hidden" name="color[]" value="{{# $k}}" data-color="{{# $k}}">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">{{# $k}}</div>
                          <input type="text" name="colorPrice[]" class="form-control" id="" placeholder="" value="{{# $v }}">
                          <div class="btnRemoveItemStorage input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{endforeach}}
                    {{endif}}
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Trong hộp có: </div>
                          <input type="text" name="inbox" class="form-control" placeholder="" value="{{# isset($infoProduct['inbox'])  ? $infoProduct['inbox'] : null }}">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus" style="display:none"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Bảo hành: </div>
                          <select class="form-control select2_demo_2" name="guarantee" style="width: 100%">
                            <option value="0" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==0 ? "selected" : null }}>Không có bảo hành</option>
                            <option value="1" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==1 ? "selected" : null }}>1 tháng</option>
                            <option value="3" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==3 ? "selected" : null }}>3 tháng</option>
                            <option value="6" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==6 ? "selected" : null }}>6 tháng</option>
                            <option value="12" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==12 ? "selected" : null }}>12 tháng</option>
                            <option value="24" {{# isset($infoProduct['guarantee']) && $infoProduct['guarantee']==24 ? "selected" : null }}>24 tháng</option>
                          </select>
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus" style="display:none"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Giao hàng: </div>
                          <input type="text" value="{{# isset($infoProduct['delivery'])  ? $infoProduct['delivery'] : null }}" name="delivery" class="form-control" id="" placeholder="">
                          <div class="input-group-addon" style="color:#fff"><i class="fa fa-plus" style="display:none"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    {{if(isset($infoProduct['counpons']) && is_array($infoProduct['counpons'])):}} {{foreach($infoProduct['counpons'] as $v):}} {{if(!empty($v)):}}
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Khuyến mãi: </div>
                          <input type="text" name="counpons[]" data-checkvalue="btnAddItemCoupons" class="form-control" value="{{# $v}}" placeholder="">
                          <div class="btnAddItemCoupons input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{endif}} {{endforeach}} {{endif}}
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Khuyến mãi: </div>
                          <input type="text" name="counpons[]" data-checkvalue="btnAddItemCoupons" class="form-control" value="" placeholder="">
                          <div class="btnAddItemCoupons input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    {{if(isset($infoProduct['videoLinks']) && is_array($infoProduct['videoLinks'])):}} {{foreach($infoProduct['videoLinks'] as $v):}} {{if(!empty($v)):}}
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Link Video: </div>
                          <input type="text" name="videoLinks[]" data-checkvalue="btnAddItemCoupons" class="form-control" value="{{# $v}}" placeholder="">
                          <div class="btnAddItemCoupons input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                    {{endif}} {{endforeach}} {{endif}}
                    <div class="rowItem">
                      <div class="form-group">
                        <div class="input-group col-md-12">
                          <div class="input-group-addon" style="background:#52555f; color:#fff; border:none">Link Video: </div>
                          <input type="text" name="videoLinks[]" data-checkvalue="btnAddItemCoupons" class="form-control" value="" placeholder="">
                          <div class="btnAddItemCoupons input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả chỉ tiết sản phẩm:</label>
                  <textarea class="form-control txtContent summernote" name="detail">{{# isset($infoProduct['detail']) ? $infoProduct['detail'] : null }}</textarea>
                </div>
                {{if(isset($infoProduct['avatar'])):}}
                <div class="col-md-12 css2">
                  <div class="col-md-12 css1">
                    <div class="rowItem col-md-12">
                    {{foreach($infoProduct['avatar'] as $avatar):}}
                      <div class="col-md-3" style="position: relative; margin-bottom:5px;text-align: center;">
                        <input type="hidden" name="old_avatar[]" value="{{# $avatar}}">
                        <img src="{{# URL::base_path('/public/uploads/')}}{{# $avatar}}" style="max-width:100%;height:128px">
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
                  <label for="exampleInputName">Avatar:</label>
                  <input type="file" name="files">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputName">Danh mục:</label>
                  <select class="form-control select2_demo_2" name="categoryId" style="width: 100%">
                    {{if(isset($dsCategory)):}} {{foreach($dsCategory as $v):}}
                    <option value="{{# $v['id']}}" {{# ($infoProduct['categoryId']==$v['id']) ? "selected" : null}}>{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Hãng sản xuất:</label>
                  <select class="form-control select2_demo_2" name="companyId" style="width: 100%">
                    {{if(isset($dsCompany)):}} {{foreach($dsCompany as $v):}}
                    <option value="{{# $v['id']}}" {{# ($infoProduct['companyId']==$v['id']) ? "selected" : null}}>{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Thông số kỹ thuật:</label>
                  <select class="form-control select2_demo_2" name="specsId" style="width: 100%">
                    <option value="">Không có TSKT</option>
                    {{if(isset($dsSpecs)):}} {{foreach($dsSpecs as $v):}}
                    <option value="{{# $v['id']}}" {{# ($infoProduct['specsId']==$v['id']) ? "selected" : null}}>{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Loại sản phẩm:</label>
                  <select class="form-control select2_demo_2" multiple="multiple" name="typeId[]" style="width: 100%">
                    <option value="">Vui lòng chọn</option>
                    {{if(isset($dsType)):}} {{foreach($dsType as $v):}}
                    <option value="{{# $v['id']}}" {{# (is_array($infoProduct['typeId']) && in_array($v['id'], $infoProduct['typeId'])) ? 'selected' : null}}>{{# $v['name']}}</option>
                    {{endforeach}} {{endif}}
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Trạng thái:</label>
                  <div class="input-group">
                    <div class="radio radio-success radio-inline">
                      <input type="radio" value="1" name="status" {{# isset($infoProduct['status']) && $infoProduct['status']==1 ? "checked" : null}}>
                      <label for="inlineRadio1"> Còn hàng </label>
                    </div>
                    <div class="radio radio-inline">
                      <input type="radio" value="0" name="status" {{# isset($infoProduct['status']) && $infoProduct['status'] !=1 ? "checked" : null}}>
                      <label for="inlineRadio2"> Hết hàng </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Keyword:</label>
                  <textarea class="form-control" name="keyword">{{# isset($infoProduct['keyword']) ? $infoProduct['keyword'] : null}}</textarea>
                  <span class="pull-right">Keyword:0</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Mô tả:</label>
                  <textarea class="form-control" name="description">{{# isset($infoProduct['description']) ? $infoProduct['description'] : null}}</textarea>
                  <span class="pull-right">0: ký tự</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Tag:</label>
                  <textarea class="form-control" name="tag">{{# isset($infoProduct['tag']) ? $infoProduct['tag'] : null}}</textarea>
                  <span class="pull-right">Tags:0</span>
                </div>
              </div>
              <div class="col-md-12">
                <button class="btn btn-w-md btn-primary btn-squared btnOk" name="btnOk" value="publish">Cập nhật <i class="fa fa-spinner fa-spin" style="display:none"></i></button>
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
                  <div class="col-md-3" style="position: relative; margin-bottom:5px;text-align: center;">
                    <img src="{{# URL::base_path('/public/uploads/')}}{{# $v}}" style="max-width:100%;height:128px">
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
