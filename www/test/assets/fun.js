function goTo(i) {
  window.location.href = `index.php?tag=${i}`;
  document.getElementById(`${i}`).classList.add("tagActive");
  document.getElementById('onLoad').style.display= "none";
}
function allActive(){
  window.location.href = 'index.php';
  document.getElementById("all").classList.add("tagActive");
  document.getElementById('onLoad').style.display= "none";
}

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    setTimeout(function(){
       document.getElementById('interactive');
       document.getElementById('onLoad').style.display= "none";
       document.getElementsByTagName("body")[0].style.overflowX = "scroll";
       document.getElementsByTagName("body")[0].style.overflowY = "scroll";
    },1000);
  }else {
    document.getElementById('onLoad').style.display= "block";
    document.getElementsByTagName("body")[0].style.overflowX = "scroll";
    document.getElementsByTagName("body")[0].style.overflowY = "hidden";
  }
}
