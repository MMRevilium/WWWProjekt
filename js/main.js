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
  $.post("scriplet/getAttr.php", {ItemID: +sel}, function(data) {
    if (data == "None") {}
    else {
      let AttrArray = data.split("|");
      AttrArray.pop();
      for (let index = 0; index < AttrArray.length; index++) {
        AttrArray[index]=AttrArray[index].split(",");
      }
      let chil = "#BuildAttr>:nth-child("+slot+")";
      let wstaw = "<img src='img/itemy/"+AttrArray[0][3]+"'>";
      let keybind = AttrArray[0][2];
      let abbInd=0;
      AttrArray.forEach(element => {
        if(element[2]!=keybind){
          $(chil).empty().html(wstaw);
          keybind = element[2];
          wstaw="<img src='img/itemy/"+AttrArray[0][3]+"'>";
          slot++;
          chil="#BuildAttr>:nth-child("+slot+")";
          abbInd=0;
        }
        wstaw=wstaw+"<img src='img/umiejetnosci/"+element[1]+"'class='abimg'><input type='radio' name='"+invslot+element[2]+"'value='"+abbInd+"' required>";
        abbInd++;
      });
      $(chil).empty().html(wstaw);

      $(".attrbar>input").hide();
      $(".attrbar>img.abimg").addClass("grayscale");
      $(".attrbar>input[checked]").prev().removeClass("grayscale").addClass("whiteshadow");
      $(".attrbar>img.abimg").on("click",function(){
        let named = "input[name='"+$(this).next().attr('name')+"']";
        $(named).removeAttr("checked");
        $(this).next().attr("checked","1");
        $(this).parent().children(".abimg").addClass("grayscale").removeClass("whiteshadow");
        $(this).removeClass("grayscale").addClass("whiteshadow");
      });
      $(".attrbar>img.abimg").hover(function(){
        $(this).css("transform","scale(1.2)");
      },function(){
        $(this).css("transform","scale(1)");
      })
    }
  });
});
$(".buildCard").on("click", function()
{
  let id = $(this).find(">:first-child()").val();
  window.location="details.php?id="+id;
});
// $(document).ready(function(){
//   $
// })

$("#editButton").on("click",function(){
  let id = $(this).attr('data');
  let urll = "edit.php?id="+id;
  window.location=urll;
})
$("#deleteButton").on("click",function(){
  let id = $(this).attr('data');
  let obrazek = $(this).attr('data-img');
  let urll = "fun/deleteBuild.php?id="+id+"&obrazek="+obrazek;
  window.location=urll;
})
//ReplaceTHIS
$("#addComment").on("click",function(){
  $.post("fun/addComment.php", {id: $(this).attr('data'), text: $("#KomentarzZawartosc").val()}, function(data){
    if (data) {
      let save = $("#CommentsDisplay").html();
      save+=data;
      $("#CommentsDisplay").html(save);
    }
  })
  // let id=$(this).attr('data');
  // let urll = "fun/addComment.php?id="+id;
  // window.location = urll;
})

//LoadForEdit
$(".buildBox>select").each(function() {
  $(this).find(":selected").each(function(){
    $test = "url(img/itemy/" + $(this).attr('mypng');
    $(this).parent().css("background-image",$test);
  });
});

$(".buildBox>select.Ability>option[selected]").each(function() {
  const sel = $(this).val();
  let slot = $(this).parent().attr("name").charAt(4);
  if(slot == 2)slot=1;
  if(slot == 4)slot=3;
  if(slot == 5)slot=6;
  if(slot == 8)slot=8;
  const invslot=slot;
  $.post("scriplet/getAttr.php", {ItemID: +sel}, function(data) {
    if (data == "None") {}
    else {
      let AttrArray = data.split("|");
      AttrArray.pop();
      for (let index = 0; index < AttrArray.length; index++) {
        AttrArray[index]=AttrArray[index].split(",");
      }
      let chil = "#BuildAttr>:nth-child("+slot+")";
      let selAb = $(chil).text();
      let wstaw = "<img src='img/itemy/"+AttrArray[0][3]+"'>";
      let keybind = AttrArray[0][2];
      let abbInd=0;
      AttrArray.forEach(element => {
        if(element[2]!=keybind){
          $(chil).empty().html(wstaw);
          keybind = element[2];
          wstaw="<img src='img/itemy/"+AttrArray[0][3]+"'>";
          slot++;
          chil="#BuildAttr>:nth-child("+slot+")";
          selAb = $(chil).text();
          abbInd=0;
        }
        wstaw=wstaw+"<img src='img/umiejetnosci/"+element[1]+"' class='abimg'><input type='radio' name='"+invslot+element[2]+"'value='"+abbInd+"' required";
        if (selAb==abbInd) {wstaw+=" checked";}
        wstaw+=">";
        abbInd++;
      });
      $(chil).empty().html(wstaw);

      $(".attrbar>input").hide();
      $(".attrbar>img.abimg").addClass("grayscale");
      $(".attrbar>input[checked]").prev().removeClass("grayscale").addClass("whiteshadow");
      $(".attrbar>img.abimg").on("click",function(){
        let named = "input[name='"+$(this).next().attr('name')+"']";
        $(named).removeAttr("checked");
        $(this).next().attr("checked","1");
        $(this).parent().children(".abimg").addClass("grayscale").removeClass("whiteshadow");
        $(this).removeClass("grayscale").addClass("whiteshadow");
      })
      $(".attrbar>img.abimg").hover(function(){
        $(this).css("transform","scale(1.2)");
      },function(){
        $(this).css("transform","scale(1)");
      })
    }
  });
});

$("#saveNew").hover(function(){
  $("form").attr("action","fun/insertBuild.php");
});
$("#updateBuild").hover(function(){
  $("form").attr("action","fun/updateBuild.php");
});

$(".buildCard").hover(function(){
  $(this).css("transform","scale(1.05)");
  $(this).css("z-index","9");
}, function(){
  $(this).css("transform","scale(1)");
  $(this).css("z-index","1");
});

$("#plusIcon").on("click",function(){
  let buildID = $(this).attr('data');
  //console.log(userID);
  $.post("fun/addLike.php", {buildID: buildID, minus: 0}, function(data) {
  if(data="success") {
    $("#plusIcon").attr("src","img/PlusMarked.png");
    $("#minusIcon").attr("src","img/Minus.png");
  }
  likesUpdate(buildID);
  })

})
$("#minusIcon").on("click",function(){
  let buildID = $(this).attr('data');
  //console.log(userID);
  $.post("fun/addLike.php", {buildID: buildID, minus: 1}, function(data) {
    if(data="success") {
      $("#minusIcon").attr("src","img/MinusMarked.png");
      $("#plusIcon").attr("src","img/Plus.png");
    }
    likesUpdate(buildID);
  })
})

$(".itemQuery-content").on("click","img",function(){
  let selectedItem = $(this).attr("data");
  let image = $(this).attr("src");
  $(this).parent().prev().val(selectedItem);
  $(this).parent().prev().css("background-image", "url("+image+")");
  $(this).parent().prev().css("background-size","10ch");
  $(this).parent().prev().css("background-position","-1ch -1ch");
  console.log(image);
})

function likesUpdate(buildID){
  $.post("fun/getLikes.php", {buildID: buildID}, function(data) {
    $("#likesText").text(" "+data+" ");
  }
)}

$("#hideButton").on("click",function addText(){
  $(this).attr("value","Potwierdź");
  $(this).css("background-color","rgb(50,80,50)");
  $(this).css("border-color","rgb(60,90,60)");

  $(this).hover(function(){
    $(this).css("background-color","rgb(80,110,80)");
  },function(){
    $(this).css("background-color","rgb(50,80,50)");
  });

  $(this).off("click",addText);

  $(this).parent().append("<textarea id='warn' name='warn'></textarea>");
  $(this).on("click",function(){
    let tekst = $("#warn").val();
    $("#warn").val("");
    let buildID = $(this).attr('data');
    let authorID = $(this).attr('data2');
    $.post("fun/addNotif.php", {text: tekst, buildID: buildID, authorID: authorID}, function(data){
      if(data=="success") {$("$hideButton").attr("value","Wysłano")};
    })
  })
})

$(".notif-single").on("click","div>input",function(){
  let id = $(this).attr('data');
  $(this).parent().parent().remove();
  $("#num").attr("data",Number($("#num").attr("data")-1));
  if(Number($("#num").attr("data")==0)){
    $("#notif").html("Brak<br>powiadomień");
  }
  $.post("fun/deleteNotif.php",{id: id}, function(data){
    if(data=='success'){
      $(this).remove();
    }
  })
})

$(".banButton").on("click",function(){
  let id = $(this).attr('data');
  $.post("fun/banUser.php",{id: id},function(data){
    console.log(data);
  })
  $(this).attr("value","Zbanowano");  
})

$(".adminBan").on("click",function(){
  let id = $(this).attr('data');
  $.post("fun/banUser.php",{id: id},function(data){
    console.log(data);
  })
  $(this).parent().prev().text("Tak");
  console.log($(this).parent().prev());
})

$(".unbanButton").on("click",function(){
  let id = $(this).attr('data');
  $.post("fun/unbanUser.php",{id: id},function(data){
    console.log(data);
  })
  $(this).parent().prev().text("Nie");
})
