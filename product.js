window.onload = function () {
  let cartitemlistarr = JSON.parse(localStorage.getItem("itemlist"));
  if (cartitemlistarr && cartitemlistarr.length > 0) {
    reloadShoppingCartView(cartitemlistarr);
  } else {
    document.getElementById(
      "cartitemlist"
    ).innerHTML = `<p class="NOITEMPROMOPT">You don't have any items in your cart. Let's get shopping!</p>`;
  }
};

function addtocart() {
  let itemname = document.getElementById("productName").innerHTML;
  let itemimg = document.getElementById("mainImg").src;
  let itemprice = document.getElementById("price").innerText;
  let itemObj = {
    productname: itemname,
    productimg: itemimg,
    productprice: itemprice,
  };
  let itemlistarr = JSON.parse(localStorage.getItem("itemlist"));
  if (!itemlistarr) {
    itemlistarr = [];
  }
  itemlistarr.push(itemObj);
  localStorage.setItem("itemlist", JSON.stringify(itemlistarr));

  reloadShoppingCartView(itemlistarr);
}

function reloadShoppingCartView(productList) {
  let totalprice = 0;
  let htmlContent = "";
  let pricehtmlcontent = "";
  productList.forEach((itemobj, index) => {
    htmlContent += `
      <div class="cartitem">
      <img
        class="cartimg"
        src= ${itemobj.productimg}
        alt="image of watch"
      />
      <p>${itemobj.productname}</p>
      <h5>$<span>${itemobj.productprice}</span></h5>
      <button class="btn btn-secondary btnremove" onclick="btnRemove(${index})">Remove</button>
      </div>
      <hr>`;
    totalprice += parseInt(itemobj.productprice);
    pricehtmlcontent = `
      <span>$${totalprice}</span>
      `;
  });
  if (productList.length === 0 || !productList) {
    htmlContent = `<p class="NOITEMPROMOPT">You don't have any items in your cart. Let's get shopping!</p>`;
  }
  document.getElementById("cartitemlist").innerHTML = htmlContent;
  document.getElementById("totalprice").innerHTML = pricehtmlcontent;
  document.getElementById("badge").innerHTML = productList.length;
}

function btnRemove(index) {
  let cartList = JSON.parse(localStorage.getItem("itemlist"));
  cartList.splice(index, 1);
  reloadShoppingCartView(cartList);
  localStorage.setItem("itemlist", JSON.stringify(cartList));
}

function subimgMouseover(ele) {
  document.getElementById("mainImg").src = ele.src;
}
