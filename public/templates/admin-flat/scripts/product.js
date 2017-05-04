$(document).ready(function() {
	$(".select2_demo_2").select2();
    $('.summernote').summernote();

	$("form#uploadImages").submit(function() {
		$.ajax({
			url: base_url + 'ajax/uploadImages', 
			type: "POST",             
			data: new FormData(this),
			dataType: 'json',
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,       // To send DOMDocument or non processed data file it is set to false
			success: function(data) {
				if (data.hasOwnProperty('imageUrls')) {
					var html = '';
					$.each(data['imageUrls'], function (index, item){
						html += '<div class="col-md-3" style="position: relative; margin-bottom:5px;">';
						html += '<img src="'+base_url+'public/uploads/'+item+'" width="100%">';
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


	$("form#specsForm").submit(function(){
		$.post(base_url + 'admin/cart/specs/add', $(this).serialize(), function(data) {
			if (data.errors) {
				alert(data.errors);
			} else if(data.success) {
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