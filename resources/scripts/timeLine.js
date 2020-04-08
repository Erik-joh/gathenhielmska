function timeLine() {
  const timeLineContainer = document.querySelector(".timeline-container");
  const timeLine = document.querySelector(".timeline");
  timeLine.style.height = `${timeLineContainer.clientHeight}px`;
  window.addEventListener("resize", () => {
    timeLine.style.height = `${timeLineContainer.clientHeight}px`;
  });
}
export default timeLine;
