function validateForm() {
    var formInputs = document.forms["Form"].getElementsByTagName("input");
    for (var i = 0; i < formInputs.length; i++) {
      if (formInputs[i].value == "") {
        alert("Vul alle velden in");
        return false;
      }
    }
    return true;
  }