var book = null;
var i = 0;
window.onload = () => {
  const amount = document.getElementById("amount");
  amount.addEventListener("change", subTotal);
  const closeModal = document.getElementById("closeModal");
  closeModal.addEventListener("click", hidePopup);
  const addToShoppingCar = document.getElementById("addToShoppingCar");
  addToShoppingCar.addEventListener("click", ShoppingCart);
};

subTotal = () => {
  //動態計算所選餐點金額
  var amount = document.getElementById("amount").value;
  var price = document.getElementById("price").value;
  var total = price * amount;
  document.getElementById("subTotal").value = total;
};

hidePopup = () => {
  //關閉訂購彈跳視窗自動回覆預設值
  document.getElementById("selectedMeal").selectedIndex = "";
  document.getElementById("meals").selectedIndex = "0";
  document.getElementById("marinade").selectedIndex = "0";
  document.getElementById("feed ").selectedIndex = "0";
  document.getElementById("spicy").selectedIndex = "0";
  document.getElementById("cut").selectedIndex = "0";
  document.getElementById("amount").selectedIndex = "0";
  document.getElementById("price").innerHTML = "";
};

on = (item) => {
  //打開商品細選選擇視窗，並抓取便當名稱及金額
  document.getElementById("selectedMeal").value =
    item.parentNode.parentNode.firstChild.nextSibling.nextSibling.nextSibling.firstChild.nextSibling.firstChild.innerHTML;
  document.getElementById("price").value =
    item.parentNode.previousSibling.previousSibling.firstChild.nextSibling.nextSibling.nextSibling.firstChild.innerHTML;
  document.getElementById("picture").value =
    item.parentNode.previousSibling.previousSibling.firstChild.nextSibling.nextSibling.nextSibling.lastChild.innerHTML;
  let amount = document.getElementById("amount").value;
  let price = document.getElementById("price").value;
  let total = price * amount;
  document.getElementById("subTotal").value = total;
};

ShoppingCart = () => {
  //將選購好的商品及細項加入購物車
  const total = document.getElementById("subTotal").value;
  const checkOut = document.getElementById("bill").innerHTML;
  const Original = document.getElementById("Sidebar").innerHTML;
  if (book == null || Original == "") {
    i = i + 1;
    book = book + 1;
    const parent = document.getElementById("Sidebar");
    const div = document.createElement("div"); //新增 div

    div.setAttribute("id", i); //設定 div id
    div.innerHTML = `
        <table class="table"><tr>
        <td><input type="text" size="6" name="selectedMeal[]" value=${
          document.getElementById("selectedMeal").value
        } style="outline:none;border:none;font-size:5vmin" readonly="readonly"></td>
        <td class="text-right"><a onclick="del(this)" value="x" style="width:3vmin"><i class="fas fa-times-circle"></i></a></td>
        </tr><tr>
        <td colspan="2"><img src="images/${
          picture.value
        }.png" class="img-fluid" readonly="readonly"></td>
        </tr><tr>
        <td>飯量</td>
        <td><input type="text" size="3" name="meals[]" value=${
          document.getElementById("meals").value
        } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td >滷汁</td>
        <td><input type="text" size="3" name="marinade[]" value=${
          document.getElementById("marinade").value
        } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td >加料</td>
        <td><input type="text" size="3" name="feed[]" value=${
          document.getElementById("feed ").value
        } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td>加辣</td>
        <td ><input type="text" size="3" name="spicy[]" value=${
          document.getElementById("spicy").value
        } 
         style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td>是否要切</td>
        <td> <input type="text" size="3" name="cut[]" value=${
          document.getElementById("cut").value
        } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td>數量</td>
        <td><input type="text" size="2" name="amount[]"  value=${
          document.getElementById("amount").value
        } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
        </tr><tr>
        <td>小計</td>
        <td><input type="text" size="6" name="sum[]" style="outline:none;border:none;float:right;text-align:right"readonly="readonly" value=${
          document.getElementById("subTotal").value
        } ></td></tr></table>`;

    parent.appendChild(div);
    document.getElementById("orderButton").style.display = "block"; //如為加入第一個商品，顯示訂購按鈕
    document.getElementById("meals").selectedIndex = "0"; //每加入成功一件商品，自動還原預設值
    document.getElementById("marinade").selectedIndex = "0";
    document.getElementById("feed ").selectedIndex = "0";
    document.getElementById("spicy").selectedIndex = "0";
    document.getElementById("cut").selectedIndex = "0";
    document.getElementById("amount").selectedIndex = "0";
    document.getElementById("bill").innerHTML = total; //將總金額顯示於按鈕上
    document.getElementById("total").value = document.getElementById(
      "bill"
    ).innerHTML;
  } else {
    i = i + 1;
    let parent = document.getElementById("Sidebar");
    let div = document.createElement("div");

    div.setAttribute("id", i);
    div.setAttribute("class", "container"); //設定div class
    div.innerHTML = `
      <table class="table"><tr>
      <td><input type="text" size="6" name="selectedMeal[]" value=${
        document.getElementById("selectedMeal").value
      } style="outline:none;;border:none;font-size:5vmin" readonly="readonly"></td>
      <td class="text-right"><a onclick="del(this)" value="x" style="width:3vmin"><i class="fas fa-times-circle"></i></a></td>
      </tr><tr>
      <td colspan="2"><img src="images/${
        picture.value
      }.png" class="img-fluid" readonly="readonly"></td>
      </tr><tr>
      <td>飯量</td>
      <td><input type="text" size="3" name="meals[]" value=${
        document.getElementById("meals").value
      } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td >滷汁</td>
      <td><input type="text" size="3" name="marinade[]" value=${
        document.getElementById("marinade").value
      } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td >加料</td>
      <td><input type="text" size="3" name="feed[]" value=${
        document.getElementById("feed ").value
      } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td>加辣</td>
      <td ><input type="text" size="3" name="spicy[]" value=${
        document.getElementById("spicy").value
      } 
       style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td>是否要切</td>
      <td> <input type="text" size="3" name="cut[]" value=${
        document.getElementById("cut").value
      } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td>數量</td>
      <td><input type="text" size="2" name="amount[]"  value=${
        document.getElementById("amount").value
      } style="outline:none;border:none;float:right;text-align:right"readonly="readonly"></td>
      </tr><tr>
      <td>小計</td>
      <td><input type="text" size="6" name="sum[]" style="outline:none;border:none;float:right;text-align:right"readonly="readonly" value=${
        document.getElementById("subTotal").value
      } ></td></tr></table>`;
    parent.appendChild(div);
    document.getElementById("meals").selectedIndex = "0"; //每加入成功一件商品，自動還原預設值
    document.getElementById("marinade").selectedIndex = "0";
    document.getElementById("feed ").selectedIndex = "0";
    document.getElementById("spicy").selectedIndex = "0";
    document.getElementById("cut").selectedIndex = "0";
    document.getElementById("amount").selectedIndex = "0";
    document.getElementById("bill").innerHTML =
      Number(checkOut) + Number(total);
    document.getElementById("total").value = Number(checkOut) + Number(total); //將總金額顯示於按鈕上
  }
};

del = (item) => {
  //讓使用者刪除所選商品
  const a = document.getElementById("bill").innerHTML;
  if (confirm("確定要刪除此餐點嗎?")) {
    const txt = "餐點已刪除";
    const total =
      a -
      item.parentElement.parentElement.parentElement.lastChild.lastChild
        .lastChild.value;
    document.getElementById("bill").innerHTML = total;
    document.getElementById("total").value = document.getElementById(
      "bill"
    ).innerHTML;
    item.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
    const Original = document.getElementById("Sidebar").innerHTML;
    if (Original == "") {
      //確認如果購物車內無商品，將訂購按鈕隱藏
      document.getElementById("orderButton").style.display = "none";
    }
  }
};
