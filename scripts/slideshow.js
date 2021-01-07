var myIndex = 0;
//showSlide(1);
function loadPage(){
var hide7 = document.getElementsByClassName("fistSlideShow");
for (j = 0; j < hide7.length; j++) {
  hide7[j].style.display = "none";
}
var hide2 = document.getElementsByClassName("secondSlideShow");
for (y = 0; y < hide2.length; y++) {
  hide2[y].style.display = "none";
}
var hide1 = document.getElementsByClassName("thirdSlideShow");
for (i = 0; i < hide1.length; i++) {
  hide1[i].style.display = "none";
}
var hide3 = document.getElementsByClassName("forthSlideShow");
for (a = 0; a < hide3.length; a++) {
  hide3[a].style.display = "none";
}
var hide4 = document.getElementsByClassName("fifthSlideShow");
for (n = 0; n < hide4.length; n++) {
  hide4[n].style.display = "none";
}
var hide5 = document.getElementsByClassName("sixthSlideShow");
for (g = 0; g < hide5.length; g++) {
  hide5[g].style.display = "none";
}
}
function hideFirst(){
  var hide1 = document.getElementsByClassName("firstSlideShow");
  for (i = 0; i < hide1.length; i++) {
    hide1[i].style.display = "none";
  }
}
function hideSecond(){
  var hide2 = document.getElementsByClassName("secondSlideShow");
  for (y = 0; y < hide2.length; y++) {
    hide2[y].style.display = "none";
  }
  function hideThird(){
    var hide1 = document.getElementsByClassName("thirdSlideShow");
    for (i = 0; i < hide1.length; i++) {
      hide1[i].style.display = "none";
    }
  }
}
function showSlide(param) {
  var i;
  switch(param) {
  case 1:
  var x = document.getElementsByClassName("firstSlideShow");
  var hide2 = document.getElementsByClassName("secondSlideShow");
  for (y = 0; y < hide2.length; y++) {
    hide2[y].style.display = "none";
  }
  var hide1 = document.getElementsByClassName("thirdSlideShow");
  for (i = 0; i < hide1.length; i++) {
    hide1[i].style.display = "none";
  }
  var hide3 = document.getElementsByClassName("forthSlideShow");
  for (a = 0; a < hide3.length; a++) {
    hide3[a].style.display = "none";
  }
  var hide4 = document.getElementsByClassName("fifthSlideShow");
  for (n = 0; n < hide4.length; n++) {
    hide4[n].style.display = "none";
  }
  var hide5 = document.getElementsByClassName("sixthSlideShow");
  for (g = 0; g < hide5.length; g++) {
    hide5[g].style.display = "none";
  }

      break;
  case 2:
  var x = document.getElementsByClassName("secondSlideShow");
  var hide2 = document.getElementsByClassName("firstSlideShow");
  for (y = 0; y < hide2.length; y++) {
    hide2[y].style.display = "none";
  }
  var hide1 = document.getElementsByClassName("thirdSlideShow");
  for (i = 0; i < hide1.length; i++) {
    hide1[i].style.display = "none";
  }
  var hide3 = document.getElementsByClassName("forthSlideShow");
  for (a = 0; a < hide3.length; a++) {
    hide3[a].style.display = "none";
  }
  var hide4 = document.getElementsByClassName("fifthSlideShow");
  for (n = 0; n < hide4.length; n++) {
    hide4[n].style.display = "none";
  }
  var hide5 = document.getElementsByClassName("sixthSlideShow");
  for (g = 0; g < hide5.length; g++) {
    hide5[g].style.display = "none";
  }
    break;
    case 3:
    var x = document.getElementsByClassName("thirdSlideShow");
    var hide1 = document.getElementsByClassName("firstSlideShow");
    for (i = 0; i < hide1.length; i++) {
      hide1[i].style.display = "none";
    }
    var hide2 = document.getElementsByClassName("secondSlideShow");
    for (y = 0; y < hide2.length; y++) {
      hide2[y].style.display = "none";
    }
    var hide3 = document.getElementsByClassName("forthSlideShow");
    for (a = 0; a < hide3.length; a++) {
      hide3[a].style.display = "none";
    }
    var hide4 = document.getElementsByClassName("fifthSlideShow");
    for (n = 0; n < hide4.length; n++) {
      hide4[n].style.display = "none";
    }
    var hide5 = document.getElementsByClassName("sixthSlideShow");
    for (g = 0; g < hide5.length; g++) {
      hide5[g].style.display = "none";
    }
      break;
      case 4:
      var x = document.getElementsByClassName("forthSlideShow");
      var hide1 = document.getElementsByClassName("firstSlideShow");
      for (i = 0; i < hide1.length; i++) {
        hide1[i].style.display = "none";
      }
      var hide2 = document.getElementsByClassName("secondSlideShow");
      for (y = 0; y < hide2.length; y++) {
        hide2[y].style.display = "none";
      }
      var hide3 = document.getElementsByClassName("thirdSlideShow");
      for (a = 0; a < hide3.length; a++) {
        hide3[a].style.display = "none";
      }
      var hide4 = document.getElementsByClassName("fifthSlideShow");
      for (n = 0; n < hide4.length; n++) {
        hide4[n].style.display = "none";
      }
      var hide5 = document.getElementsByClassName("sixthSlideShow");
      for (g = 0; g < hide5.length; g++) {
        hide5[g].style.display = "none";
      }
        break;
        case 5:
        var x = document.getElementsByClassName("fifthSlideShow");
        var hide1 = document.getElementsByClassName("firstSlideShow");
        for (i = 0; i < hide1.length; i++) {
          hide1[i].style.display = "none";
        }
        var hide2 = document.getElementsByClassName("secondSlideShow");
        for (y = 0; y < hide2.length; y++) {
          hide2[y].style.display = "none";
        }
        var hide3 = document.getElementsByClassName("thirdSlideShow");
        for (a = 0; a < hide3.length; a++) {
          hide3[a].style.display = "none";
        }
        var hide4 = document.getElementsByClassName("forthSlideShow");
        for (n = 0; n < hide4.length; n++) {
          hide4[n].style.display = "none";
        }
        var hide5 = document.getElementsByClassName("sixthSlideShow");
        for (g = 0; g < hide5.length; g++) {
          hide5[g].style.display = "none";
        }
          break;
          case 6:
          var x = document.getElementsByClassName("thirdSlideShow");
          var hide1 = document.getElementsByClassName("firstSlideShow");
          for (i = 0; i < hide1.length; i++) {
            hide1[i].style.display = "none";
          }
          var hide2 = document.getElementsByClassName("secondSlideShow");
          for (y = 0; y < hide2.length; y++) {
            hide2[y].style.display = "none";
          }
          var hide3 = document.getElementsByClassName("thirdSlideShow");
          for (a = 0; a < hide3.length; a++) {
            hide3[a].style.display = "none";
          }
          var hide4 = document.getElementsByClassName("fifthSlideShow");
          for (n = 0; n < hide4.length; n++) {
            hide4[n].style.display = "none";
          }
          var hide5 = document.getElementsByClassName("forthSlideShow");
          for (g = 0; g < hide5.length; g++) {
            hide5[g].style.display = "none";
          }
            break;
  default:

}

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
}
