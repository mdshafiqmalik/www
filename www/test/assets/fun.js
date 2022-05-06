function goTo(i) {
  window.location.href = `index.php?tag=${i}`;
  document.getElementById(`${i}`).classList.add("tagActive");
}
function allActive(){
  window.location.href = 'index.php';
  document.getElementById("all").classList.add("tagActive");
}

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    setTimeout(function(){
       document.getElementById('interactive');
       document.getElementById('onLoad').style.display= "none";
    },1000);
  }
}
