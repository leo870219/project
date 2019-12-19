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
function on()
{
var no = document.getElementById('go');
no.style.visibility="visible";

if (baseText == null) 
{
baseText =1;
document.getElementById("add").value="滷肉便當";
var sbar = document.getElementById('statusbar');
sbar.style.marginTop = "10px";
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
function ShoppingCart()
{
var no = document.getElementById('go');
no.style.visibility = "hidden";
var buy = document.getElementById('Sidebar');
var Original =document.getElementById('Sidebar').innerHTML;
var booking = document.getElementById('Sidebar1');
if (book == null)
{
book=buy.innerHTML ;
buy.innerHTML = "<table><tr>"
　+"<td><input type=\"text\" name=\"a[]\" value="+document.getElementById('add').value+" style=\"width:195px;outline:none;;border:none;font-size:23.6px\" readonly=\"readonly\"></td>"
+"<td><input type=\"button\" id=\"h[]\" value=\"x\" style=\"float:right;\" onclicl=\"delete()\"></td>"
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
 +"<td><input type=\"text\" name=\"g[]\"  value="+document.getElementById('add6').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"

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
buy.innerHTML =Original+ "<table><tr>"
　+"<td><input type=\"text\" name=\"a[]\" value="+document.getElementById('add').value+" style=\"width:195px;outline:none;;border:none;font-size:23.6px\" readonly=\"readonly\"></td>"
+"<td><input type=\"button\" id=\"h[]\" value=\"x\" style=\"float:right;\" onclicl=\"delete()\"></td>"
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
 +"<td><input type=\"text\" name=\"g[]\"  value="+document.getElementById('add6').value+" style=\"width:150px;ooutline:none;border:none;float:right;text-align:right\"readonly=\"readonly\"></td>"
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
var no = document.getElementById('go');
no.style.visibility="visible"; 

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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
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
  var no = document.getElementById('go');
  no.style.visibility="visible"; 
  
  if (baseText1 == null) 
  {
    
  baseText = 1;
  document.getElementById("add").value="招牌飯";
  var sbar = document.getElementById('statusbar1');
  sbar.style.marginTop = "10px";
  }
  }