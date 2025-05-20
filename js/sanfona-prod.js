const cliquePacote = document.querySelector(".titulo-pacote");
const cliqueKg = document.querySelector(".titulo-kg");

cliquePacote.addEventListener("click", () => {
  const sectionPacote = document.querySelector(".preco-pacote");
  const seta = document.querySelector(".seta-pacote");
  sectionPacote.classList.toggle("hidden");
  seta.classList.toggle("switch");
});

cliqueKg.addEventListener("click", () => {
  const sectionKg = document.querySelector(".preco-kg");
  const seta = document.querySelector(".seta-kg");
  sectionKg.classList.toggle("hidden");
  seta.classList.toggle("switch");
});
