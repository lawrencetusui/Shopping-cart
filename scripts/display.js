function display() {
  //For the submit
  // It shows the text quickly but the form submit event will quickly refresh the page
  var total = document.getElementById("demo").innerHTML;
  var txt;

  if (total != "") {
      txt = "You have confirmed!";
      document.getElementById("result").innerHTML = txt;
     return false;
  } else {
    alert('Please calculate your order first');
      txt = "Not submitted yet";
    document.getElementById("result").innerHTML = txt;
  }
  return false;
}
