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
  }
}
function getData(url, callback){
  var data = $.ajax({
    type: 'GET',
    url: url
  }).done(callback);
  return data;
}

// check email on focusout
$("#emInput").focusout(function(){
  let inputValue = $("#emInput").val();
  getData(`../../../server/hidden/register.php?email=${inputValue}`, function(data){
    if (data.Result == true) {
      showWarning("#emAlert",'( Email Already Registered )' );

    }else if(data.Result == undefined){
      errorMessage("Some Problem at our end !");
    }else {
      checkEmail();
      function checkEmail(){
        let inputValue = $("#emInput").val();
        let toLow = inputValue.toLowerCase();
        let j;
        $("#emInput").val(toLow);
        if ($("#emInput").val()) {
          if (validateData(toLow, "email")) {
            showSuccess("#emAlert",'( E-mail Accepted &#10003; )');
            j = true;
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
    }
  });
});


// Username Check
  $("#unInput").focusout(function(){
    let inputValue = $("#unInput").val();
    getData(`../../../server/hidden/register.php?username=${inputValue}`, function(data){
      if (data.Result == true) {
        showWarning("#unAlert",'( Username Taken )' );
      }else if(data.Result == undefined){
        errorMessage("Some Problem at our end !");
      }else {
        checkUsername();
        function checkUsername(){
          let inputValue = $("#unInput").val();
            if (inputValue) {
              if (validateData(inputValue, "username")) {
                if (!hasWhiteSpace(inputValue)) {
                  showSuccess("#unAlert",`( Username is available &#10003; )`);
                  j = true;
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
      }
    });
  });


//  Name Check
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
        showWarning("#nmAlert",'(Not allowed &#x2716; )');
        j = false;
      }
    }else {
      showWarning("#nmAlert",'(Required )');
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
       if (inputValue.length>8) {
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
  // Checking all fields on submit
function finalSubmit(){
    let i;
    if (isNameTrue()) {
      if (isUsernameTrue()) {
        if (isEmailTrue()) {
          if (isPasswordTrue()) {
            if (isConfirmPasswordTrue()) {
              if (isTCchecked()) {
                i  = true;
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
    console.log(i);
  }

function isTCchecked(){
  let i;
  if ($('input[name=terms]:checked').length > 0){
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
