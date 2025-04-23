const menu = document.querySelector(".menu-mobile");
const listaMobile = document.querySelector(".ul-mobile");
const menuHamb = document.querySelector(".img-mobile");
const fecharMenu = document.querySelector(".fecharMobile");

const arrayEvent = ["click", "touchstart"];

menuHamb.addEventListener("click", () => {
  listaMobile.classList.add("ativo");
});

fecharMenu.addEventListener("click", () => {
  listaMobile.classList.remove("ativo");
});
