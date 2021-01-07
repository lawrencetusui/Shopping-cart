function myFunction() {
  //set x and y variable for price and quantity
  var x = document.getElementById("Content").elements.namedItem("Price").value;
  var y = document.getElementById("Content").elements.namedItem("Quantity").value;
  document.getElementById('addbtn').style.display = 'block';

  //alert user to enter values
  if (x == "" || y == "" || x<=0 || y<=0) {
    alert("Please input the currect Value for price and quantity");
    return false;
  } else {
    //if calculation is successful
    //no need alert('Order has been caculated');
      document.getElementById("Pr").innerHTML = "Price = "+  x ;
      document.getElementById("Qu").innerHTML = "Quantity = "+  y;
    document.getElementById("demo").innerHTML = "Total price = "+  x * y;
    //Cant change after calculation
    document.getElementById('Quantity').readOnly = true;
  document.getElementById("addbtn").show();
  document.getElementById("addbtn").style.visibility = "visible";

    return true;
  }

}
//reset value with the clear button
function resetval() {
    document.getElementById("Quantity").value = 1;
  document.getElementById("Pr").innerHTML = "";
  document.getElementById("Qu").innerHTML =  "";
  document.getElementById("demo").innerHTML = "";
  document.getElementById('Quantity').readOnly = false;
  document.getElementById("addbtn").style.display = "none";
    return true;
}

//Prac B task 3 changes description using innerHTML property
function generateForm(){
  const urlParams = new URLSearchParams(window.location.search);
  const productT = urlParams.get('productName');
  const productName = urlParams.get('productDisplayName');
  const productPrice = urlParams.get('productPrice');
  const productDescription = urlParams.get('productDescription');
  var priceInput = document.getElementById("Price");
  var productTitle = document.getElementById("productTitle");
  var productDescrip = document.getElementById("productDescription");
  var id = document.getElementById("id");
  priceInput.value= productPrice;
  productTitle.innerHTML= productName;
  id.value= productT;
  const productTag = document.getElementById("productName");
  productTag.innerHTML="Product ID: "+productT;
  productDescrip.innerHTML= productDescription;
document.getElementById("addbtn").style.display = "none";
}
