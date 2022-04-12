const xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST","../hidden/index.php");
xmlhttp.onload = function(){
 var myobj = JSON.parse(this.responseText);
}
xmlhttp.send();
function inputAuth(param) {
  switch (param) {
    case nmInput:
    let x =document.getElementById('nmInput').value;
    console.log(x);
    break;

    case unInput:
    break;

    case emInput:
    break;

    case psInput:
    break;
    default:
  }
}
