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

let lastScrollTop = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', function() {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    // Scroll down
    header.style.top = '-70px'; // Adjust this value based on the height of your header
  } else {
    // Scroll up
    header.style.top = '0';
  }
  lastScrollTop = scrollTop;
});