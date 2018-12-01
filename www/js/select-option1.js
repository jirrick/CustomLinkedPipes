	$(document).ready(function () {
  $('.stat1').hide();
  $('#myExample').show();
  $('#choose-stats1').change(function () {
    $('.stat1').hide();
    $('#'+$(this).val()).show();
  })
});