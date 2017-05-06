$(document).ready(function(){
    $(function() {
        $("img.lazy").lazyload({
            effect : "fadeIn"
            });
    });
    $('#timhieu i').hover(function(e){
       $(this).append("<div id='text_hover'><span class='tip'></span>Tìm hiểu thêm về bảo hành vàng.<div>");
    },
    function(e){
        $('#text_hover').remove();
    });
    $('#slider_video li:not(:first)').each(function(){
        var ifa = $(this).attr('data-iframe');
        var thum = Youtube.thumb(ifa);
        $(this).children().attr('src',thum);
    });
    $('#slider_video li:first-child').each(function(){
        var ifa = $(this).attr('data-iframe');
        var videoid = ifa.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
        
        var replacement = '<iframe src="https://www.youtube.com/embed/'+videoid[1]+'" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';
        $(this).html(replacement);
    });
    //click nút xem thông số kt
    $('.btn_more').on('click',function(){
        $('body').css('overflow','hidden');
        $('.detail_pro_more').bPopup({
            closeClass:'close_popup',
            contentContainer:'.detail_pro_more',
            loadUrl:'/specifications.htm?id=295',
            zIndex:99999,
            onClose:function(){
                $('body').removeAttr('style');
            }
        });
    });
            var dataAttribute = [{"color":"#000000","storage":"16GB","price":2050000},{"color":"#ffffff","storage":"16GB","price":2150000},{"color":"#c8a046","storage":"16GB","price":2250000},{"color":"#000000","storage":"32GB","price":2250000},{"color":"#ffffff","storage":"32GB","price":2350000},{"color":"#c8a046","storage":"32GB","price":2450000},{"color":"#000000","storage":"64GB","price":2550000},{"color":"#ffffff","storage":"64GB","price":2650000},{"color":"#c8a046","storage":"64GB","price":2750000}]        //click nút chọn màu
        $('.colo').on('click',function(){
            var el = $(this);
            $('.colo').removeClass('active_colo');
            el.addClass('active_colo');
            $('#baohanh').val(0);//cho cái bhv về mặc định
            var currentColor = el.attr('data-color');
            var currentStorage = $('#dungluong').val();
            var currentPrice = 0;
            $.each(dataAttribute,function(key,value) {
                if(value.color == currentColor && value.storage == currentStorage){
                    currentPrice = value.price;
                }
            });
            if(currentPrice > 0) {
                $('.price').attr('data-price',currentPrice);
                var price = format_price(currentPrice,0,',','.');
                $('.price').html(price);
                $('.price_left').html(price);
                $('.price_plus').html(price);
            }
        });
        //chọn dung lượng
        $('#dungluong').on('change',function(){
            var el = $(this);
            var currentColor = $('.active_colo').attr('data-color');
            if(typeof currentColor !== 'undefined') {
                $('#baohanh').val(0);//cho cái bhv về mặc định
                var currentStorage = el.val();
                var currentPrice = 0;
                $.each(dataAttribute,function(key,value) {
                    if(value.color == currentColor && value.storage == currentStorage){
                        currentPrice = value.price;
                    }
                });
                if(currentPrice > 0) {
                    $('.price').attr('data-price',currentPrice);
                    var price = format_price(currentPrice,0,',','.');
                    $('.price').html(price);
                    $('.price_left').html(price);
                    $('.price_plus').html(price);
                }
            }
        });
        //chọn bhv
        $('#baohanh').on('change',function(){
            var el = $(this);
            var priceData = $('.price').attr('data-price');
            priceData = parseInt(priceData);
            if(priceData == 68000000) {
                return;
            }
            var priceBhv = el.val();
            priceBhv = parseInt(priceBhv);
            var price = priceData + priceBhv; 
            price = format_price(price,0,',','.');
            $('.price').html(price);
            $('.price_plus').html(price);
            $('.price_left').html(price);
        });
        });