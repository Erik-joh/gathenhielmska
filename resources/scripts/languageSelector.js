function LanguageSelector() {
  const dropDownButton = document.querySelector(".language-header");
  const dropDownList = document.querySelector(".language-selector");
  dropDownButton.addEventListener("click", () => {
    dropDownList.classList.toggle("visible");
  });
}
export default LanguageSelector;
