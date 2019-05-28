var itemCount = 0;
var priceTotal = 0;


// Add Item to Cart
$('.addtoCart').click(function (){
  itemCount ++;

  $('#itemCount').text(itemCount).css('display', 'block');
  $(this).siblings().clone().appendTo('#cartItems').append('<button type="button" class="removeItem"><span class="glyphicon glyphicon-trash"> </span></button>');

  // Calculate Total Price
  var price = parseInt($(this).siblings().find('.product_price').text()); 
  priceTotal += price;
  $('#cartTotal').text("Tổng giá: " + priceTotal +".000 ₫");
}); 












// Hide and Show Cart Items
$('.openCloseCart').click(function(){
  $('#shoppingCart').toggle();
});

// Remove Item From Cart
$('#shoppingCart').on('click', '.removeItem', function(){
  $(this).parent().remove();  
  itemCount --;
  $('#itemCount').text(itemCount);

  // Remove Cost of Deleted Item from Total Price
  var price = parseInt($(this).siblings().find('.product_price').text());
  priceTotal -= price;
  $('#cartTotal').text("Total: " + priceTotal +".000 ₫");

  if (itemCount == 0) {
    $('#itemCount').css('display', 'none');
  }
});
