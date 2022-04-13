function validateData(value, field){
  switch (field) {
    case "username":
    if (value.length<6) {
      return false;
    }else if (value.length>16) {
      return false;
    }else {
      return true;
    }
    break;
    case "email":
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
     {
     return true;
    }else {
     return false;
    }
     break;

    case "password":
    if (value.length<8) {
      return true;
      break;
    }else {
      return false;
      break;
    }
  }
}


$.getJSON('../hidden/',function(data){


  $("#nmInput").keyup(function(){
    let inputValue = $(this).val();
    if ($(this).val()) {
      var words = countWords(inputValue);
      let numbPresent = ifNumber(inputValue);
      if (!numbPresent) {
       if (words>=2) {
         showSuccess("#nmAlert",'( Name Accepted &#10003; )');
       }else {
         showWarning("#nmAlert",'( Too Short e.g. John Doe )');
       }
      }else {
       showWarning("#nmAlert",'( Number not allowed &#x2716; )');
      }
    }else {
      showWarning("#nmAlert",'(Required )');
    }
  });

  $("#unInput").keyup(function(){

    let inputValue = $(this).val();
    if (inputValue) {
      let isDataValidated = validateData(inputValue, "username");
      if (isDataValidated) {
        for (var i = 0; i < data.length; i++) {
          if (inputValue == data[i].fastUsername ) {
            showWarning("#unAlert",`( Username is already taken  &#x2716; )`);
          }else {
            showSuccess("#unAlert",`( Username is available &#10003; )`);
          }
        }
      }else {
        showWarning("#unAlert",'( Range 6 - 20 letters )',"" );
      }
    }
    else {
      showWarning("#unAlert",'( Required )',"" );
    }
  });

  $("#emInput").keyup(function(){
    let toLow = $(this).val();
    let inputValue = toLow.toLowerCase();
    $(this).val(inputValue);
    if ($(this).val()) {
      let isDataValidated = validateData(inputValue, "email");
      if (isDataValidated) {
        for (var i = 0; i < data.length; i++) {
          if (inputValue == data[i].userEmail ) {
            showWarning("#emAlert",'( Already registered &#x2716; )');
          }else {
            showSuccess("#emAlert",'( E-mail Accepted &#10003; )');
          }
        }
      }else {
        showWarning("#emAlert",'( Invalid Email )');
      }
    }else {
      showWarning("#emAlert",'( Required )');
    }
  });

  $("#psInput").keyup(function(){
    let inputValue = $(this).val();
    if (inputValue) {
      let x = validateData(inputValue,"password");
      if (!x) {
        let pc = passwordStrengthChecker(inputValue);
        switch (pc) {
          case "Weak":
          showWarning("#psAlert",'( Weak Password )');
            break;

          case "Strong":
          showSuccess("#psAlert",'( Strong Paswword &#10003; )');
            break;

          case "Medium":
          showWarning("#psAlert",'( Medium Password &#10003; )');
          $("#psAlert").addClass("medium");
             break;
        }

      }else{
       showWarning("#psAlert",'( Minimum Length 8 Letters )');
      }
    }else {
      showWarning("#psAlert",'( Required )');
    }
  });

  $("#confirmPassInput").keyup(function(){
    let cPassValue = $(this).val();
    let passValue = $("#psInput").val();
    if (passValue == cPassValue) {
       showSuccess("#confirmPassAlert",'( Password Matched &#10003; )');
    }else {
      showWarning("#confirmPassAlert",'( Password Not Match )');
    }
  });

});
// function captilizeWords(input){
//   var CapitalizeWords = input[0].toUpperCase();
//    for (var i = 1; i <= input.length - 1; i++) {
//        let currentCharacter,
//            previousCharacter = input[i - 1];
//        if (previousCharacter && previousCharacter == ' ') {
//            currentCharacter = input[i].toUpperCase();
//        } else {
//            currentCharacter = input[i];
//        }
//        CapitalizeWords = CapitalizeWords + currentCharacter;
//    }
//    return CapitalizeWords;
// }
function passwordStrengthChecker(x){
  let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
  let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');
  let badge;
  if(strongPassword.test(x)) {
        badge = 'Strong';
    } else if(mediumPassword.test(x)) {
        badge = 'Medium';
    } else {
        badge = 'Weak';
    }
    return badge;
}
function ifNumber(val){
  return /\d/.test(val);
}
function countWords(x){
  let rmChar = x.replace(/[^A-Za-z]\s+/g);
  let nwWord = rmChar.trim().split(" ");
  return nwWord.length;
}
function showSuccess(id, message){
  $(id).html(message);
  $(id).addClass("success");
  $(id).removeClass("warning");
}
function showWarning(id, message){
  $(id).html(message);
  $(id).addClass("warning");
  $(id).removeClass("success");
}
