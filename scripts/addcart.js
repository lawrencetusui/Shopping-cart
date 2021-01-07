
var swindowOpened = null;

function openShop(){
  if (swindowOpened && !swindowOpened.closed) {
    swindowOpened.focus();
  } else if (swindowOpened == null || (swindowOpened.closed == true)) {
    swindowOpened = window.open("member_cart.php");
  }
}
