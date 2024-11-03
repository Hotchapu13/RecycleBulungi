function toggleMenu() {
  const sideMenu = document.getElementById("sideMenu");
  sideMenu.classList.toggle("active");
}
document.addEventListener("click", function (event) {
  const sideMenu = document.getElementById("sideMenu");
  const menuIcon = document.querySelector(".menu-icon");
  if (!sideMenu.contains(event.target) && !menuIcon.contains(event.target)) {
    sideMenu.classList.remove("active");
  }
});
