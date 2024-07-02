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
$(".buildBox>select.Ability>option").click(function() {
  const sel = $(this).val();
  let slot = $(this).parent().attr("name").charAt(4);
  if(slot == 2)slot=1;
  if(slot == 4)slot=3;
  if(slot == 5)slot=6;
  if(slot == 8)slot=8;
  const invslot=slot;
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
      let chil = "#BuildAttr>:nth-child("+slot+")";
      let wstaw = "<img src='img/itemy/"+AttrArray[0][3]+"'>";
      let keybind = AttrArray[0][2];
      let abbInd=0;
      AttrArray.forEach(element => {
        if(element[2]!=keybind){
          console.log(wstaw);
          $(chil).empty().html(wstaw);
          keybind = element[2];
          wstaw="<img src='img/itemy/"+AttrArray[0][3]+"'>";
          slot++;
          chil="#BuildAttr>:nth-child("+slot+")";
          abbInd=0;
        }
        wstaw=wstaw+"<img src='img/umiejetnosci/"+element[1]+"'><input type='radio' name='"+invslot+element[2]+"'value='"+abbInd+"' required>";
        abbInd++;
      });
      console.log(wstaw);
      $(chil).empty().html(wstaw);
    }
  });


});
