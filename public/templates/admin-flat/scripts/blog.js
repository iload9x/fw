$(document).ready(function() {

  $("#tab-1").on('click', '.btnDelete', function() {

    $(this).parent().parent().remove();
    return false;
  });
});