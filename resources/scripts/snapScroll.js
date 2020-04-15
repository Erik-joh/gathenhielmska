function snapScroll() {
  const container = document.getElementById("scrollX");
  const scrollableItems = document.getElementsByClassName("front-event-cards");
  const scrollCircleContainer = document.querySelector(
    ".scroll-highlight-container"
  );
  if (container && window.innerWidth < 800) {
    const scrollablePages = scrollableItems.length / 2;

    let templist = [];
    let listDivs = [];
    let circles = [];
    for (let i = 0; i < scrollablePages; i++) {
      let div = document.createElement("div");
      div.classList.add("scrollable");
      listDivs.push(div);
      container.appendChild(div);
      let circle = document.createElement("div");
      circle.classList.add("scroll-circle");
      circles.push(circle);
      scrollCircleContainer.appendChild(circle);
    }
    for (let i = 0; i < scrollableItems.length; i = i + 2) {
      templist.push([scrollableItems[i], scrollableItems[i + 1]]);
    }
    for (let i = 0; i < listDivs.length; i++) {
      listDivs[i].appendChild(templist[i][0]);
      listDivs[i].appendChild(templist[i][1]);
    }

    let width = container.scrollWidth / scrollablePages;
    let scrollLeft = container.scrollLeft;
    for (let i = 0; i < scrollablePages; i++) {
      if (width * i - 50 < scrollLeft && width * (i + 1) - 50 > scrollLeft) {
        circles[i].classList.add("scroll-circle-highlighted");
      } else {
        circles[i].classList.remove("scroll-circle-highlighted");
      }
    }
    container.addEventListener("scroll", () => {
      scrollLeft = container.scrollLeft;
      for (let i = 0; i < scrollablePages; i++) {
        if (width * i - 50 < scrollLeft && width * (i + 1) - 50 > scrollLeft) {
          circles[i].classList.add("scroll-circle-highlighted");
        } else {
          circles[i].classList.remove("scroll-circle-highlighted");
        }
      }
    });
  }
}
export default snapScroll;
