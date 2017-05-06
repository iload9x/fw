$(function() {
    $("img.lazy").lazyload({
      effect: "fadeIn"
    });
  });
  $(document).ready(function() {
    $('#slider_video_home li:not(:first)').each(function() {
      var ifa = $(this).attr('data-iframe');
      var thum = Youtube.thumb(ifa);
      $(this).children().attr('src', thum);
    });
    $('#slider_video_home li:first-child').each(function() {
      var ifa = $(this).attr('data-iframe');
      var videoid = ifa.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);

      var replacement = '<iframe src="https://www.youtube.com/embed/' + videoid[1] + '" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>';
      $(this).html(replacement);
    });
    $('.more_pro').on('click', function() {
      var thebtn = $(this);
      var type = $(this).attr('data-type');
      var execute = $(this).attr('data-execute');
      if (type == "phone") {
        var total = $('.pro_con').length;
      } else if (type == 'fittings') {
        var total = $('.phukien_con').length;
      } else if (type == 'fix_phone') {
        var total = $('.ser_con').length;
      }
      var data = {
        name: 'load_more',
        type: type,
        total: total,
        execute: execute
      };
      loadAjax(
        data,
        'json', {
          beforeSend: function() {
            $('.' + type).css('display', 'block');
          },
          success: function(html) {
            $('.' + type).css('display', 'none');
            if (html.key == 1) {
              if (type == 'phone') {
                $('.product').append(html.html);
                box_auto_height('.pro_con');
                box_auto_height('.name_pro');
                if (html.count < 15) {
                  thebtn.remove();
                }
              } else if (type == 'fittings') {
                $('.phukien').append(html.html);
                box_auto_height('.phukien_con');
                box_auto_height('.name_pk');
                if (html.count < 16) {
                  thebtn.remove();
                }

              } else if (type == 'fix_phone') {
                $('.ser').append(html.html);
                box_auto_height('.ser_con');
                box_auto_height('.nam_ser');
                if (html.count < 15) {
                  thebtn.remove();
                }
              }
            } else {
              if (type == 'phone') {
                var myAlert = new cAlert('Điện thoại di động nổi bật trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              } else if (type == 'fittings') {
                var myAlert = new cAlert('Phụ kiện nổi bật cho điện thoại di động trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              } else if (type == 'fix_phone') {
                var myAlert = new cAlert('Dịch vụ nổi bật trên website đã hết ! Vui lòng truy cập các danh mục để xem thêm', 'warning', '', 5);
                myAlert.alert();
              }
            }
          }
        }
      );
    });
  });
  go_link_on_select("#go_phone_made");
  go_link_on_select("#order_phone");