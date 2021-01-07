var signup = null;

function openS() {

    if (signup && !signup.closed) {
      signup.focus();
    } else if (signup == null || (signup.closed == true)) {
      signup = window.open("../signup.php");
    }
  }

  function closeWin() {
    // open(location, '_self').close();
    signup.close();
    return false;
  }
