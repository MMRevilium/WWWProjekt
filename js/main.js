$(".buildBox>select>option").hover(function() {
  $img = "url(img/itemy/offhand/" + $(this).attr('mypng');
  $(this).parent().css("background-image",$img);
},
function() {
  $img = "url(img/itemy/offhand/" + $(this).parent().find(':selected').attr('mypng');
  $(this).parent().css("background-image",$img);
});

$(".buildBox>select>option").click(function() {
  $test = "url(img/itemy/offhand/" + $(this).attr('mypng');
  $(this).parent().css("background-image",$test);
});

$(".buildBox>select").children().hide();
$(".buildBox>select").hover(function() {
  $(this).children().show();
},function() {
  $(this).children().hide();
});