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
