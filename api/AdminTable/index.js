
window.onload=function(){
  setInterval('showcart()',1000);
}

function showcart() {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("ordering").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET","ordering.php",true);
  xmlhttp.send();
}

function allowDelimanUser(str) {
if (str == "") {
  document.getElementById("").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","deliveryUser/allowDelimanUser.php?id="+str,true);
  xmlhttp.send();
}
}

function deleteDelimanUser(str) {
if (str == "") {
  document.getElementById("").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","deliveryUser/deleteDelimanUser.php?id="+str,true);
  xmlhttp.send();
}
}

function allowResUser(str) {
if (str == "") {
  document.getElementById("").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","restaurantUser/allowResUser.php?id="+str,true);
  xmlhttp.send();
}
}

function deleteResUser(str) {
if (str == "") {
  document.getElementById("").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","restaurantUser/deleteResUser.php?id="+str,true);
  xmlhttp.send();
}
}
