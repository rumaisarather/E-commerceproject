 
 if (document.readyState =='loading'){
    document.addEventListener('DOMContentLoaded',ready)
 } else{
    ready()
 }
 function ready(){
    var removeCartItem = document.getElementsByClassName('btn-danger')
    console.log(removeCartItem)
   for(var i=0; i< removeCartItem.length; i++){
      var button = removeCartItem[i]
      button.addEventListener('click', function(event){
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
      })
    }
}
 function updateCartTotal(){
     var cartItemContainer = document.getElementsById('from-control-sm')[0]
     var cartRows = cartItemContainer.getElementsById('from-control-sm')
     var total =0
     for(var i=0; i < cartRows.length; i++){
    var cartRow = cartRows[i]
 var priceElement = cartRow.getElementsById('price')[0]
var quantityElement = cartRow.getElementsById('qty')[0]
var quantityElement = cartRow.getElementsById('tax')[0]

var price = parseFloat(priceElement.innerText.replace())
var quantity =quantityElement.value
total = total + (price * qty)
 }
 document.getElementsById('cart-total')[0].innerText ='$' + total
}
