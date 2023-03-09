window.addEventListener("scroll", function () {
  if (window.scrollY > 200) {
    document.querySelector(".site-header").style.transition = "all 2s";
    document.querySelector(".site-header").style.background = "white";
    document.querySelector(".site-header").style.opacity = 1;
    document.querySelector(".site-header").style.width = "100%";
    document.querySelector(".site-header").style.top = "0";
    document.querySelector(".site-header").style.position = "fixed";
    document.querySelector(".site-header").style.boxShadow =
      "0px 2px 2px 1px rgba(0, 0, 255, .2)";
    document.querySelector(".custom-logo_1").style.display = "block";
    document.querySelector(".custom-logo").style.display = "none";
    document.querySelector(".menu-button").style.border = "2px solid #42a5e3";
    const textColors = document.querySelectorAll(".main-navigation li a ");
    textColors.forEach((textColor) => {
      textColor.style.color = "#000";
    });
  } else {
    document.querySelector(".site-header").style.transition = "all .3s";
    document.querySelector(".site-header").style.background = "none";
    document.querySelector(".site-header").style.boxShadow = "none";
    document.querySelector(".custom-logo_1").style.display = "none";
    document.querySelector(".custom-logo").style.display = "block";
    document.querySelector(".menu-button").style.border = "2px solid #fff";
    const textColors = document.querySelectorAll(".main-navigation li a ");
    textColors.forEach((textColor) => {
      textColor.style.color = "white";
    });
  }
});
