document.addEventListener("Load", () => {
  if (window.location.href.split("?")[1]) {
    document.querySelector("#modalAddCours").style.display = "flex";
  }
});

document.querySelector(".hideModel").addEventListener("click", function () {
  document.querySelector("#modalAddCours").style.display = "none";
  document.querySelector("#bgdark").style.display = "none";
});
