var txtName = $('#txtName');
var txtUrl = $("#txtUrl");
$(document).ready( function() {
	txtName.keyup(function() {
		var loader = txtUrl.parent().find('.fa-spinner');
		loader.show();
		$.ajax({
			url : 'http://localhost/fw/ajax/convertUrl',
			data: {input_url: $(this).val()},
			dataType : 'text',
			type: 'POST',
			success : function (result) {
				txtUrl.val(result);
			}
		}).done(function(){
			setTimeout(function(){
				loader.hide();
			}, 1500);
		});
		
	});

	$('.btnOk, .pagination-btn').click( function() {
		$('.panel, .tab-pane').toggleClass('ld-loading');
		$(this).attr('disable','disable');
		$(this).find('.fa-spin').show();
	} );
} );