/*
var myWindow;

function open() {
  myWindow = window.open("member_order.html");
}

function close() {
  myWindow.close();
}
*/
var myWindow = null;
var windowOpened = null;

function openWin(productName, productPrice, productDisplayName, productDescription) {

  /*  if ((myWindow == null) || (myWindow.closed))
     {
       myWindow = window.open("member_order.html?productName=" + productName + "&productPrice=" + productPrice + "&productDisplayName=" + productDisplayName+ "&productDescription=" + productDescription);

  return true;
  }*/
  if (windowOpened && !windowOpened.closed) {
    windowOpened.focus();
  } else if (windowOpened == null || (windowOpened.closed == true)) {
    windowOpened = window.open("member_order.php?productName=" + productName + "&productPrice=" + productPrice + "&productDisplayName=" + productDisplayName + "&productDescription=" + productDescription);

  }
}

function closeWin() {
  // open(location, '_self').close();
  myWindow.close();
  return false;
}


var swindowOpened = null;

function openShop(){
  if (swindowOpened && !swindowOpened.closed) {
    swindowOpened.focus();
  } else if (swindowOpened == null || (swindowOpened.closed == true)) {
    swindowOpened = window.open("member_cart.php");
  }
}
