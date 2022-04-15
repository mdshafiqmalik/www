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
    if (value.length>8) {
      return true;
      break;
    }else {
      return false;
      break;
    }
  }
}

// let parsed = response.json();

function getData(url, callback){
  var data = $.ajax({
    type: 'GET',
    url: url
  }).done(callback);
  // console.log(data);
  return data;
}

getData('hashAPI.php', function(data) {

  let jsData = data;
//  For Full Name
  $("#nmInput").keyup(isNameTrue);
  function isNameTrue(){
    let j;
    let inputValue = $("#nmInput").val();
    console.log();
    if ($("#nmInput").val()) {
      var words = countWords(inputValue);
      let numbPresent = hasNumber(inputValue);
      let hasChars = hasSpecialChars(inputValue);
      if (!hasChars) {
        if (!numbPresent) {
         if (words>=2) {
           showSuccess("#nmAlert",'( Name Accepted &#10003; )');
           j = true;
         }else {
           showWarning("#nmAlert",'( Too Short e.g. John Doe )');
           j = false;
         }
        }else {
         showWarning("#nmAlert",'( Number not allowed &#x2716; )');
         j = false;
        }
      }else {
        showWarning("#nmAlert",'(These Chars. Not allowed &#x2716; )');
        j = false;
      }
    }else {
      showWarning("#nmAlert",'(Required )');
      j = false;
    }
    return j;
  }

//  for Username
  $("#unInput").keyup(isUsernameTrue);
  function isUsernameTrue(){
    let inputValue = $("#unInput").val();
    let j;
    if (inputValue) {
      let isDataValidated = validateData(inputValue, "username");
      if (isDataValidated) {
        if (!hasWhiteSpace(inputValue)) {
            for (var i = 0; i < jsData.length; i++) {
              if (inputValue == jsData[i].membUsername ) {
                showWarning("#unAlert",`( Username is already taken  &#x2716; )`);
                j = false;
                break;  //very Important
              }else {
                showSuccess("#unAlert",`( Username is available &#10003; )`);
                j = true;
              }
            }
        }else {
          showWarning("#unAlert",'( Spaces not allowed )' );
          j = false;
        }
      }else {
        showWarning("#unAlert",'( Range 6 - 16 letters )');
        j = false;
      }
    }
    else {
      showWarning("#unAlert",'( Required )');
      j = false;
    }
    return j;
  }
// For Email
  $("#emInput").keyup(isEmailTrue);
  function isEmailTrue(){
   let toLow = $("#emInput").val();
   let inputValue = toLow.toLowerCase();
   let j;
   $("#emInput").val(inputValue);
   if ($("#emInput").val()) {
     let isDataValidated = validateData(inputValue, "email");
     if (isDataValidated) {
       for (var i = 0; i < jsData.length; i++) {
         if (inputValue == jsData[i].membEmail ) {
           showWarning("#emAlert",'( Already registered &#x2716; )');
           j = false;
           break; //very Important
         }else {
           showSuccess("#emAlert",'( E-mail Accepted &#10003; )');
           j = true;
         }
       }
     }else {
       showWarning("#emAlert",'( Invalid Email )');
       j = false;
     }
   }else {
     showWarning("#emAlert",'( Required )');
     j = false;
   }
   return j;
 }
// For password
  $("#psInput").keyup(isPasswordTrue);
  function isPasswordTrue(){
    isConfirmPasswordTrue();
   let inputValue = $("#psInput").val();
   let i;
   if (inputValue) {
     if (!hasWhiteSpace(inputValue)) {
       let x = validateData(inputValue,"password");
       if (x) {
         if(passwordStrengthChecker(inputValue)){
           i =  true;
         }else {
           i = false;
         }

       }else{
         $("#psAlert").removeClass("medium");
        showWarning("#psAlert",'( Minimum Length 8 Letters )');
        i = false;
       }
     }else {
       $("#psAlert").addClass("medium");
      showWarning("#psAlert",'(  Avoid Spaces &#10003; )');
      i = true;
     }
   }else {
     $("#psAlert").removeClass("medium");
     showWarning("#psAlert",'( Required )');
     i = false;

   }
   return i;
 }
// For Confirm password
  $("#confirmPassInput").keyup(isConfirmPasswordTrue );
  function isConfirmPasswordTrue(){
    let cPassValue = $("#confirmPassInput").val();
    let passValue = $("#psInput").val();
    if (passValue) {
      if (passValue == cPassValue) {
         showSuccess("#confirmPassAlert",'( Password Matched &#10003; )');
         i = true;
      }else {
        showWarning("#confirmPassAlert",'( Password Not Match )');
        i = false;
      }
    }else {
      showWarning("#confirmPassAlert",'( Required )');
      i = false;
    }
   return i;
  }
  function atLeastOneRadio() {
      return ($('input[type=radio]:checked').size() > 0);
  }
  function selectedGender(){
    let i;
    if ($('input[name=gender]:checked').length > 0) {
      i = true;
    }else {
      i = false;
      $("#finalMessage").html("Please Select Gender");
      $("#finalMessageDiv").css("display:block");
      $("#finalMessageDiv").addClass("FMD");
    }
    return i;
  }

  // Checking all fields on submit
 window.finalSubmit = function(){
    let i;
    console.log(selectedGender());
    if (isNameTrue()) {
      if (isUsernameTrue()) {
        if (isEmailTrue()) {
          if (isPasswordTrue()) {
            if (isConfirmPasswordTrue()) {
              if (selectedGender()) {
                if (isTCchecked()) {
                  i  = true;
                }else {
                  i = false;
                }
              }else {
                i = false;
              }
            }else {
              isConfirmPasswordTrue();
              errorMessage("Please Confirm Password");
              i = false;
            }
          }else {
            isPasswordTrue();
            errorMessage("Please Enter Password");
        i = false;
          }
        }else {
          isEmailTrue();
          errorMessage("Please Enter Email");
        i = false;
        }
      }else {
        isUsernameTrue();
        errorMessage("Please Enter Username");
        i = false;
      }
    }else {
      isNameTrue();
      errorMessage("Please Enter Name");
        i = false;
    }
    return i;
  }
});
function isTCchecked(){
  let i;
  if ($('input[name=Terms]:checked').length > 0){
     i = true;
  }else {
    showWarning("#tc", "( Please check this box )");
    i = false;
  }
  return i;
}
function errorMessage(message){
  $("#finalMessage").html(message);
  $("#finalMessageDiv").css("display:block");
  $("#finalMessageDiv").addClass("FMD");
}
//  Ectra Functions
function passwordStrengthChecker(x){
  let i;
  let strength;
    if (hasUpperCase(x)||hasLowerCase(x)) {
      $("#psAlert").removeClass("medium");
      showWarning("#psAlert",'( Weak )');
        if (hasNumber(x)) {
          $("#psAlert").addClass("medium");
          showSuccess("#psAlert",'( Medium &#10003; )');
          if (hasSpecialChars(x)) {
            $("#psAlert").removeClass("medium");
            showSuccess("#psAlert",'( Strong &#10003; )');
          }else {

          }
        }else if(hasSpecialChars(x)) {
          $("#psAlert").addClass("medium");
          showSuccess("#psAlert",'( Medium &#10003; )');
        }
    }else if(hasLowerCase(x)) {
      $("#psAlert").removeClass("medium");
      showWarning("#psAlert",'( Weak )');
    }
    else {
      $("#psAlert").removeClass("medium");
      showWarning("#psAlert",'( Weak )');
    }
    return true;
}


function hasWhiteSpace(s) {
  return /\s/g.test(s);
}
function hasNumber(val){
  return /\d/.test(val);
}
function hasLowerCase(str) {
    return (/[a-z]/.test(str));
}
function hasUpperCase(str) {
    return (/[A-Z]/.test(str));
}
function hasSpecialChars(x){
  const specialChars = /[`!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/;
  if(specialChars.test(x)){
    return true;
  }else {
    false;
  }
}

//  Function return no of words in a string
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
