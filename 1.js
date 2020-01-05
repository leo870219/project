var baseText = null;
var baseText = null;
var baseText1 = null;
var baseText2 = null;
var baseText3 = null;
var baseText4 = null;
var baseText5 = null;
var baseText6 = null;
var baseText7 = null;
var baseText8 = null;
var baseText9 = null;
var baseText10 = null;
var baseText11 = null;
var book = null;
var i=0;

$( function() {
		$(  "#datepicker" ).datepicker({
	  	maxDate: " +5d",
	  	minDate: "0"
		});
		// 獲取值
		var dateFormat = $( "#datepicker" ).datepicker( "option", "dateFormat" );
		// 設定顯示方式
		$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
		$("#datepicker").attr('autocomplete', 'off'); 
	});
	
	
function a(){                   //將可訂購時間丟入陣列，當使用者選擇日期時觸發
	var dt = new Date();
	var month = new Array(12);
	var day = new Array(31);
	var hour = new Array(24);
	var min = new Array(60);
	var a =0;
	var abc=new Array('09:30','09:35','09:40','09:45','09:50','09:55'
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
)
	
	
	var a=document.getElementById('datepicker');
	var b=a.value;
	var NewArray = new Array();
	var NewArray = b.split( "-" , 3 );
	if (NewArray[2] == dt.getDate() && dt.getHours()>9 && dt.getHours()<20 && dt.getMinutes()<15 && dt.getMinutes()>=0){  //判斷訂購日期是否為今日訂購以及是否在可訂購時間內，並設定至少30分鐘後取餐
		form=document.theForm;
		a=dt.getHours()+":"+'45';
		var aa =abc.indexOf(a);
		var b=0;
	for(i=aa;i<abc.length;i++){
		form.ti.options[b]=new Option(abc[i]);
		b=b+1;
		}
	}	else if  (NewArray[2] == dt.getDate() && dt.getHours()>9 && dt.getHours()<20 &&dt.getMinutes()<30 && dt.getMinutes()>=15){
		form=document.theForm;
		a=dt.getHours()+1+":"+'00';
		var aa =abc.indexOf(a);
		var b=0;
		for(i=aa;i<abc.length;i++){
		form.ti.options[b]=new Option(abc[i]);
		b=b+1;
	 	}
	}
		else if  (NewArray[2] == dt.getDate() && dt.getHours()>9 && dt.getHours()<20 && dt.getMinutes()<45 && dt.getMinutes()>=30){
		form=document.theForm;
		a=dt.getHours()+1+":"+'00';
		var aa =abc.indexOf(a);
		var b=0;
		for(i=aa;i<abc.length;i++){
		form.ti.options[b]=new Option(abc[i]);
		b=b+1;
		}
	}
	   else if  (NewArray[2] == dt.getDate()&& dt.getHours()>9 && dt.getHours()<20&&dt.getMinutes()<60 && dt.getMinutes()>=45){
		form=document.theForm;
		a=dt.getHours()+1+":"+'30';
		var aa =abc.indexOf(a);
		var b=0;
		for(i=aa;i<abc.length;i++){
		form.ti.options[b]=new Option(abc[i]);
		b=b+1;
	 	}
	}   else if (NewArray[2] != dt.getDate()){
		form=document.theForm;
		for(i=0;i<abc.length;i++){
		form.ti.options[i]=new Option(abc[i]);
		}
	}
		else {
		alert('請在早上9點後及晚上8點前訂購哦~');
		}
	}
function node(name, child){
this.name=name;
this.child=child;
}
	
function delivery(){
document.getElementById('demo').style.display="block";
document.getElementById('column1').required=true;
document.getElementById('column2').required=true;
document.getElementById('column3').required=true;
document.getElementById('address').required=true;
}
	
function takeout(){
document.getElementById('demo').style.display="none";
document.getElementById('column1').required=false;
document.getElementById('column2').required=false;
document.getElementById('column3').required=false;
document.getElementById('address').required=false;
} 
	
function dataHierarchy(){
// 地區
var area=new Array();
var i=0;
area[i++]=new node("", [""]);
area[i++]=new node("北區", ["中清路三段", "文心路四段", "北平路","天津路"]);
// 縣市
var output=new Array();
var i=0;
output[i++]=new node("", );
output[i++]=new node("台中市", area);
	
	
return(output);
}
dataTree=dataHierarchy();
	
// 第三個欄位被更動後的反應動作

function onChangeColumn3(){
updatePath();
}
	
// 第二個欄位被更動後的反應動作
function onChangeColumn2(){
form=document.theForm;
index1=form.column1.selectedIndex;
index2=form.column2.selectedIndex;
index3=form.column3.selectedIndex;
// Create options for column 3
for (i=0;i<dataTree[index1].child[index2].child.length;i++)
form.column3.options[i]=new Option(dataTree[index1].child[index2].child[i], dataTree[index1].child[index2].child[i]);
form.column3.options.length=dataTree[index1].child[index2].child.length;
updatePath();
}
	
// 第一個欄位被更動後的反應動作
function onChangeColumn1() {
form=document.theForm;
index1=form.column1.selectedIndex;
index2=form.column2.selectedIndex;
index3=form.column3.selectedIndex;
// Create options for column 2
for (i=0;i<dataTree[index1].child.length;i++)
form.column2.options[i]=new Option(dataTree[index1].child[i].name, dataTree[index1].child[i].name);
form.column2.options.length=dataTree[index1].child.length;
// Clear column 3
form.column3.options.length=0;
updatePath();
}
	
// 修改所顯示的路徑
function updatePath(){
form=document.theForm;
index1=form.column1.selectedIndex;
index2=form.column2.selectedIndex;
index3=form.column3.selectedIndex;
if ((index1>=0) && (index2>=0) && (index3>=0)) {
text1=form.column1.options[index1].text;
text2=form.column2.options[index2].text;
text3=form.column3.options[index3].text;
form.path.value=text1+text2+text3;
} else
form.path.value="";
}

function on()
{
if (baseText == null) 
{
baseText =1;
document.getElementById("add").value="滷肉便當";
}

}
function hidePopup()
{
var no = document.getElementById('go');
no.style.visibility = "hidden";
document.getElementById("add").selectedIndex = "";
document.getElementById("add1").selectedIndex = "0";
document.getElementById("add2").selectedIndex = "0";
document.getElementById("add3").selectedIndex = "0";
document.getElementById("add4").selectedIndex = "0";
document.getElementById("add5").selectedIndex = "0";
document.getElementById("add6").selectedIndex = "0";
}

function del(item) {
  item.parentElement.parentElement.parentElement.parentElement.remove();
}

function ShoppingCart(obj)
{
var buy = document.getElementById('Sidebar');
var Original =document.getElementById('Sidebar').innerHTML;
var booking = document.getElementById('Sidebar1');
if (book == null)
{         
 i=i+1
 book=book+1;
　var parent = document.getElementById(obj);   
var div = document.createElement("div");//新增 div
    

div.setAttribute("id", i);//設定 div id
div.innerHTML ="<table><tr>"
　+"<td><input type=\"text\" name=\"a[]\" value="+document.getElementById('add').value+" style=\"width:195px;outline:none;;border:none;font-size:23.6px\" readonly=\"readonly\"></td>"
  +"<td><input type=\"button\" onclick=\"del(this)\"value=\"x\" style=\"float:right\"></td>"
+"</tr><tr>"
 +"<td colspan=\"2\"><img src=\"images/1.jpg\" style=\"width:350px; height:185px;\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 　+"<td>飯量</td>"
 +"<td><input type=\"text\" name=\"b[]\" value="+document.getElementById('add1').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 　+"<td >滷汁</td>"
 +"<td><input type=\"text\" name=\"c[]\" value="+document.getElementById('add2').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 　+"<td >加料</td>"
 +"<td><input type=\"text\" name=\"d[]\" value="+document.getElementById('add3').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 　+"<td>加辣</td>"
 +"<td ><input type=\"text\" name=\"e[]\" value="+document.getElementById('add4').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 　+"<td>是否要切</td>"
 +"<td> <input type=\"text\" name=\"f[]\" value="+document.getElementById('add5').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
 +"</tr><tr>"
 +"<td>數量</td>"
 +"<td><input type=\"text\" name=\"g[]\"  value="+document.getElementById('add6').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td></div>";
 parent.appendChild(div);
document.getElementById('la').style.display="block";
document.getElementById("add").selectedIndex = "";
document.getElementById("add1").selectedIndex = "0";
document.getElementById("add2").selectedIndex = "0";
document.getElementById("add3").selectedIndex = "0";
document.getElementById("add4").selectedIndex = "0";
document.getElementById("add5").selectedIndex = "0";
document.getElementById("add6").selectedIndex = "0";
　}
else
{
  i=i+1
  　var parent = document.getElementById(obj);
          
  //新增 div
  var div = document.createElement("div");
          
  //設定 div 屬性，如 id
  div.setAttribute("id", i);
          
  div.innerHTML ="<table><tr>"
  　+"<td><input type=\"text\" name=\"a[]\" value="+document.getElementById('add').value+" style=\"width:195px;outline:none;;border:none;font-size:23.6px\" readonly=\"readonly\"></td>"
  +"<td><input type=\"button\" onclick=\"del(this)\"value=\"x\"style=\"float:right\"></td>"
  +"</tr><tr>"
   +"<td colspan=\"2\"><img src=\"images/1.jpg\" style=\"width:350px; height:185px;\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   　+"<td>飯量</td>"
   +"<td><input type=\"text\" name=\"b[]\" value="+document.getElementById('add1').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   　+"<td >滷汁</td>"
   +"<td><input type=\"text\" name=\"c[]\" value="+document.getElementById('add2').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   　+"<td >加料</td>"
   +"<td><input type=\"text\" name=\"d[]\" value="+document.getElementById('add3').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   　+"<td>加辣</td>"
   +"<td ><input type=\"text\" name=\"e[]\" value="+document.getElementById('add4').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   　+"<td>是否要切</td>"
   +"<td> <input type=\"text\" name=\"f[]\" value="+document.getElementById('add5').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
   +"</tr><tr>"
   +"<td>數量</td>"
   +"<td><input type=\"text\" name=\"g[]\"  value="+document.getElementById('add6').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td></div>";
   parent.appendChild(div);
 document.getElementById("add1").selectedIndex = "0";
 document.getElementById("add2").selectedIndex = "0";
 document.getElementById("add3").selectedIndex = "0";
 document.getElementById("add4").selectedIndex = "0";
 document.getElementById("add5").selectedIndex = "0";
 document.getElementById("add6").selectedIndex = "0";
}
}

function on1()
{
if (baseText1 == null) 
{
	
baseText = 1;
document.getElementById("add").value="特製便當";
var sbar = document.getElementById('statusbar1');
sbar.style.marginTop = "10px";
}
}

function on2()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="花枝捲飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on3()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="蝦捲飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on4()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="滷排骨飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }
function on5()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="炸雞腿飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }
function on6()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="鱈魚飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on7()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="炸排骨飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on8()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="香雞排飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on9()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="雙捲飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on10()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="三寶飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }

function on11()
{
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="招牌飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }