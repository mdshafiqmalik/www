
$.getJSON('../hidden/',function(data){
  console.log(data);
  $("#nmInput").keyup(function(){

  });

  $("#unInput").keyup(function(){
    let inputValue = this.value;
    if ($(this).val()) {
      for (var i = 0; i < data.length; i++) {
        if (inputValue == data[i].fastUsername ) {
           $("#unAlert").html(` ( ${inputValue} is not available )`);
           $("#unAlert").addClass("warning");
           $("#unAlert").removeClass("success");
        }else {
          $("#unAlert").html(`( ${inputValue} is available )`);
          $("#unAlert").addClass("success");
          $("#unAlert").removeClass("warning");
        }
      }
    }else {
      $("#unAlert").html('');
    }
  });

  $("#emInput").keyup(function(){
    let inputValue = this.value;
    if ($(this).val()) {
      for (var i = 0; i < data.length; i++) {
        if (inputValue == data[i].userEmail ) {
           $("#emAlert").html(` ( Already registered )`);
           $("#emAlert").addClass("warning");
           $("#emAlert").removeClass("success");
        }else {
          $("#emAlert").html(`( Not Registered )`);
          $("#emAlert").addClass("success");
          $("#emAlert").removeClass("warning");
        }
      }
    }else {
      $("#emAlert").html('');
    }
  });

  $("#psInput").keyup(function(){
    let dbValue = data.fastUsername;
    let inputValue = this.value;
    if (inputValue == dbValue ) {

    }
  });

});
