window.onload=()=>{
  const datepicker=document.getElementById('datepicker');
  datepicker.onchange=orderTime;
  const delivery=document.getElementById('delivery');
  delivery.addEventListener('click',deliveryHandler);
  const takeout=document.getElementById('takeout');
  takeout.addEventListener('click',takeoutHandler);
  const city=document.getElementById('city');
  city.addEventListener('click',chooseCity);
  const area=document.getElementById('area');
  area.addEventListener('click',chooseArea);
  const road=document.getElementById('road');
  road.addEventListener('click',chooseRoad);

  $(function () {
    $("#datepicker").datepicker({
      maxDate: " +5d",
      minDate: "0",
    });
    // 獲取值
    const dateFormat = $("#datepicker").datepicker("option", "dateFormat");
    // 設定顯示方式
    $("#datepicker").datepicker("option", "dateFormat", "yy-mm-dd");
    $("#datepicker").attr("autocomplete", "off");
  });
  }

orderTime = () => {
  //將可訂購時間丟入陣列，當使用者選擇日期時觸發
  const dt = new Date();
  const BusinessHours=['09:30','09:35','09:40','09:45','09:50','09:55'
  ,'10:00','10:05','10:10','10:15','10:20','10:25','10:30','10:35','10:40','10:45','10:50','10:55'
  ,'11:00','11:05','11:10','11:15','11:20','11:25','11:30','11:35','11:40','11:45','11:50','11:55'
  ,'12:00','12:05','12:10','12:15','12:20','12:25','12:30','12:35','12:40','12:45','12:50','12:55'
  ,'13:00','13:05','13:10','13:15','13:20','13:25','13:30','13:35','13:40','13:45','13:50','13:55'
  ,'14:00','14:05','14:10','14:15','14:20','14:25','14:30','14:35','14:40','14:45','14:50','14:55'
  ,'15:00','15:05','15:10','15:15','15:20','15:25','15:30','15:35','15:40','15:45','15:50','15:55'
  ,'16:00','16:05','16:10','16:15','16:20','16:25','16:30','16:35','16:40','16:45','16:50','16:55'
  ,'17:00','17:05','17:10','17:15','17:20','17:25','17:30','17:35','17:40','17:45','17:50','17:55'
  ,'18:00','18:05','18:10','18:15','18:20','18:25','18:30','18:35','18:40','18:45','18:50','18:55'
  ,'19:00','19:05','19:10','19:15','19:20','19:25','19:30','19:35','19:40','19:45','19:50','19:55'
  ,'20:00','20:05','20:10','20:15','20:20','20:25','20:30'
]
  let UserOrderTime = document.getElementById("datepicker");
  var UserOrderHour = UserOrderTime.value;
  let UserOrderDate = new Array();
  UserOrderDate = UserOrderHour.split("-", 3); //以"-"切割年月日，並將日期獨立取出
  if (
    UserOrderDate[2] == dt.getDate() &&
    dt.getHours() > 9 &&
    dt.getHours() < 20 &&
    dt.getMinutes() < 15 &&
    dt.getMinutes() >= 0
  ) {
    //判斷訂購日期是否為今日訂購以及是否在可訂購時間內，並設定至少30分鐘後取餐
    form = document.theForm;
    UserOrderTime = dt.getHours() + ":" + "45"; //考慮到選擇商品時間，會將時間自動以15分為基準加半小時，範圍0-14分
    let FirstAvailableTime = BusinessHours.indexOf(UserOrderTime);
    let UserOrderHour = 0;
    for (i = FirstAvailableTime; i < BusinessHours.length; i++) {
      form.ti.options[UserOrderHour] = new Option(BusinessHours[i]);
      UserOrderHour = UserOrderHour + 1;
    }
  } else if (
    UserOrderDate[2] == dt.getDate() &&
    dt.getHours() > 9 &&
    dt.getHours() < 20 &&
    dt.getMinutes() < 30 &&
    dt.getMinutes() >= 15
  ) {
    //範圍15-29分
    form = document.theForm;
    UserOrderTime = dt.getHours() + 1 + ":" + "00";
    var FirstAvailableTime = BusinessHours.indexOf(UserOrderTime);
    var UserOrderHour = 0;
    for (i = FirstAvailableTime; i < BusinessHours.length; i++) {
      form.ti.options[UserOrderHour] = new Option(BusinessHours[i]);
      UserOrderHour = UserOrderHour + 1;
    }
  } else if (
    UserOrderDate[2] == dt.getDate() &&
    dt.getHours() > 9 &&
    dt.getHours() < 20 &&
    dt.getMinutes() < 45 &&
    dt.getMinutes() >= 30
  ) {
    //範圍30-44分
    form = document.theForm;
    UserOrderTime = dt.getHours() + 1 + ":" + "00";
    var FirstAvailableTime = BusinessHours.indexOf(UserOrderTime);
    var UserOrderHour = 0;
    for (i = FirstAvailableTime; i < BusinessHours.length; i++) {
      form.ti.options[UserOrderHour] = new Option(BusinessHours[i]);
      UserOrderHour = UserOrderHour + 1;
    }
  } else if (
    UserOrderDate[2] == dt.getDate() &&
    dt.getHours() > 9 &&
    dt.getHours() < 20 &&
    dt.getMinutes() < 60 &&
    dt.getMinutes() >= 45
  ) {
    ////範圍45-59分
    form = document.theForm;
    UserOrderTime = dt.getHours() + 1 + ":" + "30";
    var FirstAvailableTime = BusinessHours.indexOf(UserOrderTime);
    var UserOrderHour = 0;
    for (i = FirstAvailableTime; i < BusinessHours.length; i++) {
      form.ti.options[UserOrderHour] = new Option(BusinessHours[i]);
      UserOrderHour = UserOrderHour + 1;
    }
  } else if (UserOrderDate[2] != dt.getDate()) {
    form = document.theForm;
    for (i = 0; i < BusinessHours.length; i++) {
      form.ti.options[i] = new Option(BusinessHours[i]);
    }
  } else {
    alert("請在早上9點後及晚上8點前訂購哦~"); //如未在許可時間範圍訂購將跳出提醒，並清空值防止訂購資訊錯誤
    document.getElementById("datepicker").value = null;
    document.getElementById("ti").value = null;
  }
};

deliveryHandler = () => {
  //選擇外送，跳出外送地址並設定為必填
  document.getElementById("demo").style.display = "block";
  document.getElementById("city").required = true;
  document.getElementById("area").required = true;
  document.getElementById("road").required = true;
  document.getElementById("address").required = true;
};

takeoutHandler = () => {
  //選擇外帶，隱藏外送地址並設定為非必填
  document.getElementById("demo").style.display = "none";
  document.getElementById("city").required = false;
  document.getElementById("area").required = false;
  document.getElementById("road").required = false;
  document.getElementById("address").required = false;
  document.getElementById("city").value= null;
  document.getElementById("area").value = null;
  document.getElementById("road").value = null;
  document.getElementById("address").value = null;
};

function node(name, child) {
  this.name = name;
  this.child = child;
}

deliveryAddress = () => {
  //利用節點完成資料新增
  var area = new Array(); // 地區
  var i = 0;
  area[i++] = new node("", [""]);
  area[i++] = new node("北區", [
    "中清路三段",
    "文心路四段",
    "北平路",
    "天津路",
  ]);
  var output = new Array(); // 縣市
  var i = 0;
  output[i++] = new node("");
  output[i++] = new node("台中市", area);
  return output;
};
dataTree = deliveryAddress();

chooseCity = () => {
  // 第一個欄位被更動後的反應動作
  form = document.theForm;
  index1 = form.city.selectedIndex;
  index2 = form.area.selectedIndex;
  index3 = form.road.selectedIndex;
  for (
    i = 0;
    i < dataTree[index1].child.length;
    i++ // 使用for迴圈寫入原先設定好的子節點到Column2
  )
    form.area.options[i] = new Option(
      dataTree[index1].child[i].name,
      dataTree[index1].child[i].name
    );
  form.area.options.length = dataTree[index1].child.length;
  form.road.options.length = 0; //Column3防呆
  updatePath();
};

chooseArea = () => {
  // 第二個欄位被更動後的反應動作
  form = document.theForm;
  index1 = form.city.selectedIndex;
  index2 = form.area.selectedIndex;
  index3 = form.road.selectedIndex;
  for (
    i = 0;
    i < dataTree[index1].child[index2].child.length;
    i++ // 使用for迴圈寫入原先設定好的子節點到Column3
  )
    form.road.options[i] = new Option(
      dataTree[index1].child[index2].child[i],
      dataTree[index1].child[index2].child[i]
    );
  form.road.options.length = dataTree[index1].child[index2].child.length;
  updatePath();
};

chooseRoad = () => {
  // 第三個欄位被更動後的反應動作
  updatePath();
};

updatePath = () => {
  // 修改所顯示的路徑
  form = document.theForm;
  index1 = form.city.selectedIndex;
  index2 = form.area.selectedIndex;
  index3 = form.road.selectedIndex;
  if (index1 >= 0 && index2 >= 0 && index3 >= 0) {
    text1 = form.city.options[index1].text;
    text2 = form.area.options[index2].text;
    text3 = form.road.options[index3].text;
    form.path.value = text1 + text2 + text3;
  } else form.path.value = "";
};


