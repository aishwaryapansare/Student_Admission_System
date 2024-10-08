function search(obj)
{
var XHRobj=false;
if(window.XMLHttpRequest)
{
 XHRobj=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XHRobj=new ActiveXObject("Microsoft.XMLHTTP");
}
var str1= "t1=" + document.getElementById("t1").value;

XHRobj.onreadystatechange = show;
XHRobj.open('POST', 'admin1.php', true);
XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XHRobj.send(str1);

function show()
{
if (XHRobj.readyState == 4)
{
if (XHRobj.status == 200)
{
result = XHRobj.responseText;
document.getElementById('txt').innerHTML = result;
}
}
}
}