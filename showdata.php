<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getdata.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Pawin Khenphukhiaw</option>
<option value="2">Kawin KPW</option>
<option value="3">Sawin KPW</option>
<option value="4">Warin KPW</option>
</select>
</form>
<br>
<div id="txtHint"><b>แสดงข้อมูล....</b></div>

</body>
</html>