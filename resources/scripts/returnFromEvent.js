function returnFromEvent() {
  const btn = document.querySelector(".go-back");

  if (btn) {
    btn.addEventListener("click", () => {
      window.history.back();
    });
  }
}

export default returnFromEvent;
