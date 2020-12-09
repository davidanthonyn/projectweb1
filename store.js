var removeCartItemButtons = document.getElementByClassName('btn-danger')
console.log(removeCartItemButtons)
for(var i = 0; i < removeCartItemButtons.length; i++) {
	var button = removeCartItemButtons[i]
	button.addEventListener('click', function(event) {
		var buttonClicked = event.target
		buttonClicked.parentElement.parentElement.remove()
		updateCartTotal()
	})
}

function updateCartTotal() {
	var cartItemContainer = document.getElementsByClassName('cart-info')[0]
	var cartRows = cartItemContainer.getElementsByClassName('cart-row')
	var total = 0
	for(var i = 0; i < cartRows.length; i++) {
		var cartRow = cartRows[i]
		var priceElement = cartRow.getElementsByClassName('cart-price')[0]
		var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
		var price = parseFloat(priceElement.innerText.replace('Rp. ', ''))
		var quantity = quantityElement.value
		total = total + (price * quantity)
	}
	document.getElementsByClassName('cart-total-price')[0].innerText = 'Rp. ' + total
}
