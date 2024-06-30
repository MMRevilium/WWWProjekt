//////Display item

//Hover
$(".buildBox>select>option").hover(function() {
  $img = "url(img/itemy/" + $(this).attr('mypng');
  $(this).parent().css("background-image",$img);
}, //Unhover
function() {
  $img = "url(img/itemy/" + $(this).parent().find(':selected').attr('mypng');
  $(this).parent().css("background-image",$img);
});

//Click
$(".buildBox>select>option").click(function() {
  $test = "url(img/itemy/" + $(this).attr('mypng');
  $(this).parent().css("background-image",$test);
});

//HideSelect
$(".buildBox>select").children().hide();
$(".buildBox>select").hover(function() {
  $(this).children().show();
},function() {
  $(this).children().hide();
});

//DisplayAttr
$(".buildBox>select>option").click(function() {
  const sel = $(this).val();
  console.log(sel);
  $.post("scriplet/getAttr.php", {ItemID: +sel}, function(data) {
    console.log(data);
    let AttrArray = data.split("|");
    AttrArray.pop();
    for (let index = 0; index < AttrArray.length; index++) {
      AttrArray[index]=AttrArray[index].split(",");
      
    }
    console.log(AttrArray);
  });


});
