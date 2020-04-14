function Hamburger() {
  const hamButton = document.querySelector(".toggler");
  const menu = document.querySelector(".menu");
  hamButton.addEventListener("click", () => {
    menu.classList.toggle("menu-open");
  });
}
export default Hamburger;
