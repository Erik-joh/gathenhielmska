function snapScroll() {
  const container = document.getElementById("scrollX");
  const scrollableItems = document.getElementsByClassName("scrollable");
  const scrollCircleContainer = document.querySelector(
    ".scroll-highlight-container"
  );

  const scrollablePages = scrollableItems.length / 2;

  let scrollLeft = container.scrollLeft;
  const scrollByAmount = container.scrollWidth / scrollablePages;

  for (let i = 0; i < scrollablePages; i++) {
    const div = document.createElement("div");
    div.classList.add("scroll-circle");

    scrollCircleContainer.appendChild(div);
  }
  const circles = scrollCircleContainer.children;
  circles[0].classList.add("scroll-circle-highlighted");
  container.addEventListener("scroll", onScrollFunc);

  function onScrollFunc() {
    let scrollChange = scrollLeft - container.scrollLeft;
    console.log(scrollChange);
    if (scrollChange < 0) {
      container.scrollTo(container.scrollLeft + scrollByAmount, 0);
      for (let i = 0; i < circles.length; i++) {
        if (circles[i].classList.contains("scroll-circle-highlighted")) {
          if (i !== circles.length - 1) {
            circles[i].classList.remove("scroll-circle-highlighted");
            circles[i + 1].classList.add("scroll-circle-highlighted");
            break;
          }
        }
      }
    } else {
      container.scrollTo(container.scrollLeft - scrollByAmount, 0);
      for (let i = 0; i < circles.length; i++) {
        if (circles[i].classList.contains("scroll-circle-highlighted")) {
          if (i !== 0) {
            circles[i].classList.remove("scroll-circle-highlighted");
            circles[i - 1].classList.add("scroll-circle-highlighted");
            break;
          }
        }
      }
    }
    scrollLeft = container.scrollLeft;

    container.removeEventListener("scroll", onScrollFunc);
    container.addEventListener("scroll", noScroll);
    setTimeout(() => {
      container.removeEventListener("scroll", noScroll);
      container.addEventListener("scroll", onScrollFunc);
    }, 500);
  }

  function noScroll() {
    container.scrollTo(scrollLeft, 0);
  }
}
export default snapScroll;
