$(document).ready(function() {
  $(".select2_demo_2").select2();
  $('.summernote').summernote();



  $("form").on('click', '.btnAddItemCoupons', function() {
    var html = '<div class="rowItem">' +$(this).parent().parent().parent().html()+ '</div>';
    $(this).parent().parent().parent().parent().append(html);
  });
  
  $("form").on('click', '.btnAddItemStorage', function() {
    var selectStoragePrice = $(this).parent().find(".selectStoragePrice").val();
    var selectStorage = $(this).parent().parent().parent().find(".selectStorage").val();
    if (selectStorage == "") {
      return false;
    };
    if($("#tab-1").find('[data-storage="'+selectStorage+'"]').length > 0) {
      return false;
    }
    var html = '<div class="rowItem">';
      html += '<div class="form-group col-md-12">';
      html +=   '<div class="input-group col-md-12  col-xs-12 col-sm-12">';
      html +=     '<input type="hidden" name="storage[]" value="'+selectStorage+'" data-storage="'+selectStorage+'">';
      html +=     '<div class="input-group-addon" style="background:#52555f; color:#fff; border:none">'+selectStorage+'GB</div>';
      html +=     '<input type="text" name="storagePrice[]" class="form-control" id="exampleInputAmount" placeholder="" value="'+selectStoragePrice+'">';
      html +=     '<div class="btnRemoveItemStorage input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>';
      html +=   '</div>';
      html += '</div>';
      html += '</div>';
    $(this).parent().parent().parent().parent().append(html);
  });

  $("form").on('click', '.btnAddItemColor', function() {
    var selectColorPrice = $(this).parent().find(".selectColorPrice").val();
    var selectColor = $(this).parent().parent().parent().find(".selectColor").val();
    if (selectColor == "") {
      return false;
    };
    if($("#tab-1").find('[data-color="'+selectColor+'"]').length > 0) {
      return false;
    }
    var html = '<div class="rowItem">';
      html += '<div class="form-group col-md-12">';
      html +=   '<div class="input-group col-md-12  col-xs-12 col-sm-12">';
      html +=     '<input type="hidden" name="color[]" value="'+selectColor+'" data-color="'+selectColor+'">';
      html +=     '<div class="input-group-addon" style="background:#52555f; color:#fff; border:none">'+selectColor+'GB</div>';
      html +=     '<input type="text" name="colorPrice[]" class="form-control" id="exampleInputAmount" placeholder="" value="'+selectColorPrice+'">';
      html +=     '<div class="btnRemoveItemColor input-group-addon" style="color:#fff"><i class="fa fa-plus"></i></div>';
      html +=   '</div>';
      html += '</div>';
      html += '</div>';
    $(this).parent().parent().parent().parent().append(html);
  });

  $("form#uploadImages").submit(function() {
    $.ajax({
      url: base_url + 'ajax/uploadImages',
      type: "POST",
      data: new FormData(this),
      dataType: 'json',
      contentType: false, // The content type used when sending data to the server.
      cache: false, // To unable request pages to be cached
      processData: false, // To send DOMDocument or non processed data file it is set to false
      success: function(data) {
        if (data.hasOwnProperty('imageUrls')) {
          var html = '';
          $.each(data['imageUrls'], function(index, item) {
            html += '<div class="col-md-3" style="position: relative; margin-bottom:5px;">';
            html += '<img src="' + base_url + 'public/uploads/' + item + '" width="100%">';
            html += '<div class="lg-image">';
            html += '<button class="btn btn-default btn-xs btnXem">Xem</button>';
            html += '<button class="btn btn-default btn-xs btnCopy">Copy</button>';
            html += '</div>';
            html += '</div>';
          });
          $(".listImageUploaded").html(html + $(".listImageUploaded").html());
        } else {
          alert('Có lỗi xảy ra trong quá trình upload!');
        };
      }
    }).done(function() {
      // $("form#uploadImages").find(".fileuploader-item").remove();
      $("#selectImages").val("");
      // $("form#uploadImages").find("input[name='fileuploader-list-files']").val("");
      $('.panel, .tab-pane').toggleClass('ld-loading');
      $('.panel, .tab-pane').removeAttr('disable');
      $('.panel, .tab-pane').find('.fa-spin').hide();
    });
    return false;
  });

  $("#tab-3").on('click', '.btnCopy', function() {
    var hrefData = $(this).parent().parent().find('img').attr('src');
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(hrefData).select();
    document.execCommand("copy");
    $temp.remove();
  });

  $("#tab-1").on('click', '.btnDelete', function() {
    $(this).parent().parent().remove();
  });


  $("form#specsForm").submit(function() {
    $.post(base_url + 'admin/cart/specs/add', $(this).serialize(), function(data) {
      if (data.errors) {
        alert(data.errors);
      } else if (data.success) {
        alert(data.success);
      }
    }, "json").done(function() {

    });

    return false;
  });



});

// function copyToClipboard(element) {
//     var $temp = $("<input>");
//     $("body").append($temp);
//     $temp.val($(element).attr('href=)).select();
//     document.execCommand("copy");
//     $temp.remove();
// }
