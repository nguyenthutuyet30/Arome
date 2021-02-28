/**
 * cart services
 * @param cart[],shipping_type_id,payment_method_id'
 * @return update patial...
 * author: Polina
 * version: 1.0.0
 */
//addToCart
function addCart(id, qty) {
  const had_product = document.getElementById("offered_" + id);
  if (had_product) {
    qty = parseInt(qty) + parseInt(had_product.dataset.qty);
  }
  let data = {
    cart: [{ offer_id: id, quantity: qty }],
  };
  $.request("Cart::onAdd", {
    data: data,
    update: { "cart/mini-cart": ".mini-cart-wrapper" },
    
  });
}

function buyNow(id, qty) {
  const had_product = document.getElementById("offered_" + id);
  if (had_product) {
    qty = parseInt(qty) + parseInt(had_product.dataset.qty);
  }
  let data = {
    cart: [{ offer_id: id, quantity: qty }],
  };
  $.request("Cart::onAdd", {
    data: data,
    update: { "cart/mini-cart": ".mini-cart-wrapper" },
    redirect: './cart',
  });
}

//remowItem
function removeItem(id) {
  let element = $(".cart-inner-item-" + id);
  let data = {
    cart: [id],
  };
  $.request("Cart::onRemove", {
    data: data,
    update: { "cart/mini-cart": ".mini-cart-wrapper" },
    beforeUpdate: function (reponse) {
      if (reponse.data.total_quantity == 0) {
        $(".checkItem").html("Giỏ hàng trống");
      }
      element.remove();
    },
  });
}

//update cart
let ofset;
let qty = [];
let inc = document.querySelectorAll(".inc");

inc.forEach(function (element, i) {
  qty[i] = parseInt(element.dataset.qty);
  let max = parseInt(element.dataset.max);
  inc[i].onclick = function () {
    if (qty[i] >= max) {
      alert("NO IDEA FOR YOU");
      return;
    }
    qty[i]++;
    upCart(element.dataset.offer, qty[i], element.dataset.cart);
  };
});

let dec = document.querySelectorAll(".dec");
dec.forEach(function (element, i) {
  qty[i] = parseInt(element.dataset.qty);
  dec[i].onclick = function () {
    if (qty[i] < 1) {
      alert("NO IDEA FOR YOU");
      return;
    }
    qty[i]--;
    upCart(element.dataset.offer, qty[i], element.dataset.cart);
  };
});

let input = document.querySelectorAll(".input-qty-cart");

input.forEach(function (element, i) {
  let max = parseInt(element.dataset.max);
  input[i].onkeyup = function () {
    if ((this.value >= max) | (this.value < 1)) {
      this.value = element.dataset.qty;
      alert("NO IDEA FOR YOU");
      return;
    } else {
      qty[i] = this.value;
      upCart(element.dataset.offer, qty[i], element.dataset.cart);
    }
  };
});

function upCart(id, qty, cartPId) {
  let data;
  data = { cart: [{ offer_id: id, quantity: qty }] };
  $.request("Cart::onUpdate", {
    data: data,
    update: { "cart/mini-cart": ".mini-cart-wrapper" },
    beforeUpdate: function (respone) {
      const dataRp = respone.data.position;
      const dataMap = Object.keys(dataRp)
        .filter((key) => key == cartPId)
        .reduce((obj, key) => {
          obj[key] = dataRp[key];
          return obj;
        }, {});
      const finalData = Object.keys(dataMap).map((key) => dataMap[key]);
      document.getElementsByClassName(`itemqty-${cartPId}`)[0].value =
        finalData[0].quantity;
      document.getElementsByClassName(`itemqty-${cartPId}`)[0].max =
        finalData[0].max_quantity;
      document.getElementsByClassName(`dec-${cartPId}`)[0].dataset.qty =
        finalData[0].quantity;
      document.getElementsByClassName(`total-price-${cartPId}`)[0].innerHTML =
        finalData[0].price;
      if (document.getElementsByClassName(`old-price-${cartPId}`)[0]) {
        document.getElementsByClassName(`old-price-${cartPId}`)[0].innerHTML =
          finalData[0].old_price;
      }
      document.getElementsByClassName("total-price-cart")[0].innerHTML =
        respone.data.total_price.price;
    },
  });
}

//check user
let userInCart = document.getElementById("checkUser");
if (userInCart) {
  const user = document.querySelector('meta[name="user"]').content;
  if (user == "") {
    $("#userLogin").modal("show");
  }
}
//Prepare object with offers
// let data = {
//     'cart': [
//         { 'offer_id': 32, 'quantity': 4 },
//         { 'offer_id': 44, 'quantity': 1 }
//     ],
//     'shipping_type_id': 4,
//     'payment_method_id': 3
// };

// //Send ajax request and update cart items
// $.request('Cart::onAdd', {
//     'data': data,
//     'update': { 'cart/mini-cart': '.mini-cart-wrapper' }
// });
// //Send ajax request and update cart items
// $.request('Cart::onUpdate', {
//     'data': data,
//     'update': { 'cart/mini-cart': '.mini-cart-wrapper' }
// });

// let checkLogin = document.getElementById('login').addEventListener('click', checkFunctionLogin);
// let checkNext = document.getElementById('next').addEventListener('click', checkFunctionNext);

// function checkFunctionLogin() {
//     window.location.replace("/aroma/login");
// }

// function checkFunctionNext() {
//     const user = document.querySelector('meta[name="user"]').content;
//     $('#userLogin').modal('hide');
// }
