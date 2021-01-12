//ajax

$(document).ready(function(){
  $.ajax({
    type:'post',
    url:'storecart.php',
    data:{
      total_cart_items:"totalitems"
    },
    success:function(response) {
      document.getElementById("cart_items").value=response;
    }
  });

});

function cart(id)
{
  var ele=document.getElementById(id);
  var img_src=ele.getElementsByTagName("img")[0].src;
  var name=document.getElementById(id+"_name").value;
  var price=document.getElementById(id+"_price").value;

  $.ajax({
    type:'post',
    url:'storecart.php',
    data:{
      item_src:img_src,
      item_name:name,
      item_price:price
    },
    success:function(response) {
      document.getElementById("cart_items").value=response;
      $('#alertmsg').html("Added to Cart").fadeIn('slow').delay(2000).fadeOut('slow');
    }
  });

}

function show_cart()
{
  $.ajax({
  type:'post',
  url:'storecart.php',
  data:{
    showcart:"cart"
  },
  success:function(response) {
    document.getElementById("modal-body").innerHTML=response;
  }
 });

}
