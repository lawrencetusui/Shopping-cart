function generateErrors(){
  const urlParams = new URLSearchParams(window.location.search);//Get erro

  const error1 = urlParams.get('error');

  var error = document.getElementById("error");
  //fname1.value= FirstName;
  if(error1!= null){
  error.innerHTML= error1;
    error.innerHTML="Please correct the error of: "+error1 ;
}else{
  error.innerHTML=null ;
}

}
