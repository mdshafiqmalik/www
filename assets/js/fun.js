function goTo(i) {
  window.location.href = `?tag=${i}`;
  document.getElementById(`${i}`).classList.add("tagActive");
  document.getElementById('onLoad').style.display= "none";
}
function allActive(){
  window.location.href = '/';
  document.getElementById("all").classList.add("tagActive");
  document.getElementById('onLoad').style.display= "none";
}

function onLoad(){
  setTimeout(function(){
    document.body.scrollTop = "";
     document.getElementById('onLoad').style.display= "none";
     document.getElementsByTagName("body")[0].style.overflowX = "scroll";
     document.getElementsByTagName("body")[0].style.overflowY = "scroll";
  },1000);
}
