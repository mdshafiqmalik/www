function goTo(i) {
  window.location.href = `index.php?tag=${i}`;
  document.getElementById(`${i}`).classList.add("tagActive");
}
