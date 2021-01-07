
var fname =null;
 var lname=null;
 var address =null;
var  uid =null;
var   email =null;
var  phone=null;

//alert(urlParams);
// const signup = urlParams.get('signup');
// alert("Signup = BEFORE LOOP"+signup);
function success(fname,lname,address,uid,email,phone){
  var urlParams = new URLSearchParams(window.location.search);//Get erro

 if(urlParams.get('signup')){

        var myWindow = window.open("", "myWindow", "width=500,height=400");
         myWindow.document.write("<fieldset><legend> Welcome! "+fname+" "+lname+"</legend><p><label>The account with the following details have been created:<br> First name:"+fname+"<br>Last name: "+lname+"<br>Your address is:"+address+"<br> Your email is "+email+"<br> Your phone Number is "+phone+"<br> Thank you for registering at Bazaar Ceramics!</label></p></fieldset>");
}
}
function check(){


  fname = document.getElementById("fname").value;
  lname = document.getElementById("lname").value;
   address = document.getElementById("address").value;
   uid = document.getElementById("uid").value;
  email = document.getElementById("mail").value;
    phone = document.getElementById("phone").value;
    var pattern = new RegExp(/^[a-z0-9_]+$/i);
       success(fname,lname,address,uid,email,phone);

}
