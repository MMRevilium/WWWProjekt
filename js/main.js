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
  const slot = $(this).parent().attr("name").charAt(4);
  console.log(slot);
  $.post("scriplet/getAttr.php", {ItemID: +sel}, function(data) {
    //console.log(data);
    if (data == "None") {}
    else {
      let AttrArray = data.split("|");
      AttrArray.pop();
      for (let index = 0; index < AttrArray.length; index++) {
        AttrArray[index]=AttrArray[index].split(",");
      }
      console.log(AttrArray);
      const chil = "#BuildAttr :nth-child("+slot+")";
      let wstaw = "<img src='img/itemy/"+AttrArray[0][4]+"'>";
      AttrArray.forEach(element => {
        wstaw=wstaw+"<img src='img/umiejetnosci"+element[1]+"'><input type='radio' name='"+slot+element[2]+"'>";
      });
      $(chil).empty().append(wstaw);

    }
  });


});
