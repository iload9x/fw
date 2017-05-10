$(document).ready(function() {
  $(".panel-body").on('click', '.btnDelete', function() {
    $(this).parent().parent().remove();
    return false;
  });
});