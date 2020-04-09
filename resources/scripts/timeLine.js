function timeLine() {
  const timeLineContainer = document.querySelector(".timeline-container");
  const timeLine = document.querySelector(".timeline");
  if (timeLine) {
    timeLine.style.height = `${timeLineContainer.clientHeight}px`;
    window.addEventListener("resize", () => {
      timeLine.style.height = `${timeLineContainer.clientHeight}px`;
    });
  }
}
export default timeLine;
