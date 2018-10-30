$(document).ready(function(){
  $(".addToCartBtn").on("click",function(){
    var url = "http://localhost/alisverissepeti/lib/cart_db.php";
    var data = {
      p : "addToCart",
      product_id : $(this).attr("products-id")
    }
    $.post(url , data , function (response){
    $(".cart-count").text(response);
    });
  });

  $(".removeFromCart").on("click",function(){

    var url = "http://localhost/alisverissepeti/lib/cart_db.php";
    var data = {
      p : "removeFromCart",
      product_id : $(this).attr("product_id")
    }
    console.log(data.product_id);
    $.post(url , data , function (response){
    });
    window.location.reload();
  });
});
