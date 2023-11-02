alert("This is to inform you that your external javascript works properly!");

document.write("This is external JavaScript | Copyright © 2023 |");

window.onload = function showTime() {
  var date = new Date();
  var h = date.getHours(); // 0 - 23
  var m = date.getMinutes(); // 0 - 59
  var s = date.getSeconds(); // 0 - 59
  var session = " AM";

  if (h == 0) {
    h = 12;
  }

  if (h > 12) {
    h = h - 12;
    session = " PM";
  }

  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;

  var time = h + ":" + m + ":" + s + session;
  document.getElementById("MyClockDisplay").innerText = time;
  document.getElementById("MyClockDisplay").textContent = time;

  setTimeout(showTime, 1000);
};

showTime();

function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "ajax.php?q=" + str, true);
    xmlhttp.send();
  }
}

function showUser(str) {
  if (str == "") {
    document.getElementById("txtUser").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtUser").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
}

function showCD(str) {
  if (str == "") {
    document.getElementById("txtCD").innerHTML = "";
    return;
  }
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtCD").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "getcd.php?q=" + str, true);
  xmlhttp.send();
}
